<?php

namespace TraderInteractive\SolrPopulator;

use PHPUnit\Framework\TestCase;
use TraderInteractive\SolrPopulator\FileStream;

/**
 * @coversDefaultClass TraderInteractive\SolrPopulator\FileStream
 * @covers ::<private>
 * @covers ::<protected>
 */

class FileStreamTest extends TestCase
{
    /**
     * @test
     * @covers ::Factory
     */
    public function FactoryTest () {
        $fileStream = FileStream::Factory('PhysicalFileStream', 'testing');
        $expect = 'TraderInteractive\SolrPopulator\PhysicalFileStream';
        $actual = get_class($fileStream);

        $this->assertEquals($expect, $actual);
    }

    /**
     * @test
     * @covers ::Factory
     * @expectedException Exception
     * @expectedExceptionMessage Missing class TraderInteractive\SolrPopulator\abc
    */
    public function WrongClassNameTest () {

        $fileStream = FileStream::Factory('abc', 'testing');
        $expect = 'TraderInteractive\SolrPopulator\PhysicalFileStream';
        $actual = get_class($fileStream);
        
        $this->assertEquals($expect, $actual);
    }

    private function getMockFileStream(string $fileContents) : FileStreamInterface
    {

        $mock = $this->createMock(FileStream::class);
        $mock->method('Factory')->willReturn($fileContents);

        return $mock;
    }
}
