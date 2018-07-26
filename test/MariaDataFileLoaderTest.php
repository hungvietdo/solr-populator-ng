<?php

namespace TraderInteractive\SolrPopulator;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass TraderInteractive\SolrPopulator\MariaDataFileLoader
 * @covers ::<private>
 * @covers ::<protected>
 */

class MariaDataFileLoaderTest extends TestCase
{
    /**
     * @test
     * @covers ::getMappedAdRecords
     */
    public function getMappedAdRecords()
    {
        $files = [
            $this->getMockFileStream('4|||1234|||N'),
            $this->getMockFileStream('4|||4321|||U'),
        ];

        $loader = new MariaDataFileLoader($files);
        $records = $loader->getMappedAdRecords();

        $expectedRecords = [
            [
                'REALM_ID' => '4',
                'AD_ID' => '1234',
                'NEW_USED_FLAG' => 'N',
            ],
            [
                'REALM_ID' => '4',
                'AD_ID'=>'4321',
                'NEW_USED_FLAG' => 'U'
            ],
        ];

        $this->assertSame($expectedRecords, $records);
    }

    private function getMockFileStream(string $fileContents) : FileStreamInterface
    {
        $mock = $this->createMock(FileStreamInterface::class);
        $mock->method('getContents')->willReturn($fileContents);

        return $mock;
    }
}
