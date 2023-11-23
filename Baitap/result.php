
<?php 
    echo "<link rel='stylesheet' href='result.css'>";
    $name= isset($_GET['name']) ? $_GET['name']: "";
    $club= isset($_GET['clubs']) ? $_GET['clubs']: "";
    $time= isset($_GET['time']) ? $_GET['time']: "";
    $skill= isset($_GET['skill']) ? $_GET['skill']: [];

    echo "<div class='info-box'>";
    echo "<img src='./image/TLogo.jpg' alt='User Image' style='width: 100px;'><br>";
    echo "Thank you $name!<br>";
    echo "We received your application for the $club<br>";
    echo "You are " . implode(" and ", $skill) . ".<br>";
    echo "You will be available on $time.";
    echo "</div>";
?>


