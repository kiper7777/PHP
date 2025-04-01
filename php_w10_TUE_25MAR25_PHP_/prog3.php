<?php
class calculation{
    public $a,$b,$result;

    // function add($n,$m)
    function add()
    {
        // $this->a=$n;
        // $this->b=$m;
        $this->result=$this->a+$this->b;
        return $this->result;
    }
}

$cal=new calculation();
$cal->a=10;
$cal->b=20;
$result=$cal->add();
echo $result . '<br>';

$obj=new calculation();
$obj->a=100;
$obj->b=200;
$res=$obj->add();
echo $res;

?>