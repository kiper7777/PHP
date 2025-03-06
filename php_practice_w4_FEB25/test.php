<?php
$a=[10,20,30,40];

echo "The array element of a[1] is $a[0] ,<br>";

echo "The array element of a[2] is $a[1] ,<br>";

echo "The array element of a[3] is $a[2] ,<br>";

echo "The array element of a[4] is $a[3] ,<br>";

/////////////

$element=[10,20,30,40];

$element[1]='red'; //override the array element

print "<br>";

echo $element[1];
echo "<pre>";
print_r($element);
echo "</pre>";

/////////////

$element[]=100;

print_r($element);

echo "<pre>";
print_r($element);
echo "</pre>";
//////////////
array_push($element,'Ron');
print_r($element);

print "<br> <br>";

array_push($element,5);
print_r($element);

print "<br> <br>";

////////////////
$array=[1,2,3,4,5,6];
$array1=array(10,20,30,40,50);

echo count($array);

print "<br> <br>";

///////////
echo "<pre>";
print_r(array_merge($array,$array));
echo "</pre>";

print "<br> <br>";

////////////

$arr1=[1,2,3,4,5,6];
$arr2=[10,20,30,40,50];
echo array_shift($arr2);
echo "<pre>";
print_r($arr2);
echo "</pre>";

print "<br> <br>";
////////////
$ass_arr=array('name'=>'Anna', 'lastname'=>'Brown','age'=>38);

echo'<pre>';
print_r($ass_arr);
echo'</pre>';

print "<br> <br>";
////////////
$multi=[
    [1,2,3,4,5],
    [10,20,30,40],
    [100,200,300,400]
    ];
    
    print_r($multi[1][2]); ////30

    print "<br> <br>";
    ////////////
$emp=[
    ['name'=>'John','surname'=>'smith' ,'experience'=>5],
    ['name'=>'Bob','surname'=>'Mario' , 'experience'=>6],
    ['name'=>'Tom','surname'=>'Toad', 'experience'=>4]
    ];
    
echo "<pre>";
print_r($emp);
echo "</pre>";

////////////
$name='SAE';
 echo "welcome to $name";
 print "<br> <br>";
////////////
$name2='Good afternoon';
$name2.='student';
print $name2;

print "<br> <br>";
////////////
$s="hello";
$s.="this is";
$s.="our world";
echo $s;

print "<br> <br>";
////////////
if (print("test")) {
	print("It worked!"); }


print "<br> <br>";
////////////  
$a = array('name'=>'Fred','age'=> 35, 'wife'=>'Wilma');
echo "<pre>";
var_dump($a);
echo "</pre>";


print "<br> <br>";
////////////  
$like="PHP";
$name="Tom";
echo 'name is '.$name.' and like '.$like;
print "<br>";
printf('name is %s and I like %s', $name,$like);

print "<br> <br>";
////////////  
$s="Hello this is our world";
echo $s;
print "<br>";
echo strlen($s);
print "<br>";
echo substr($s,6);
print "<br>";

//////////
$s="Hello this is our world";
echo substr($s,-14);

print "<br> <br>";
////////////  
$str="PHP is open source and backend language,PHP is also a interpreted language ";
echo $str;
echo '<br>'.str_replace('PHP','Python',$str);

print "<br> <br>";
////////////  
$str1="I love php.PHP is very simple and  easy to learn ";
echo '<br>' .str_ireplace('php','Python',$str1);

print "<br> <br>";
//////////// 
$name = "Fred Flintstone";
$fluff = substr($name, 6, 4); // $fluff is "lint”
echo $fluff;
print "<br>";

$sound = substr($name, 11); // $sound is "tone"
echo $sound;
print "<br>";

$negative= substr($name, -2); // what’s the output?
echo $negative;
print "<br> <br>";

//////
echo strpos("I love, I love php too!","php");


/////
$array=array(true,false, null, 'abc', 33,'33','22.4', 22.4,',  ', 0,'0');
foreach($array as $val){
    if(is_string($val)){
        echo "$val is a string<br>";
    }
}

print "<br> <br>";
/////

$string = 'This is manoj';
$n=strlen($string);
echo $n;
for($i=1;$i<=$n;$i++)
{
    $val= $string[-$i];
   echo $val;
}

print "<br> <br>";
/////

$text="hello";
 echo strrev($text);

 print "<br> <br>";
 /////

 $str_first="SAE";
   $str_2nd="SAE";
   $out=strcmp($str_first,$str_2nd);
   echo $out;


   print "<br> <br>";
   /////

$str_first="SAE in London";
$str_2nd="SAE";
$split_string=str_split($str_first);
echo "<pre>";
print_r($split_string);
echo "</pre>";
   
print "<br>";
$split_string=str_split($str_first,2);
echo "<pre>";
print_r($split_string);
echo "</pre>";
print "<br>";

////
function hello($name)
{
echo " $name welcome to SAE";
}
hello('Maria');
print "<br>";

/////
function fact($number)
{
$fact=1;
for($i=1;$i<=$number;$i++)
{
$fact=$fact*$i;
}

echo"The result fact is $fact";
}

$number=5;
fact($number);

print "<br>";
//////

function mul($num)
{
$mul=$num*2;
echo $mul;
}

$num=9;
mul($num);


?>