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
        <?php
                $dbConn = mysqli_connect("localhost", "root", "", "event_management");
        ?>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="create_event.php">Create events</a></li>
            <li><a href="archives.php">Archives</a></li>
            <li><a href="delete.php">DELETE</a></li>
            <li><a href="logout.html">Log Out</a> </li>
        </ul>
        <div class="archi">
        <form  method="post" action="archives.php">
            <input type="number" name="userid" placeholder="User Id" required>
            <input id="sub" type="submit" value="Submit">
        </form>
        </div>  
        <?php 
                $userid = $_POST['userid'];
                $query = "SELECT * FROM events WHERE CR_ID='$userid'";  
                $result = mysqli_query($dbConn, $query);  
                while($row= mysqli_fetch_array($result))
                {
        ?>
                    <div id="header">
        <?php
                    echo '<p>Ename:'.$row["ENAME"].'<p>';
                    echo '<p>Type:'.$row["TYPE"].'</p>';
                    echo '<p>Accomodation:'.$row["ACCOM"].'<p>';
                    echo '<p>Price:'.$row["PRICE"].'</p>';
                    echo '<p>Edate:'.$row["EDATE"].'<p>';
                    echo '<p>Location:'.$row["LOCA"].'</p>';
                    echo '<p>Description:'.$row["DESCRIPTION"].'<p>';
        ?>
                    </div>
        <?php
                }
        ?>
    </body>
</html>