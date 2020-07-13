<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // $age = 1;
    // if($age > 18){
    //     echo"You can Vote";
    // }else{
    //     echo"You cannot Vote";
    // }

    // $name = readline("Please enter your name: ");
    // echo $name; 
    // if($name == "mycaptain"){
    //     echo"Welcome Back";
    // }else{
    //     echo"You don't belong to here";
    // }

    // $superhero = array("Iron Man", "Spiderman", "Thor", "Captain America");

    // foreach($superhero as $hero){
    //     echo "$hero <br>";
    // }
    // echo count($superhero);

    // $employeeData = array(1=>"Super", 2=>"Man");
    // echo $employeeData[1];

    // foreach($employeeData as $employee => $value) {
    //     echo "Key : " .$employee." - " .$value. "<br>";
    // }

    // $employeeData = 
    // array(
    //     array("Aquib", "MyCaptain"),
    //     array(23, 56),
    //     array("997865874596", "789456965599")
    // );

    // // echo $employeeData[1][0];
    // $length = count($employeeData);
    // for($i = 0; $i < $length; $i++){
    //     for($j = 0; $j < $length-1; $j++){
    //         echo $employeeData[$i][$j]."<br>";
    //     }
    // }
    
    // $id = array(1,2,3,4,5,6,7,8);
    // foreach($id as $employee){
    //     echo "$employee <br>";
    // }

    
    // session_start();
    // $_SESSION['user_email'] = '';
    // if (isset($_POST['user_submit'])) {
    //     echo "Submitted";
    // } else {
    //     echo "Not Submitted";
    // }


    // if (isset($_POST['user_submit'])) {

    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "space_travel";
    //     $userName = $_POST['user_name'];
    //     $userPassword = $_POST['user_password'];
        
    //     // Create connection
    //     $conn = new mysqli($servername, $username, $password, $dbname);
    //     // Check connection
    //     if ($conn->connect_error) {
    //         die("Connection failed: " . $conn->connect_error);
    //     }
        
        // $sql = "INSERT INTO registered_users (user_name, user_password)
        // VALUES ('$userName', '$userPassword')";
        
        // if ($conn->query($sql) === true) {
        //     echo "New record created successfully"."<br><br>";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
    
    // } else {
    //     echo "Not Submitted";
    // }

    // CRUD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "space_travel";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "INSERT INTO booking_status (user_name, user_email, phone_number)
    VALUES ('$userName', '$userPassword')";
    
    if ($conn->query($sql) === true) {
        echo "New record created successfully"."<br><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql = "SELECT user_name,  booking_date FROM booking_status";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "User Name: " . $row["user_name"]. " - bookingDate: " . $row["booking_date"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    ?>

    <!-- C - create
         R - Read
         U - Update
         D - Delete
     -->







     <!-- <a href="session_php.php">Click here</a> -->
     <form action="login_process.php" method="POST">
         <label>Username</label>
         <input type="text" name="user_name">
         <br>
         <label>Email address</label>
         <input type="email" name="user_email">
         <label>Phone Number</label>
         <input type="Number" name="user_phone">
         <br>
         <input type="submit" value="Submit" name="user_submit">
     </form> 
     
     
</body>
</html>