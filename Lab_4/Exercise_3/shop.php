<?php
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";

  $username = $_POST["user"];
  $password = $_POST["password"];
  $purpleGoats = $_POST["purpleGoats"];
  $blackGoats = $_POST["blackGoats"];
  $blueGoats = $_POST["blueGoats"];
  $greenGoats = $_POST["greenGoats"];
  $redGoats = $_POST["redGoats"];

  $purpleCost = 25;
  $blackCost = 30;
  $blueCost = 40;
  $greenCost = 50;
  $redCost = 75;

  $totalPurple = $purpleGoats * $purpleCost;
  $totalBlack = $blackGoats * $blackCost;
  $totalBlue = $blueGoats * $blueCost;
  $totalGreen = $greenGoats * $greenCost;
  $totalRed = $redGoats * $redCost;

  $shipChoice = $_POST["shipping"];
  $shippingCost = 0;
  echo "shipping choice is ".$shipChoice;
  if($shipChoice == "sevenDay"){
    $shipping = "Free 7 day shipping";
    $shippingCost = 0;
  }
  else if ($shipChoice == "overnight"){
    $shipping = "Over night shipping";
    $shippingCost = 50;
  }
  else if($shipChoice == "threeDay"){
    $shipping = "Three day shipping";
    $shippingCost = 5;
  }

  $total = $totalPurple + $totalBlack + $totalBlue + $totalGreen + $totalRed + $shippingCost;

  echo "<h2>Welcome ".$username.". Thank you for shopping at my store!</h2><br>";
  echo "Here is a break down of your purchase:<br>";

  echo "<table><tr>
        <td> </td>
        <td class=\"desc\"><b>Quantity</b></td>
        <td class=\"desc\"><b>Cost</b></td>
        <td class=\"desc\"><b>Total for goats</b></td>
        </tr>";

  echo "<tr><td class=\"desc\"><b>Purple goats:</b></td><td>".$purpleGoats."</td>
        <td>$".$purpleCost.".00</td><td>$".$totalPurple.".00</td> </tr>";

  echo "<tr><td class=\"desc\"><b>Black goats:</b></td><td>".$blackGoats."</td>
        <td>$".$blackCost.".00</td><td>$".$totalBlack.".00</td></tr>";

  echo "<tr><td class=\"desc\"><b>Blue goats:</b></td><td>".$blueGoats."</td>
        <td>$".$blueCost.".00</td><td>$".$totalBlue.".00</td></tr>";

  echo "<tr><td class=\"desc\"><b>Green goats:</b></td><td>".$greenGoats."</td>
        <td>$".$greenCost.".00</td><td>$".$totalGreen.".00</td></tr>";

  echo "<tr><td class=\"desc\"><b>Green goats:</b></td><td>".$redGoats."</td>
        <td>$".$redCost.".00</td><td>$".$totalRed.".00</td></tr>";

  echo "<tr><td class=\"desc\"><b>Amount for shipping: </b></td><td colspan=\"2\">".$shipping."</td>
        <td>$".$shippingCost.".00</td></tr>";
  echo "Your total purchase comes to:<br>";
  echo "<tr><td class=\"desc\" colspan=\"3\"><b>Total Cost</b></td>
        <td class=\"desc\">$".$total.".00</td></tr></table>";

  echo "We appreciate your business ".$username."! Have a good day!<br>";
?>
