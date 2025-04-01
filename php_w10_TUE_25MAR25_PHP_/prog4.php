<?php
class getsetVal
{
    private $a,$b;
    function set_data($n,$m)
    {
        $this->a=$n;
        $this->b=$m;
    }

    function get_data()
    {
        echo "the value of a is " .$this->a;
        echo "the value of b is " .$this->b;
    }
}

$obj=new getsetVal();
$obj->set_data(10,30);
$obj->get_data();

?>
