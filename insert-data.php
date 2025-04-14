<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ajax";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert on form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $sql = "INSERT INTO user_insert (first_name, last_name) VALUES ('$first_name', '$last_name')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<p style='color:green; text-align:center;'>Record inserted successfully!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error: " . $conn->error . "</p>";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Enter Your Name</h2>
        <form action="#" method="post" id="user-form">
            <input type="text" name="first_name" id="fname" placeholder="First Name" required>
            <input type="text" name="last_name" id="lname" placeholder="Last Name" required>
            <button type="submit" id="save-button">Submit</button>
        </form>
    </div>
</body>

<script>
    $(document).ready(function() {
        $("#user-form").on("click", function(e) {
            e.preventDefault();
            var fname = $("$fname").val();
            var lname = $("$lname").val();


            $.ajax({
                url: window.location.href,
                type: "POST",
                data: {
                    first_name : fname,
                    last_name : lname
                },
                success: function(data){
                    
                }
            });
        })

    });
</script>







</html>