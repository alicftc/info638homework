<!DOCTYPE html>
<html lang="en">
    
<head>
    <title> Ali's Second Code Homework </title> 
    <style>
        body {
            max-width: 80%;
            padding-left: 150px;

        }
        img {
            max-width: 100px;
        }
        img.bigcoin {
            max-width: 95px;
            padding-bottom: 7px;
        }
        h1, h2, h3, p {
            font-family: sans-serif;
        }
        </style>
    </head>
    <body>


<h2>Challenge 1 - ISBN Validator </h2>
    <?php
    
    $ISBN="0661875172";
    

function validator ($ISBN){
    $sum=0; //main sum variable
    $sumalt=0; //alternative sum variable where ISBN ends with an X
    //first X case is covered with an if
    /* Using strlen function was the trickiest part for this one. I did not know how to have a descending number inside the for command. This was the hardest part of the homework for me. */
    if (substr($ISBN,9,1)=="X" or substr($ISBN,9,1)=="x" ){
        for ($j=0; $j<=8; $j++)
        {
            $sumalt=$sumalt+(substr($ISBN, $j, 1))*(strlen($ISBN)-$j);
           //Since X equaled 10, this process have been done manually.
            $sum=$sumalt+10;

        }
    }
    //all other falls under else
    else
    {
    for ($j=0; $j<=9; $j++){
    $sum=$sum+(substr($ISBN, $j, 1))*(strlen($ISBN)-$j); 
    } 
    }
    $remainder=$sum % 11;
    //this step is the output of the results
    if ($remainder==0)
    {echo "$ISBN is a valid ISBN <p>";}
    else 
    {echo "$ISBN is an INVALID ISBN <p>";} 
}

echo validator($ISBN); 
    
    
    
    
    ?>
<h2> Challenge 2 - Coin Toss </h2>

<h3>Part 1 </h3>

<?php 
$tails="<img src='img/tails.png' alt='tails side of a quarter coin'>";
$heads="<img class='bigcoin' src='img/heads.png' alt='heads side of a quarter coin'>";
// This function uses mt_rand inside it. Uses number of flips as an argument and can be called with an integer.
function HeOrTa(int $flips) {
    $tails="<img src='img/tails.png' alt='tails side of a quarter coin'>";
    $heads="<img class='bigcoin' src='img/heads.png' alt='heads side of a quarter coin'>";
    echo "Flipping a coin $flips times: <p>";
    for ($j=1; $j<=$flips; $j++)
    {
    $result=mt_rand(1,2);
    if ($result==1)
    {echo $tails." ";}
    else
    {echo $heads." ";}   
    }
    echo "<p>";
}
HeOrTa(1); 
HeOrTa(3);
HeOrTa(5);
HeOrTa(7);
HeOrTa(9);





// $result=mt_rand(1,2);
//$flips= 2;

/*for ($j=0; $j<=3; $j++)
{
   $result=mt_rand(1,2);
   if ($result==1)
   {echo $heads."<p>";}
   else{
       echo $tails."<p>";
   }
}*/



echo "<h3> Part 2 </h3> ";

echo "<p> Beginning the coin flipping <p>";

//function twoheads() {
    $tails="<img src='img/tails.png' alt='tails side of a quarter coin'>";
    $heads="<img class='bigcoin' src='img/heads.png' alt='heads side of a quarter coin'>";
    //$result=mt_rand(1,2);
    
   //This is a slight different version of the solution I have found on web.
    $twoheads = 0;
	$flips = 0;
	while ($twoheads < 2) {
		$result = rand(0,1);
		$flips ++;
		//This place is actually where I could not solve
        if ($result){
			$twoheads ++;
			echo "$heads ";
		}
		else {
			$twoheads = 0;
			echo "$tails ";
		}
	}
	echo "<p>It took {$flips} flips to get two heads in a row! </p>"; 
   
   
    /*$heads=0;
    $flips=0
    while ($heads<2) */

    
    
    
     //This was the main route I was taking
    //I did not know how to compare two consecutive outputs of for
    /*for ($j=1; $j<=100 ; $j++)
    {
    $result=mt_rand(1,2);
    $lastresult=$result;
    if ($result==1)
    {echo $tails." ";}
    else
    {echo $heads." ";}
    if ($result+$lastresult==4) break;  
    }
    echo "You flipped $j times"; 
    echo "<p>"; */
    

//twoheads();   
  //This do...while have also not worked. 
  //I am trying to say to operation that, stop if the last two results are equal to each other   
  /*$result=mt_rand(1,2);
    $lastresult=$result;
    do {
    if ($result==1)
    {echo $tails." ";}
    else
    {echo $heads." ";}
    } while ($result+$lastresult!==4); */
    
    





?>

</body>
    </html>