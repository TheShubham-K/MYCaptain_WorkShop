<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php

    /**
     * @login_process file
     * Description of what this module (or file) is doing.
     */

    /**
     * Implements hook_help().
     */
    // if (isset($_POST['user_submit'])) {
    //     $UserName = $_POST['user_name'];
    //     echo "Submitted<br>";
    //     echo "Username : " .$UserName;
    // } else {
    //     echo "Not Submitted";
    // }

    if (isset($_POST['user_submit'])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "space_travel";
        $userName = $_POST['user_name'];
        $userPassword = $_POST['user_password'];
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO registered_users (user_name, user_password)
        VALUES ('$userName', '$userPassword')";
        
        if ($conn->query($sql) === true) {
            echo "New record created successfully"."<br><br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
    } else {
        echo "Not Submitted";
    }

    ?>
</body>
</html>