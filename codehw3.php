<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Code HW 3 - Ali Ciftci </title>
        <style>
            body {
                padding: 10px;
            } 
            h1, h2, p, table {
                font-family: sans-serif;
            }
            th {color: white;
                background-color: rgb(1,169,109);
                padding: 10px;
                text-align: left;
                font-style: bold;}
            tr:nth-child(even) {background-color:#e5e5e5;}
            tr:hover {
                background-color: rgb(1,169,109);
                color: white;
            }
            td {
                padding: 10px;
            
            }
            #total {
                font-weight: bold;
                padding-left: 25px;
            }
            img {
            max-width: 100px;
        }
        img.bigcoin {
            max-width: 95px;
            padding-bottom: 7px;}

        </style>
</head>
<body>

<h1>Code Homework 3</h1>
<h2>Challenge 1</h2>

<?php
$books=array(
    'Title'=>array("PHP and MySQL Web Development","Web Design with HTML, CSS, JavaScript and jQuery","PHP Cookbook: Solutions & Examples for PHP Programmers", "JavaScript and JQuery: Interactive Front-End Web Development","Modern PHP: New Features and Good Practices","Programming PHP"),
    'Author'=>array("Luke Welling", "Jon Duckett", "David Sklar", "Jon Duckett", "Josh Lockhart", "Kevin Tatroe"),
    '# of pages'=>array(144,135,14,251,7,26),
    'Type'=>array("Paperback","Paperback","Paperback","Paperback","Paperback","Paperback"),
    'Price'=>array(31.63,41.23,40.88,22.09,28.49,28.96)
);

//echo "<table>";
echo "<table>";
echo "<tr>";
foreach($books as $item=>$description){
     echo "<th> $item </th>";  
}
echo "</tr>";
for ($j=0;$j<6;$j++){
    echo "<tr>";
    echo "<td>".$books['Title'][$j]."</td>"."<td>".$books['Author'][$j]."</td><td>".$books['# of pages'][$j]."</td><td>".$books['Type'][$j]."</td><td>".$books['Price'][$j];
    echo "</tr>";
}
echo "</table>";

$sumprice= array_sum($books['Price']);
echo "<p id='total'>"."Your total price is ". "$sumprice"."</p>";
/*for ($j=0,$j<6,$j++)
{
    echo
}*/

echo "<h2>Challenge 2 - Coin Toss, continued</h2>";

function cointoss (int $headsinarow){
    $tails="<img src='img/tails.png' alt='tails side of a quarter coin'>";
    $heads="<img class='bigcoin' src='img/heads.png' alt='heads side of a quarter coin'>";
echo "<p>Beginning to flip coins, we are looking for $headsinarow heads in a row!</p>";
    $headsno = 0;
	$flips = 0;
	while ($headsno < $headsinarow) {
		$result = rand(0,1);
		$flips ++;
		//This place is actually where I could not solve
        if ($result){
			$headsno ++;
			echo "$heads ";
		}
		else {
			$headsno = 0;
			echo "$tails ";
		}
	}
    echo "<p>It took $flips flips to get $headsinarow heads in a row!</p>";
}
cointoss(2);
cointoss (3);
?>


</body>
    </html>
