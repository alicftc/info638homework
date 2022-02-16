<!DOCTYPE html>
<html>
    <!-- Hi, I am Ali and this is my code for Homework 1 of Web Development course -->
    <style>
        h1 {
            font-family: sans-serif;
        } 
        #formlabel {
        font-style: italic;  
        }
            </style>
    <body>
        
    <h1> Challenge 1 <br></h1>
   <!-- I wanted to create a form entry field. So user can actually engage with the system rather than just seeing the change for a stationary amount of cents -->
    <p id="formlabel">Please enter the money due in cents:</p>  
    <form action="codehw1.php" method="get">
    <input type="number" name="yourmoney">
    <input type="submit">
</form>

    <?php

/* I do not know how I could shorten this operation. Basically I am trying to divide the cents for each unit of money then substract the division remainder. */
$money=$_GET["yourmoney"];
$dollars = (int)($money/100);
$quarters = (int)(($money-$dollars*100)/25);
$dimes = (int)(($money-$dollars*100-$quarters*25)/10);
$nickles = (int)(($money-$dollars*100-$quarters*25-$dimes*10)/5);
$cents = (int)($money-$dollars*100-$quarters*25-$dimes*10-$nickles*5);
echo "Your $money cents will be returned to you as:<br>";
/* Once the calculations are done, code delivers the results. Again, I did not know how to shorten this process. For each unit, it tries to correct the expression for plural, singular and zero amount of units */
if($dollars>1) echo "$dollars dollars ";
elseif ($dollars==1) echo "$dollars dollar ";

if($quarters>1) echo "$quarters quarters ";
elseif ($quarters==1) echo "$quarters quarter ";

if($dimes>1) echo "$dimes dimes ";
elseif ($dimes==1) echo "$dimes dime ";

if($nickles>1) echo "$nickles nickels ";
elseif ($nickles==1) echo "$nickles nickel ";

if($cents>1) echo "$cents cents ";
elseif ($cents==1) echo "$cents cent ";



echo "<h1>Challenge 2<br></h1>";
echo "<h2> Part a </h2>";
// This part just tries to write lyrics automatically
for ($beer=99; $beer>0; --$beer)
{echo $beer." bottles of beer on the wall, ".$beer." bottles of beer. <br>"."Take one down, pass it around ";
    if($beer-1==1 or $beer-1==0) echo ($beer-1)." bottle of beer on the wall. <br><br>";
    else echo $beer-1 . " bottles of beer on the wall <br><br>";
} 

?>
<!-- Just like I did in the first part of the homework, I am trying to change to code to act according to the number of beers user have -->
<h2>Part b</h2>
<p id="formlabel">How many beers do you got?</p>  
    <form action="codehw1.php" method="get">
    <input type="number" name="yourbeers">
    <input type="submit">
</form>
<?php
$beer=$_GET["yourbeers"];
for ($beer; $beer>0; --$beer)
{echo $beer." bottles of beer on the wall, ".$beer." bottles of beer. <br>"."Take one down, pass it around ";
    if($beer-1==1 or $beer-1==0) echo ($beer-1)." bottle of beer on the wall. <br><br>";
    else echo $beer-1 . " bottles of beer on the wall <br><br>";
} 
    
    ?>
</body>
</html>