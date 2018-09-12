<?php

namespace TraderInteractive\SolrPopulator;

use PHPUnit\Framework\TestCase;
use TraderInteractive\SolrPopulator\TrailerTransform;

/**
 * @coversDefaultClass TraderInteractive\SolrPopulator\TrailerTransform
 * @covers ::<private>
 * @covers ::<protected>
 */

class TrailerTransformTest extends TestCase
{

    public function setUp() {
	}

	public function tearDown() {
    }
    
    /**
     * @test
     * @covers ::transformedContent
     * @covers ::__construct
     */
    public function transformTest()
    {
        $calculator = $this
        ->getMockBuilder(TrailerTransform::class)
        ->getMock();

    $result = $calculator->transformedContent();
    $this->assertEquals([], $result);
    }
}
