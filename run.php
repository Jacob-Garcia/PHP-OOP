<?php 
if(is_null('stuff'))
   echo "It is null";
else {
	echo "It is not null";
} 
  var_dump(is_null('XYZ'));
  var_dump(is_null('8008'));
  var_dump(is_null('123'));
  var_dump(is_null('false'));
?>

<br>
<br>

<?php
if(is_object('thing'))
	echo "It is an object";
else {
	echo "It is not an object";
} 
  var_dump(is_object('XYZ'));
  var_dump(is_object('8008'));
  var_dump(is_object('123'));
  var_dump(is_object('false'));
?>

<br>
<br>

<?php
if(is_array('array'))
	echo "It is an array";
else {
	echo "It is not an array";
} 
  var_dump(is_array('XYZ'));
  var_dump(is_array('8008'));
  var_dump(is_array('123'));
  var_dump(is_array('false'));

?>