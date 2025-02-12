<!-- array_assignment -->

<?php
//1.
$arr1=['C', 'C++', 'Java', 'PHP'];
echo "<pre>";
print_r($arr1);
echo "</pre>";

//2.
$arr2=['Apple', 'Apricots', 'Avocado', 'Banana', 'Blackberries', 'Blackberries', 'Blueberries'];
echo "<pre>";
print_r($arr2);
echo "</pre>";

//3. Write a program to add 10 random numbers and calculate the average. 
// function generateRandomNumbers($count = 10) {
//     $numbers = [];
//     $total = 0;
    
//     for ($i = 0; $i < $count; $i++) {
//         $num = rand(10, 20);
//         $numbers[] = $num;
//         $total += $num;
//     }
    
//     $average = $total / $count;
    
//     echo "Generated Numbers: " . implode(", ", $numbers) . "\n" ."<br>";
//     echo "Sum: $total\n" ."<br>";
//     echo "Average: " . number_format($average, 2) . "\n" ."<br>";
// }

// generateRandomNumbers();

$num = rand(10, 20);
echo "<pre>";
print_r($num);
echo "</pre>";

//4.  $arr = array(1, 2, 3, 4, 5); 
// Delete an element from the above array and display the array after delete the element. 
// Note: Used the mentioned function to delete the array element  unset($array[3]);  
$arr = array(1, 2, 3, 4, 5);

// Delete the element at index 3
unset($arr[3]);
// Reindex the array
$arr = array_values($arr);
// Display the array after deletion
echo "<pre>";
print_r($arr);
echo "</pre>";


//5. Write a program to sort the array.
// For example array [90,20,3,10,6,4]
// Note:  sort() - sort arrays in ascending order
$x = array(90, 20, 3, 10, 6, 4);

// Sort the array in ascending order
sort($x);
// Display the sorted array
echo "<pre>";
print_r($x);
echo "</pre>";


//6. Write a program to loop through an associative array using foreach() or with each().
    // Suppose an associative array is -
    // $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');
    $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');

    // Loop through the associative array using foreach()
foreach ($a as $key => $value) 
{
    echo "$key : $value\n" ."<br>";
}


//7. Home assignment


?>