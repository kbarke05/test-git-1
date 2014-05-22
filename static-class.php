<?php
//static-class.php


$playerArray = array();
$playerArray[] = new BallPlayer("Babe Ruth","NYY",23);
$playerArray[]  = new BallPlayer("Jimmy Foxx","Red Sox",15);
$playerArray[]  = new BallPlayer("Willy Mays","Giants",18);

var_dump($playerArray) . "<br />";

print "We have: " . BallPlayer::$TotalPlayers . " players.<br />";
print "Our ballplayers hit: " . BallPlayer::$TotalHomers . " homers.<br />";
print "Average homers are: " . BallPlayer::$TotalHomers/BallPlayer::$TotalPlayers . " homers.<br />";



class BallPlayer
{
	//public member variables (properties)
 	public $name = '';
 	public $team = '';
 	public $homers = 0;
 	
	//static vars allow us to store aggregate data  
	public static $TotalHomers = 0; //Will Store Total Homers
	public static $TotalPlayers = 0; //Will Store Total BallPlayers 	
	
    function __construct($name,$team,$homers)
	{//constructor sets stage by adding data to an instance of the object
		
		$this->name = $name;
		$this->team = $team;
		$this->homers = $homers;
		self::$TotalHomers += $homers; //add homers to total
		self::$TotalPlayers++;  //increment total ballplayers		
	}
}
