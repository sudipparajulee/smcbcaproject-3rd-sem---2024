<?php
//indexed array
$fruits = ['apple', 'banana', 'orange'];
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "<br>";
}

//associative array
$person = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
echo "Name: " . $person['name'] . "<br>";
echo "Age: " . $person['age'] . "<br>";
echo "City: " . $person['city'] . "<br>";

//sorting 
$numbers = [4, 2, 8, 6, 1];
sort($numbers);
echo "Sorted Numbers: <br>";
foreach ($numbers as $number) {
    echo $number . "<br>";
}
//reverse sorting
rsort($numbers);
echo "Reverse Sorted Numbers: <br>";
foreach ($numbers as $number) {
    echo $number . "<br>";
}

//sorting associative array by value
$students = ['BCA' => 85, 'BBA' => 90, 'MBA' => 80];
asort($students);
echo "Sorted Students by Value: <br>";
foreach ($students as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
//sorting associative array by key
ksort($students);
echo "Sorted Students by Key: <br>";
foreach ($students as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>