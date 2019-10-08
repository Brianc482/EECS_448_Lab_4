<?php
  echo "hello world";
  $question1 = $_POST["Q1"];
  $question2 = $_POST["Q2"];
  $question3 = $_POST["Q3"];
  $question4 = $_POST["Q4"];
  $question5 = $_POST["Q5"];
  echo "Questions are ".$question1." ".$question2." ".$question3;
  $correctAnswers = 0;
  echo "<h2>Here are the answers to the Quiz.</h2><br>";
  echo "<b>Question 1:</b> Who is on the US $1 bill?<br>";
  echo "Your response was: ";
  if($question1 == "Washington"){
    $correctAnswers = $correctAnswers+1;
    echo "George Washington<br>";
  }
  else if($question1 == "Lincoln"){
    echo "Abraham Lincoln<br>";
  }
  else if($question1 == "Gibbons"){
    echo "Dr. Gibbons<br>";
  }
  else if($question1 == "Simpson"){
    echo "Homer Simpson<br>";
  }
  echo "The correct answer is: <b><i>George Washington</i></b><br>";

  echo "<br><b>Question 2:</b> What is the capitol of Kansas?<br>";
  echo "Your response was: ";
  if($question2 == "Lawrence"){
    echo "Lawrence, KS<br>";
  }
  elseif($question2 == "Wichita"){
    echo "Wichita, KS<br>";
  }
  elseif($question2 == "KansasCity"){
    echo "Kansas City, KS<br>";
  }
  elseif($question2 == "Topeka"){
    $correctAnswers = $correctAnswers+1;
    echo "Topeka, KS<br>";
  }
  echo "The correct answer is: <b><i>Topeka, KS</i></b><br>";

  echo "<b><br>Question 3:</b> What is the name of the Chief's quarterback?<br>";
  echo "Your response was: ";
  if($question3 == "Mahomes"){
    $correctAnswers = $correctAnswers+1;
    echo "Patrick Mahomes<br>";
  }
  elseif($question3 == "OneGuy"){
    echo "That one guy<br>";
  }
  elseif($question3 == "IDK"){
    echo "I don't know<br>";
  }
  elseif($question3 == "DontWatch"){
    echo "I don't watch football<br>";
  }
  echo "The correct answer is: <b><i>Patrick Mahomes</i></b><br>";

  echo "<b><br>Question 4:</b> What class is this quiz being written for?<br>";
  echo "Your response was: ";
  if($question4 == "448") {
    $correctAnswers = $correctAnswers+1;
    echo "EECS 448<br>";
  }
  elseif($question4 == "168"){
    echo "EECS 268<br>";
  }
  elseif($question4 == "268"){
    echo "EECS 168<br>";
  }
  elseif($question4 == "999"){
    echo "EECS 999<br>";
  }
  echo "The correct answer is: <b><i>EECS 448</i></b><br>";

  echo "<b><br>Question 5:</b> This has been tough! Here's an easy one! What is 1 + 1?<br>";
  echo "Your response was: ";
  if($question5 == "first"){
    echo "Not this one<br>";
  }
  elseif($question5 == "second"){
    echo "Not this one either<br>";
  }
  elseif($question5 == "second"){
    echo "YOU'VE GONE TOO FAR GO BACK UP ONE!<br>>";
  }
  elseif($question5 == "correct"){
    $correctAnswers = $correctAnswers+1;
    echo "2<br>";
  }
  echo "The correct answer is: <b><i>2</i></b><br>";

  echo "<br>Number of correct answers: ".$correctAnswers." out of a total of 5 questions";
  if($correctAnswers == 1){
    echo "<br>You got 20% right";
  }
  elseif($correctAnswers == 2){
    echo "<br>You got 40% right";
  }
  elseif($correctAnswers == 3){
    echo "<br>You got 60% right";
  }
  elseif($correctAnswers == 4){
    echo "<br>You got 80% right";
  }
  elseif($correctAnswers == 5){
    echo "<br>You got 100% right!";
  }

?>
