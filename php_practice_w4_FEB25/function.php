<?php
function add_num(...$nums)
{
$sum=0;
foreach($nums as $value)
{
$sum=$sum+$value;
}
return $sum;
}

echo "<br>".add_num(100,200,300);

print "<br>";
///////////

function master_fun()
{
echo "I am under the master function";
function child_fun()
{
echo " I am in child function section";
}
}
master_fun();
print "<br>";
child_fun();

print "<br>";
///////////

function recursion_prog($number)
{
if($number<10)
{
echo '<br>'.$number.'<br>';
recursion_prog( $number+1);
}
}
$number=1;
$result=recursion_prog($number);

print "<br>";
///////////
function NaturalNumbers($number) {
    if($number<=10){
    echo "$number <br/>";
    NaturalNumbers($number+1);
    }
    }
    NaturalNumbers(1);

print "<br>";
///////////

function fact($number)
{
if($number==0)
{
return 1;
}

if($number<0){
return -1;
} else {
    return ($number * fact($number-1));
}
}

$result=fact(5);
echo $result;

print "<br>";
///////////

$num=[12,23,34,45,56,12];
$find=in_array(45,$num);
echo $find;
print "<br>";
///////////

$str=['Html','PHP','Java','Python'];
$find=in_array('PHP',$str);
if($find)
{
   echo "The given value is found";
}
else{
   echo "The given value is not found";
}


?>