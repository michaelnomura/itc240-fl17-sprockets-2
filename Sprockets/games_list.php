<?php include 'includes/config.php';?>
<?php get_header();?>

<h1><?=$pageID?></h1>
<?php
//customer_list.php - shows a list of customer data

$sql = "select * from PS4Games";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
    die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here
$result = mysqli_query($iConn,$sql) or 
die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0)//at least one record
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';

        echo 'Title: <b>' . '<a href="games_view.php?id=' . $row['PS4GamesID'] . '">' . $row['Title'] . '</a>' . '</b> ';
        echo 'Release Date: <b>' . $row['ReleaseDate'] . '</b> ';
        echo 'Genre: <b>' . $row['Genre'] . '</b> ';

        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer();?>