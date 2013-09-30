<?php
namespace Foo;

class BarMock extends Bar
{
    /**
     * Gets the value of var1
     *
     * @return string
     */
    public function getVar1()
    {
        return $this->var1;
    }
}