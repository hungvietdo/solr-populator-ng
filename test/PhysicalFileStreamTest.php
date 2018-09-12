<?php

namespace TraderInteractive\SolrPopulator;

use PHPUnit\Framework\TestCase;
use TraderInteractive\SolrPopulator\PhysicalFileStream;
use org\bovigo\vfs\vfsStream;

/**
 * @coversDefaultClass TraderInteractive\SolrPopulator\PhysicalFileStream
 * @covers ::<private>
 * @covers ::<protected>
 */

class PhysicalFileStreamTest extends TestCase
{
    private $_vfsStreamFilePath;

    private $_mockFileContent = "4|||5000025560|||U|||2916784|||2003|||3|||TRAILER|||765313265|||";

    public function setUp() {

        $structure = [
            '20' => [
                '6' => [
                    '0' => [
                        '5000025560.data' => $this->_mockFileContent
                    ]    
                ]
            ]
        ];
        
        $vsfRootDir = vfsStream::setup('root',null,$structure);
        $this->_vfsStreamFilePath = $vsfRootDir->url(). '/20/6/0/5000025560.data';

        $this->assertTrue($vsfRootDir->hasChild('20/6/0'));
	}

	public function tearDown() {
	}

    /**
     * @test
     * @covers ::getContents
     * @covers ::__construct
     */
    public function getContentsTest()
    {

        $PhysicalFile = new PhysicalFileStream($this->_vfsStreamFilePath);
        
        $expect = $PhysicalFile->getContents();
        $actual = $this->_mockFileContent;

        $this->assertEquals($expect, $actual);
    }
}
