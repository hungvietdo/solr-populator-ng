<?php

namespace TraderInteractive\SolrPopulator;

/**
 * A simple interface that allows easy mocking of processor classes
 * for testing.
 */
interface ProcessorInterface
{
    public function transform(array $fileStreams): array;
    public function addQueue(array $fileStream);
    public function popPopulator(int $batchSize) : bool;
}
