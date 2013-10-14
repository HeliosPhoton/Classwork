<?php
session_start();

$voteResult = array('Pikachu' , 'Ash');
$vote = $_POST['vote'];

$_SESSION['Pikachu'] = 0;
$_SESSION['Ash'] = 0;

if($vote == 'pikachu')
{
	$_SESSION['Pikachu'] = $_SESSION['Pikachu']+1;

}


if($vote == 'ash')
{
	$_SESSION['Ash'] = $_SESSION['Ash']+1;

}

echo "<p> Pikachu : " . $_SESSION['Pikachu'] . "</p>"; 
echo "<p> Ash : " . $_SESSION['Ash'] . "</p>"; 


echo "<br>";
echo "<a href = vote.html> Back </a>";






?>