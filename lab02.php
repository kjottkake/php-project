<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

//username
//number of notifications
//number of emails
//string that says you have X notifications
<?php
$username = "Jsaon";
$numNotification = 23;
$numEmail = 100;
?>

<p>Exercise 1</p>
<h1>Welcome <?php echo $username?></h1>
<h2>You have <?php echo $numNotification?> notifications and <?php echo $numEmail?> emails.</h2>

<?php
$G = 6.6743;

$planets = array(
    array("Mercury",4879, 0.330),
    array("Venus", 12104, 4.87),
    array("Earth", 12756, 5.97),
    array("Mars", 6792, 0.642 ),
    array("Jupiter", 142984, 1898),
    array("Saturn", 120536, 568),
    array("Uranus", 51118, 86.8),
    array("Neptune", 49528, 102),
);

function surfaceGrav($m, $d) {
    $g = ($G * $m)/($d/2); 
    echo "deez nuts";
}

function escapeVel($m, $d){
    echo "escape velicty: ";
}
?>


<p>Exercise 2</p>
<h1>Plants in the solar system</h1>


</body>
</html>