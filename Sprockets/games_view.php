<?php
//games_view.php - shows details of a single customer
include 'includes/config.php';

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:games_list.php');
}


$sql = "select * from PS4Games where PS4GamesID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Title = stripslashes($row['Title']);
        $ReleaseDate = stripslashes($row['ReleaseDate']);
        $Genre = stripslashes($row['Genre']);
        
        $pageID = $Title;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This game does not exist</p>';
}

?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    
    
    echo '<p>';
    echo 'Title: <b>' . $Title . '</b> ';
    echo 'Release Date: <b>' . $ReleaseDate . '</b> ';
    echo 'Genre: <b>' . $Genre . '</b> ';
    
    
    
    echo '</p>'; 
    echo '<img src="uploads/game' . $id . '.jpg" />';
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="games_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>