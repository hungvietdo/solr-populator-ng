<?php

namespace TraderInteractive\SolrPopulator;

class PhysicalFileStream implements FileStreamInterface {

    private $_filePath;

    public function __construct(string $filePath)
    {
        $this->_filePath = $filePath;
    }

    public function getContents() : string {
        return file_get_contents($this->_filePath);
    }
}