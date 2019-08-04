<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 5:50 PM
 */

namespace App\FormModels\Repository;


class ForbiddenWordsModel
{
    private $id;
    private $forbiddenWord;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getForbiddenWord()
    {
        return $this->forbiddenWord;
    }

    /**
     * @param mixed $forbiddenWord
     */
    public function setForbiddenWord($forbiddenWord): void
    {
        $this->forbiddenWord = $forbiddenWord;
    }



}