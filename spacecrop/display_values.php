<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display-Values</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blog_subscriber";

        // include 'connect.php';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT subscriber_name, subscriber_email FROM subscriber_list";
        $result = $conn->query($sql);

    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    <?php


        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['subscriber_name'];?></td>
                <td><?php echo $row['subscriber_email'];?></td>
            </tr>
            <?php
        }
        } else {
        echo "0 results";
        }
        $conn->close();

    ?>
    </table>
    <?php
    ?>
</body>
</html>