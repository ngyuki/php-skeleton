<?php
namespace ngyuki\Tests;

use ngyuki\Skeleton\Sample;

/**
 *
 * @author ng
 *
 */
class SkeletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function main()
    {
        $argv = array(__FILE__);
        Sample::main(count($argv), $argv);
    }
    
    /**
     * @test
     */
    public function test()
    {
        $obj = new Sample();
        $this->assertNull($obj->func());
    }
}
