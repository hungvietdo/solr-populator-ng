<?php

namespace TraderInteractive\SolrPopulator;

use Exception;

abstract class AbstractTransform
{
    protected $_filePath;
    public function __construct()
    {
        $this->_filePath ='';
    }

    public function transformedContent() : array
    {
        return [];
    }
}