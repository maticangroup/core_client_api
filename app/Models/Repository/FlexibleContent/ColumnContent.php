<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 6/1/2019
 * Time: 11:34 AM
 */

namespace App\Models\Repository\FlexibleContent;


use App\Core\Concepts\CRUDActions;

class ColumnContent extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Column
     */
    private $related_to;

    /**
     * ColumnContent constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Column
     */
    public function getRelatedTo()
    {
        return $this->related_to;
    }

    /**
     * @param Column $related_to
     * @return ColumnContent
     */
    public function setRelatedTo(Column $related_to)
    {
        $this->related_to = $related_to;

        return $this;
    }
}