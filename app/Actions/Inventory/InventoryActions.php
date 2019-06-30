<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 30/06/19
 * Time: 08:47
 */

namespace Matican\Actions\Inventory;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\Transaction\Request;
use Matican\Models\Repository\Person;

class InventoryActions extends CRUDActions
{
    /**
     * @param integer $inventoryID
     * @param Person $person
     * @return \Matican\Core\Transaction\Response|string
     * @throws \ReflectionException
     */
    public static function set_inventory_keeper($inventoryID, Person $person)
    {
        $request = new Request('Inventory', 'Inventory', 'set_inventory_keeper');
        $request->add_query('inventory_id', $inventoryID);
        $request->add_instance($person);
        return $request->send();
    }

    /**
     * @param integer $inventoryID
     * @return \Matican\Core\Transaction\Response|string
     */
    public static function get_inventory_keeper($inventoryID)
    {
        $request = new Request('Inventory', 'Inventory', 'get_inventory_keeper');
        $request->add_query('inventory_id', $inventoryID);
        return $request->send();
    }

    /**
     * @param $inventoryID
     * @param $status_machine_name
     * @return \Matican\Core\Transaction\Response|string
     */
    public static function set_status($inventoryID, $status_machine_name)
    {
        $request = new Request('Inventory', 'Inventory', 'set_status');
        $request->add_query('inventory_id', $inventoryID);
        $request->add_query('status', $status_machine_name);
        return $request->send();
    }

    public static function get_status($inventoryID)
    {
        $request = new Request('Inventory', 'Inventory', 'get_status');
        $request->add_query('inventory_id', $inventoryID);
        return $request->send();
    }

    public static function get_all_statuses()
    {
        $request = new Request('Inventory', 'Inventory', 'get_all_statuses');
        return $request->send();
    }
}