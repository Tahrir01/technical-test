<!DOCTYPE html>
<html>
<head>
	<title>start and end date</title>
</head>
<body bgcolor="lightblue">
	<center>
		<h1>Start date and end date</h1>

	        <?php
	        // Todays current date
	        echo  "Today's current day is:".date("l",strtotime($_POST['sd']))."<br>";
             echo  "Previous date of end date:".date("d-m-Y",strtotime("-1 day",strtotime($_POST['ed'])))."<br>";

             $start = new DateTime($_POST['sd']);
             $end = new DateTime($_POST['ed']);
             $days = $start->diff($end, true)->days;

             $sundays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);

             echo 'Numbers of Sunday'.$sundays;
                

	        ?>





</center>
</body>
</html>