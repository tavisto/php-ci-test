<?php
namespace Foo;

class Bar
{
    /**
     * Just a variable
     *
     * @var string
     */
    protected $var1;

    /**
     * Build it
     *
     * @return void
     */
    public function __construct($var1)
    {
        $this->var1 = $var1;
    }
}
