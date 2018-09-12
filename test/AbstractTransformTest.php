<?php

namespace TraderInteractive\SolrPopulator;

use PHPUnit\Framework\TestCase;
use TraderInteractive\SolrPopulator\AbstractTransform;

/**
 * @coversDefaultClass TraderInteractive\SolrPopulator\AbstractTransform
 * @covers ::<private>
 * @covers ::<protected>
 */

class AbstractTransformTest extends TestCase
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
        ->getMockBuilder(AbstractTransform::class)
        ->getMockForAbstractClass();

    $result = $calculator->transformedContent();
    $this->assertEquals([], $result);
    }
}
