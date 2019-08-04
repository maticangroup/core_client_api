<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 6/1/2019
 * Time: 11:34 AM
 */

namespace Matican\Models\Repository\FlexibleContent;


use Matican\Core\Concepts\CRUDActions;

class Row extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;


    /**
     * @param FlexibleContent
     */
    private $related_to;

    /**
     * @param Column
     */
    private $columns;

    public function __construct()
    {
        $this->columns = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return FlexibleContent
     */
    public function getRelatedTo()
    {
        return $this->related_to;
    }

    /**
     * @param FlexibleContent $related_to
     * @return Row
     */
    public function setRelatedTo(FlexibleContent $related_to)
    {
        $this->related_to = $related_to;

        return $this;
    }

    /**
     * @return Column[]
     */
    public function getColumns()
    {
        return $this->columns;
    }
}