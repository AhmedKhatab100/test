<?php

function selection_sort($data)
{
for($i=0; $i<count($data)-1; $i++) {
	$min = $i;
	for($j=$i+1; $j<count($data); $j++) {
		if ($data[$j]<$data[$min]) {
			$min = $j;
		}
	}
    $data = swap_positions($data, $i, $min);
}
return $data;
}

function swap_positions($data1, $left, $right) {
	$temp = $data1[$right];
	$data1[$right] = $data1[$left];
	$data1[$left] = $temp;
	return $data1;
}
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Selection Sorting :\n";
echo "Original Array :\n";
echo implode(', ',$my_array );
echo "\nSorted Array :\n";
echo implode(', ',selection_sort($my_array));
echo '<br>';

/////////////////////////////////////////////
function quick_sort($my_array)
 {
	if(count($my_array)<=1) 
	{
		return $my_array;
	}else{
		$pivoit=$my_array[0];
		$left=array();
		$right=array();
		for ($i=1; $i<count($my_array);$i++){
			if ($my_array[$i]<$pivoit) {
				$left[]=$my_array[$i];
			}else{
				$right[]=$my_array[$i];
			}
		}
		return merge_sort(quick_sort($right),array($pivoit),quick_sort($right));
			
		  }
		}
	$unsorted = array(3, 0, 2, 5, -1, 4, 1);
echo "Selection Sorting :\n";
echo implode(', ',$unsorted )."@unsorted<br>";
$sorted=quick_sort($unsorted);
echo implode(', ',$sorted )."@sorted<br>";
echo '<br>';
		
////////////////////////////////////////////////////
function merge_sort($my_array){
	if(count($my_array) == 1 ) return $my_array;
	$mid = count($my_array) / 2;
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
	$left = merge_sort($left);
	$right = merge_sort($right);
	return merge($left, $right);
}
function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
		if($left[0] > $right[0]){
			$res[] = $right[0];
			$right = array_slice($right , 1);
		}else{
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		$res[] = $left[0];
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		$res[] = $right[0];
		$right = array_slice($right, 1);
	}
	return $res;
}
$test_array = array(100, 54, 7, 2, 5, 4, 1);
echo "Merge Sorting :\n";
echo "Original Array : ";
echo implode(', ',$test_array );
echo "\nSorted Array :";
echo implode(', ',merge_sort($test_array))."\n";
echo '<br>';
////////////////////////////////////////////////////

function insertion_Sort($my_array)
{
	for($i=0;$i<count($my_array);$i++){
		$val = $my_array[$i];
		$j = $i-1;
		while($j>=0 && $my_array[$j] > $val){
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
return $my_array;
}
$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Insertation Sorting :\n";
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array :\n";
print_r(insertion_Sort($test_array));



?>