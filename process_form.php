<?php
    // if form is submitted, connect to the SQL database
    if (isset($_POST)) {
    $host = "localhost";
    $database = "assignment2";
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($host, $user, $pass, $database);

    if(mysqli_connect_errno()){
        die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    } 

    if (isset($_POST)) {
        // extract data from HTML form 
        $food = $_POST['food'];
        $menu = $_POST['menu'];
        $service = $_POST['service'];
        $atmos = $_POST['atmosphere'];
        $t_date = $_POST['Date'];
        $remarks = $_POST['Remarks'];

        $fname = $_POST['fName'];
        $lname = $_POST['lName'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];

        // insert extracted data into userinfo table
        $sql1="INSERT INTO usersinfo (first_name,last_name,email,phone) VALUES (
            '{$connection-> real_escape_string($fname)}', 
            '{$connection-> real_escape_string($lname)}', 
            '{$connection-> real_escape_string($email)}',
            '{$connection-> real_escape_string($phone)}')";
        
        $insert1=$connection->query($sql1);
        if ($insert1 == TRUE) {
            echo "<h3>Success writing to table ONE worked!</h3>";
        } 
        else {
            die("Error: {$connection->errno} : {$connection->error}");
        }

        // initialize foreign key to connect userinfo to ratinginfo
        $foreignKeyID = 4;
        $foreignKeyID = $foreignKeyID + 1;
        // insert extracted data into ratinginfo
        $sql2="INSERT INTO ratinginfo (`user-ID`, food_rate, menu_rate,service_rate,atmosphere_rate,transcation_date,remarks,status) VALUES (
            '{$connection-> real_escape_string($foreignKeyID)}', 
            '{$connection-> real_escape_string($food)}', 
            '{$connection-> real_escape_string($menu)}', 
            '{$connection-> real_escape_string($service)}', 
            '{$connection-> real_escape_string($atmos)}', 
            '{$connection-> real_escape_string($t_date)}', 
            '{$connection-> real_escape_string($remarks)}',
            '{$connection-> real_escape_string(1)}')";
        
        $insert2=$connection->query($sql2);
        if ($insert2 == TRUE) {
            echo "<h3>Success writing to table TWO worked!</h3>";
        } 
        else {
            die("Error: {$connection->errno} : {$connection->error}");
        }

    }
        // close connection
        mysqli_close($connection);

        // redirect to dashboard.php
        header("Location: dashboard.php");
        exit();
    } 
?>