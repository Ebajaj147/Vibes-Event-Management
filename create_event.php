<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>VIBES</title>
        <meta name="description" content="Vibes is a platform where you can post your events and people can avail tickets for them.">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body id="eventing">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="create_event.php">Create events</a></li>
            <li><a href="archives.php">Archives</a></li>
            <li><a href="delete.php">DELETE</a></li>
            <li><a href="logout.html">Log Out</a> </li>
        </ul>
        <div class="container2">
        <h2>CREATE EVENT</h2>
        <form action="create_event.php" method="post">
            <input type="number" name="crid" placeholder="User ID" required>
            <input type="text" name="ename" placeholder="Event Name" required>
            <input type="text" name="type" placeholder="Event Type" required>
            <input type="number" name="accom" placeholder="Max Accomodation" required>
            <input type="number" name="cost" placeholder="Ticket Price" required>
            <input type="date" name="edate" placeholder="Event Date" required>
            <input type="text" name="loca" placeholder="Location" required>
            <input type="text" name="description" placeholder="Event Description" required>
            <input id="sub" type="submit" value="Create">
        </form>
        </div>
        <?php
    $hostname = "localhost";
    $username = "root";
    $passwd = "";
    $dbName = "event_management";

    $dbConn = mysqli_connect("localhost", "root", "", "event_management");
    

    if(mysqli_connect_errno($dbConn))
    {
        echo "Failed to connecct to Mysql:". mysqli_connect_error();
    }
    
    $crid = $_POST['crid'];
    $ename = $_POST['ename'];
    $type = $_POST['type'];
    $accom = $_POST['accom'];
    $cost = $_POST['cost'];
    $edate = $_POST['edate'];
    $loca = $_POST['loca'];
    $description = $_POST['description'];

    $sql = "INSERT INTO events(CR_ID, ENAME, TYPE, ACCOM, PRICE, EDATE, LOCA, DESCRIPTION) VALUES ('$crid', '$ename', '$type', '$accom', '$cost', '$edate', '$loca', '$description')";
    mysqli_query($dbConn, $sql);

    
?>
    </body>
</html>

