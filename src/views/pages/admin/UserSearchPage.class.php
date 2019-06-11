<?php
/**
 * LLR Technologies & Associated Services
 * Information Systems Development
 *
 * Mercury InfoScape
 *
 * User: lromero
 * Date: 5/05/2019
 * Time: 11:53 AM
 */


namespace views\pages\admin;


use views\pages\NetCenterDocument;

class UserSearchPage extends NetCenterDocument
{
    public function __construct()
    {
        parent::__construct('settings', 'admin');

        $this->setVariable('tabTitle', 'Users');
        $this->setVariable('content', self::templateFileContents('admin/UserSearchPage', self::TEMPLATE_PAGE));
    }
}