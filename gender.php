<input type="radio" name="gender"
<?php 
    if (isset($gender) && $gender=="female") echo "checked";
?>

value="female">Female <br>
<input type="radio" name="gender"
<?php 
    if (isset($gender) && $gender=="male") echo "checked";
?>

value="male">Male
<input type="radio" name="gender"
<?php 
    if (isset($gender) && $gender=="other") echo "checked";
?>
value="other">Other