<?php
namespace Foo;

class BazMock extends Baz
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
    
    /**
     * Gets the value of var2
     *
     * @return string
     */
    public function getVar2()
    {
        return $this->var2;
    }
}