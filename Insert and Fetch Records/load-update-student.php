<?php
$connection = mysqli_connect("localhost", "root", "", "ajax");

$my_id = $_POST['new_id'];

$query = "SELECT * FROM form_insert WHERE id=$my_id";
$result = mysqli_query($connection , $query);
$record = "";
foreach($result as $row)
{
         $record .= "
         <input type='hidden' id='utext' value='$row[id]'> <br><br>
         <input type='text' id='utextname' value='$row[full_name]'> <br><br>
         <input type='text' id='utextemail' value='$row[last_name]'> <br><br>
         <input type='text' id='utextpassword' value='$row[pws]'><br><br>
         <input type='button' id='btnupdate' value='update'><br><br>
         ";
}
echo $record;








?>