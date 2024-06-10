<?php
include_once 'configs.php';

//echo doSomething();

$arr = array(
	array('name'=>'Phong', 'age'=>23),
	array('name'=>'Hung', 'age'=>25),
);

print_r($arr);

// Ở đây các phần tử mảng ko bị can thiệp tận gốc do
// biến $row là biến sao chép nội dung.
foreach($arr as $row)
{
	$row['name'] .= ' hi hi';
	$row['age'] = 24;
}
echo '<br><br>';
var_dump($arr);

// Can thiệp tận gốc nội dung các phần tử mảng.
for ($i=0; $i<count($arr); $i++)
{
	$arr[$i]['name'] .= ' hi hi';
	$arr[$i]['age'] = 24;
}

echo '<br><br>';
var_dump($arr);

