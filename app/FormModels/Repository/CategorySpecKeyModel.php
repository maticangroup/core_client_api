<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/5/2019
 * Time: 10:16 AM
 */

namespace Matican\FormModels\Repository;


class CategorySpecKeyModel
{
    /**
     * @var array
     */
    private $categorySpecKeyId;
    private $categoryId;

    /**
     * @return array
     */
    public function getCategorySpecKeyId(): array
    {
        return $this->categorySpecKeyId;
    }

    /**
     * @param array $categorySpecKeyId
     */
    public function setCategorySpecKeyId(array $categorySpecKeyId): void
    {
        $this->categorySpecKeyId = $categorySpecKeyId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }


}