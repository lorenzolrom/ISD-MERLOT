<?php
/**
 * LLR Technologies & Associated Services
 * Information Systems Development
 *
 * Mercury InfoScape
 *
 * User: lromero
 * Date: 6/11/2019
 * Time: 10:07 AM
 */


namespace views\pages;


use views\elements\Header;

abstract class SidebarDocument extends AuthenticatedPage
{
    /**
     * SidebarDocument constructor.
     * @param string|null $permission
     * @throws \exceptions\InfoCentralException
     * @throws \exceptions\SecurityException
     * @throws \exceptions\ViewException
     */
    public function __construct(string $permission = NULL)
    {
        parent::__construct($permission);
        $this->setVariable("content", self::templateFileContents("SidebarDocument", self::TEMPLATE_PAGE));

        // Add header
        $header = new Header();
        $this->setVariable("header", $header->getTemplate());

        // Add footer
        $this->setVariable("footer", self::templateFileContents("Footer", self::TEMPLATE_ELEMENT));

        $this->setVariable('operatorName', 'Operator: ' . $this->user->getUsername());
    }
}