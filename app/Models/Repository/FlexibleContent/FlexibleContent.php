<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 6/1/2019
 * Time: 11:34 AM
 */

namespace Matican\Models\Repository\FlexibleContent;


use Matican\Core\Concepts\CRUDActions;

class FlexibleContent extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Row
     */
    private $rows;

    public function __construct()
    {
        $this->rows = [];
    }


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Row[]
     */
    public function getRows()
    {
        return $this->rows;
    }
}