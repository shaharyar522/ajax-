<?php

$connection = mysqli_connect("localhost", "root", "", "ajax");

$query = "SELECT * FROM form_insert";
$Result = mysqli_query($connection,$query);

$record = "";
foreach($Result as $row)
{
    $record .= "<tr>
    <td>$row[id]</td>
    <td>$row[full_name]</td>
    <td>$row[last_name]</td>
    <td>$row[pws]</td>
    </tr>";
}
echo $record;






?>