<?php
namespace Foo;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-09-30 at 14:22:12.
 */
class BazTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Baz
     */
    protected $object;

    protected $expected = array(
        'bla' => 'bla',
        'baz' => 'Baz',
    );

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new BazMock(
            $this->expected['bla'],
            $this->expected['baz']
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testVar1()
    {
        $this->assertEquals($this->expected['bla'], $this->object->getVar1());
    }
    
    public function testVar2()
    {
        $this->assertEquals($this->expected['baz'], $this->object->getVar2());
    }
}