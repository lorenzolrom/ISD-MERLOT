<?php
/**
 * LLR Technologies & Associated Services
 * Information Systems Development
 *
 * Mercury InfoScape
 *
 * User: lromero
 * Date: 4/14/2019
 * Time: 10:52 AM
 */


namespace views\pages\inventory;


use views\pages\NetCenterDocument;

class WarehouseListPage extends NetCenterDocument
{
    public function __construct()
    {
        parent::__construct("itsm_inventory-warehouses-r", 'inventory');

        $this->setVariable("tabTitle", "Warehouses");
        $this->setVariable("content", self::templateFileContents("inventory/WarehouseListPage", self::TEMPLATE_PAGE));
    }
}