<?php
session_start();

$voteResult = array('Pikachu' , 'Ash');
$vote = $_POST['vote'];

//$_SESSION['Pikachu'] = $voteResult['Pikachu'];
//$_SESSION['Ash'] = $voteResult['Ash'];

if($vote == 'pikachu')
{
	$_SESSION['Pikachu'] = $_SESSION['Pikachu']+1;
	$voteResult['Pikachu'] = $_SESSION['Pikachu'];
}


if($vote == 'ash')
{
	$_SESSION['Ash'] = $_SESSION['Ash']+1;
	$voteResult['Ash'] = $_SESSION['Ash'];
}

echo "<p> Pikachu : " . $_SESSION['Pikachu'] . "</p>"; 
echo "<p> Ash : " . $_SESSION['Ash'] . "</p>"; 


echo "<br>";
echo "<a href = vote.html> Back </a>";






?>