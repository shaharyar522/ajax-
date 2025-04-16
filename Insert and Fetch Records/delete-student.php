

<?php
$connection = mysqli_connect("localhost", "root", "", "ajax");

$my_delete_id = $_POST['studend_id']; // assuming the key name is correct

$delete_query = "DELETE FROM form_insert WHERE id = $my_delete_id";
mysqli_query($connection, $delete_query);
?>
