<?php

namespace TraderInteractive\SolrPopulator;

/**
 * A simple interface that allows easy mocking of file streams
 * for testing.
 */
interface FileStreamInterface
{
    public function getContents() : string;
}
