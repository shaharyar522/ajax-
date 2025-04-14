

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Professional Form</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --secondary-color: #f8f9fa;
            --text-color: #2b2d42;
            --light-gray: #e9ecef;
            --border-radius: 10px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f5f7ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: var(--text-color);
            line-height: 1.6;
        }

        .form-container {
            background: white;
            padding: 2.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 420px;
            transform: translateY(0);
            transition: var(--transition);
        }

        .form-container:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h2 {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-size: 0.95rem;
            transition: var(--transition);
            background-color: var(--secondary-color);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
            outline: none;
            background-color: white;
        }

        .form-control::placeholder {
            color: #adb5bd;
            font-weight: 400;
        }

        .btn {
            width: 100%;
            padding: 1rem;
            background-color: var(--primary-color);
            border: none;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(0);
        }

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: #6c757d;
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 1.75rem;
            }

            .form-header h2 {
                font-size: 1.5rem;
            }
        }

        /* Floating label animation */
        .floating-label {
            position: relative;
        }

        .floating-label label {
            position: absolute;
            top: 0.85rem;
            left: 1.25rem;
            color: #adb5bd;
            transition: var(--transition);
            pointer-events: none;
        }

        .floating-label .form-control:focus+label,
        .floating-label .form-control:not(:placeholder-shown)+label {
            top: -0.5rem;
            left: 0.75rem;
            font-size: 0.75rem;
            background: white;
            padding: 0 0.5rem;
            color: var(--primary-color);
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h2>Create Account</h2>
            <p>Fill in your details to get started</p>
        </div>
        <form action="#" method="POST" id="userForm">
            <div class="form-group floating-label">
                <input type="text" class="form-control"  placeholder="" id="textfullname" required>
                <label for="textfullname">Full Name</label>
            </div>

            <div class="form-group floating-label">
                <input type="text" class="form-control"  placeholder="" id="textusername" required>
                <label for="textusername">Username</label>
            </div>

            <div class="form-group floating-label">
                <input type="password" class="form-control"  placeholder="" id="textpassword" required>
                <label for="textpassword">Password</label>
            </div>

            <button type="submit" class="btn" id="btninsert">Submitt</button>
        </form>
    </div>

    <!-- working on jquey and ajax -->
    <script>
        $(document).ready(function() 
        {
            $("#btninsert").on("click", function(e) 
            {
                e.preventDefault(); // Prevent form from submitting normally
                // ab main chata hun agar click hnva hia tu pahly us ko get karna hnga 
                var fullname = $("#textfullname").val();
                var username = $("#textusername").val();
                var password = $("#textpassword").val();

                $.ajax({
                    url:"insert1_ajx.php",
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

                    }
                });
            });
        });
    </script>
</body>

</html>