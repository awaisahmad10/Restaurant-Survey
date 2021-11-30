<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Dashboard</title>
</head>
<body>

<?php

// connect to SQL database
$host = "localhost";
$database = "assignment2";
$user = "root";
$pass = "";

$connection = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_errno()) {
        die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}

// get number of users that filled out the form
$num_of_rows = mysqli_query($connection, "SELECT * FROM `usersinfo`");
$rows = mysqli_num_rows($num_of_rows);

// get average rating of the food
$food_avg = mysqli_query($connection, "SELECT AVG(food_rate) AS f_avg FROM `ratinginfo`");
$food_string = mysqli_fetch_assoc($food_avg);
$food_result = round($food_string['f_avg'], 2);

// get average rating of the menu
$menu_avg = mysqli_query($connection, "SELECT AVG(menu_rate) AS m_avg FROM `ratinginfo`");
$menu_string = mysqli_fetch_assoc($menu_avg);
$menu_result = round($menu_string['m_avg'], 2);

// get average rating of the service
$service_avg = mysqli_query($connection, "SELECT AVG(service_rate) AS s_avg FROM `ratinginfo`");
$service_string = mysqli_fetch_assoc($service_avg);
$service_result = round($service_string['s_avg'], 2);

// get average rating of the atmosphere
$atmosphere_avg = mysqli_query($connection, "SELECT AVG(atmosphere_rate) AS a_avg FROM `ratinginfo`");
$atmosphere_string = mysqli_fetch_assoc($atmosphere_avg);
$atmosphere_result = round($atmosphere_string['a_avg'], 2);

// calculate average overall rating for restaurant
$ovr_rating = round(($food_result+$menu_result+$service_result+$atmosphere_result) / 4, 2); 

// close connection
mysqli_close($connection);

?>

<br>
<h1>A total of <?php echo $rows; ?> people have submitted their review!</h1>
<br><br><br><br><br><br>

<h3>Here are the reviews for this restaurant: </h3>
<table style="border-style: solid; border-color: black; text-align: center; margin-right: auto; margin-left: auto; font-family: Arial, sans-serif; font-size: 25px; background-color: white;" border="5">
<tr>
<th> Average food rating </th>
<th> Average menu rating </th>
<th> Average service rating </th>
<th> Average atmosphere rating </th>
<th> Overall Rating </th>
</tr>
<tr>
<td><?php echo $food_result; ?> / 5 </td>
<td><?php echo $menu_result; ?> / 5 </td>
<td><?php echo $service_result; ?> / 5 </td>
<td><?php echo $atmosphere_result; ?> / 5 </td>
<td><?php echo $ovr_rating; ?> / 5 </td>
</tr>
</table>

</body>
</html>