<?php 
namespace Foo;

class Baz extends Bar
{

    /**
     * Just another variable
     *
     * @var string
     */
    protected $var2;

    
    /**
     * Build it
     *
     * @return void
     */
    public function __construct($var1, $var2)
    {
        parent::__construct($var1);
        $this->var2 = $var2;
    }
}
