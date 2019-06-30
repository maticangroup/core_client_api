<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 6/1/2019
 * Time: 11:34 AM
 */

namespace App\Models\Repository\FlexibleContent;


use App\Core\Concepts\CRUDActions;

class Column extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Row
     */
    private $row;

    /**
     * @param ColumnContent
     */
    private $contents;

    public function __construct()
    {
        $this->contents = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Row
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param Row $row
     * @return Column
     */
    public function setRow(Row $row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * @return ColumnContent[]
     */
    public function getContents()
    {
        return $this->contents;
    }
}