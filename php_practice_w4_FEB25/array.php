<?php
//how to create array
$arr=array(10,20,30,40);
echo $arr[0];

echo "<pre>";
print_r($arr);
echo "</pre>";

//how to create array
$arr2=['Java', 'PHP', 'Python'];
echo "<pre>";
print_r($arr2);
echo "</pre>";

//how to create array
$arr3[0]=100;
$arr3[1]=200;
$arr3[2]=300;
$arr3[3]=400;
$arr3[4]=500;

echo "<pre>";
print_r($arr3);
echo "</pre>";

//access the array elements
for($i=0;$i<=4;$i++)
{
    echo $arr3[$i] . "<br>";
}

//how to manipulation
$arr3[3]="Web development";
for($i=0;$i<=4;$i++)
{
    echo $arr3[$i] . "<br>";
}

//how to add element
$arr3[]="Full Stack Development";
echo "<pre>";
print_r($arr3);
echo "</pre>";

//for each
foreach($arr3 as $val)
{
    echo $val . "<br>";
}

//assosiative array
$age=[
   "Bob" => 50,
   "Tom" => 32,
   "John" => 25,
   "Duke" => 20
];
echo "<pre>";
print_r($age);
echo "</pre>";

$age["Tom"]=100;
echo "<pre>";
print_r($age);
echo "</pre>";

echo $age["Bob"];


array_push($age, 'Tomy');
array_push($age, 'Tomy2');
echo "<pre>";
print_r($age);
echo "</pre>";


$age=[
    "Bob" => 50,
    "Tom" => 32,
    "John" => 25,
    "Duke" => 20
 ];
 foreach($age as $key=>$val)
 {
    echo "$key=$val <br>";
 }


 $age=[
    "Bob" => 50,
    "Tom" => 32,
    "John" => 25,
    "Duke" => 20
 ];
 foreach($age as $key=>$val)
 {
    echo "Hi $key welcome to our website! Happy Birthday! You are now $val years old <br> <br>";
 }


 $age=[
    "Bob" => 50,
    "Tom" => 32,
    "John" => 25,
    "Duke" => 20
 ];
 foreach($age as $key=>$val)
  {
    if($val===50)
    echo "Hi $key welcome to our website! Happy Birthday! You are now $val years old <br>";
 }



//  $age=[
//     "Bob" => 50,
//     "Tom" => 32,
//     "John" => 25,
//     "Duke" => 20
//  ];
//  $age.array_push($age, 44);
//  foreach($age as $key=>$val)
//  {
//    if($val===50)
//    echo "Hi $key welcome to our website! Happy Birthday! You are now $val years old <br>";
// }

$length_array=count($arr);
echo "<pre>";
print_r($length_array);
echo "</pre>";



$num1=[10,20];
$num2=[100,200,300,400];
$num3=array_merge($num1,$num2);
var_dump($num3);
print_r($num3);

for($i=0;$i<count($num3);$i++)
{
    echo " $i the value is $num3[$i] <br><br>";
}

foreach($num3 as $key => $val)
{
    echo "the value of $key is $val <br>";
}


?>