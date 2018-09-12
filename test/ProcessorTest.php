<?php

namespace TraderInteractive\SolrPopulator;

use PHPUnit\Framework\TestCase;
use TraderInteractive\SolrPopulator\Processor;

/**
 * @coversDefaultClass TraderInteractive\SolrPopulator\Processor
 * @covers ::<private>
 * @covers ::<protected>
 */

class ProcessorTest extends TestCase
{

    public function setUp() {
        $this->ProcessorClass = new Processor(10);   
	}

	public function tearDown() {
    }
    
    /**
     * @test
     * @covers ::transform
     * @covers ::__construct
     */
    public function transformTest()
    {
        $records = $this->ProcessorClass->transform([]);
        $this->assertSame([], $records);
    }

    /**
     * @test
     * @covers ::addQueue
     */
    public function addQueueTest()
    {
        $this->assertTrue(TRUE, $this->ProcessorClass->addQueue([]));
    }
    /**
     * @test
     * @covers ::popPopulator
     */
    public function popPopulatorTest()
    {

        $this->assertTrue(TRUE, $this->ProcessorClass->popPopulator(10));        
    }

}
