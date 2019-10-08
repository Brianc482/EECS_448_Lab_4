<?php
  $question1 = $_POST["Q1"];
  $question2 = $_POST["Q2"];
  $question3 = $_POST["Q3"];
  $question4 = $_POST["Q4"];
  $question5 = $_POST["Q5"];

  $correctAnswers = 0;
  echo "<h2>Here are the answers to the Quiz.</h2><br>";
  echo "<b>Question 1:</b> Who is on the US $1 bill?<br>";
  echo "Your response was:";
  if($question1 == "Washington"){
    $correctAnswers++;
    echo "George Washington<br>";
  }
  elseif($question1 == "Lincoln"){
    echo "Abraham Lincoln<br>";
  }
  elseif($question1 == "Gibbons"){
    echo "Dr. Gibbons<br>";
  }
  else{
    echo "Homer Simpson<br>";
  }
  echo "The correct answer is: <b><i>George Washington</i></b><br>";

  echo "<b>Question 2:</b>What is the capitol of Kansas?<br>";
  echo "Your response was: ";
  if($question2 == "Topeka"){
    $correctAnswers++;
    echo "Topeka, KS<br>";
  }
  elseif($question2 == "Wichita"){
    echo "Wichita, KS<br>";
  }
  elseif($question2 == "KansasCity"){
    echo "Kansas City, KS<br>";
  }
  else{
    echo "Lawrence, KS<br>";
  }
  echo "The correct answer is: <b><i>Topeka, KS</i></b><br>";

  echo "<b>Question 3:</b>What is the name of the Chief's quarterback?<br>";
  echo "Your response was: ";
  if($question3 == "Mahomes"){
    $correctAnswers++;
    echo "Patrick Mahomes<br>";
  }
  elseif($question3 == "OneGuy"){
    echo "That one guy<br>";
  }
  elseif($question3 == "IDK"){
    echo "I don't know<br>";
  }
  else{
    echo "I don't watch football<br>";
  }
  echo "The correct answer is: <b><i>Patrick Mahomes</i></b><br>";

  echo "<b>Question 4:</b> What class is this quiz being written for?<br>";
  echo "Your response was:";
  if($question4 == "448") {
    $correctAnswers++;
    echo "EECS 448<br>";
  }
  elseif($question4 == "168"){
    echo "EECS 268<br>";
  }
  elseif($question4 == "268"){
    echo "EECS 168<br>";
  }
  else{
    echo "EECS 999<br>";
  }
  echo "The correct answer is: <b><i>EECS 448</i></b><br>";

  echo "<b>Question 5:</b> This has been tough! Here's an easy one! What is 1 + 1?<br>";
  echo "Your response was:";
  if($question5 == "correct"){
    $correctAnswers++;
    echo "2<br>";
  }
  elseif($question5 == "first"){
    echo "Not this one<br>";
  }
  elseif($question5 == "second"){
    echo "Not this one either<br>";
  }
  else{
    echo "YOU'VE GONE TOO FAR GO BACK UP ONE!<br>>";
  }
  echo "The correct answer is: <b><i>2</i></b><br>";

  echo "Let's see how many you got correct!<br>"
  echo "It looks like you got <b>".$correctAnswers."</b> out of a possible 5!<br>"
  if($correctAnswers == 5){
    echo "<b><blue>You got 100% correct! Congratulations</blue></b><br>";
  }
  elseif($correctAnswers == 4){
    echo "<b>You got 80% correct! Not too bad!</b><br>";
  }
  elseif($correctAnswers == 3){
    echo "You got 60% correct. Could use some improvement.<br>";
  }
  elseif($correctAnswers == 2){
    echo "You got 40% correct. That's not good.<br>";
  }
  elseif($correctAnswers == 1){
    echo "<yellow><b>You only got 1 question correctly</b></yellow><br>";
  }
  else{
    echo "<red><b>No questions were answered correctly :(</b></red><br>"
  }
?>
