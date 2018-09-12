<?php

namespace TraderInteractive\SolrPopulator;

use Exception;

class Processor implements ProcessorInterface
{
    protected $batchSize;

    public function __construct(int $batchSize = 0)
    {
        $this->batchSize = $batchSize;
    }
  
    public function transform(array $fileStreams): array
    {
        return [];
    }
    public function addQueue(array $fileStream): bool
    {
        return true;
    }
    public function popPopulator(int $batchSize) : bool
    {
        return true;
    }
}