<?php
namespace ngyuki\Skeleton\Tests;

use ngyuki\Skeleton\Sample;
use PHPUnit\Framework\TestCase;
use function PHPUnit\assertEquals;
use function PHPUnit\assertFalse;

/**
 * @author ngyuki
 */
class SkeletonTest extends TestCase
{
    /**
     * @test
     */
    public function main_()
    {
        $argv = array(__FILE__);
        $ret = Sample::main(count($argv), $argv);
        assertEquals(0, $ret);
    }

    /**
     * @test
     */
    public function test_()
    {
        $obj = new Sample();
        $ret = $obj->add(1, 2);
        assertEquals(3, $ret);
    }

    /**
     * @test
     */
    public function helper_()
    {
        $ret = TestHelper::eq(1, 2);
        assertFalse($ret);
    }
}
