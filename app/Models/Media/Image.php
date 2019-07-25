<?php

namespace Matican\Models\Media;
//'name' => $file->getClientOriginalName(),
//                                'filename' => $file->getPathname(),
//                                'Mime-Type' => $file->getClientOriginalName(),
//                                'contents' => fopen($file->getPathname(), 'r'),

class Image
{
    private $name;
    private $fileName;
    private $mime_type;
    private $content;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * @param mixed $mime_type
     */
    public function setMimeType($mime_type): void
    {
        $this->mime_type = $mime_type;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }
}
