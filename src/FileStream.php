<?php

namespace TraderInteractive\SolrPopulator;

use Exception;

class FileStream
{
    public static function Factory(string $class, $filePath = '') : FileStreamInterface
    {
        $class = 'TraderInteractive\\SolrPopulator\\'. $class;

        if (!class_exists($class)) {
            throw new Exception('Missing class '. $class);
        }

        return new $class($filePath);
    }
}