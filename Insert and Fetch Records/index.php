<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Professional Form</title>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h2>Create Account</h2>
            <p>Fill in your details to get started</p>
        </div>
        <form action="#" method="POST" id="userForm">
            <div class="form-group floating-label">
                <input type="text" class="form-control" placeholder="" id="textfullname" required>
                <label for="textfullname">Full Name</label>
            </div>
            <div class="form-group floating-label">
                <input type="text" class="form-control" placeholder="" id="textusername" required>
                <label for="textusername">Username</label>
            </div>
            <div class="form-group floating-label">
                <input type="password" class="form-control" placeholder="" id="textpassword" required>
                <label for="textpassword">Password</label>
            </div>
            <button type="submit" class="btn" id="btninsert">Submitt</button>
        </form>


    </div> <br><br>
    <div>
        <table>
            <thead>
                <tr>
                    <th>student id</th>
                    <th>student name</th>
                    <th>student username</th>
                    <th>student password</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>




    <!-- working on jquey and ajax -->
    <script>
        $(document).ready(function() {
            //steop two for table 
            function loadstudent() {
                $.ajax({
                    url: "fetch-student.php",
                    type: "POST",
                    success: function(data) {
                        $("#tbody").html(data)
                    }
                });
            }
            loadstudent();


            $("#btninsert").on("click", function(e) {
                e.preventDefault(); // Prevent form from submitting normally
                // ab main chata hun agar click hnva hia tu pahly us ko get karna hnga 
                var fullname = $("#textfullname").val();
                var username = $("#textusername").val();
                var password = $("#textpassword").val();

                $.ajax({
                    url: "insert_ajx.php",
                    type: "POST",
                    data: {
                        full_name: fullname,
                        user_name: username,
                        patteran: password
                    },
                    success: function(mydata) {
                        // ab main chata hun kay agar  form main data fill hn jain us kay bad form empty hn jian
                        $("#textfullname").val("");
                        $("#textusername").val("");
                        $("#textpassword").val("");
                        loadstudent();
                    }
                });
            });
        });
    </script>
</body>

</html>