<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>VIBES</title>
        <meta name="description" content="Vibes is a platform where you can post your events and people can avail tickets for them.">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body id="home">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="ev.php">Create events</a></li>
            <li><a href="archives.php">Archives</a></li>
            <li><a href="delete.php">DELETE</a></li>
            <li><a href="logout.html">Log Out</a> </li>
</ul>
        <?php
    $hostname = "localhost";
    $username = "root";
    $passwd = "";
    $dbName = "event_management";

    $dbConn = mysqli_connect("localhost", "root", "", "event_management");

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    $uid = "SELECT U_ID,Fname FROM users WHERE EMAIL_ID='$username' AND PASSWORD='$password'";
    $result=mysqli_query($dbConn, $uid);
    $row=mysqli_fetch_assoc($result);
    $x= $row["U_ID"];
    echo "Your User-Id is ".$row["U_ID"];
    
?>
    </body>
</html>