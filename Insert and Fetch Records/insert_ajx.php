<?php
//connection here
$connection = mysqli_connect("localhost", "root", "", "ajax");
//uay hamray pass jo hum ny ny form say id say value get kar kay ek variable main dalli hain pht bad main ajax main ja kar key or dia
// hian us ko hum ny ek or variable main store kr kay query main dalla hian value ki jaga 

   
        $sname = $_POST['full_name'];
        $susername = $_POST['user_name'];
        $spassword = $_POST['patteran'];
        
        $query = "INSERT INTO form_insert (full_name, last_name, pws) VALUES ('$sname', '$susername', '$spassword')";
        mysqli_query($connection, $query);  // agar uahan say sucess hnga tu mydata par jain ga

        ///
   

?>
