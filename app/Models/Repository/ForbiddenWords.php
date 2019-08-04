<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;

class ForbiddenWords extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $word;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * @param string $word
     * @return ForbiddenWords
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }
}
