<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your receipt</title>
  </head>
  <body>
    <div class="clear-fix"></div>
      <?php

          $username = $_POST['username'];
          $password = $_POST['initPassword'];
          $tShirt = $_POST['tShirt'];
          $casualShirt = $_POST['casualShirt'];
          $poloShirt = $_POST['poloShirt'];
          $shipping = $_POST['shipping'];

          if($shipping == option1){
            $shippingPrice = "0";
            $shipping = "Free 7 day";
          } else if($shipping == option2){
            $shippingPrice = "50.00";
            $shipping = "$50.00 overnight";
          } else{
            $shippingPrice = "5.00";
            $shipping = "$5.00 three day";
          }

          echo "<h2>Welcome to Sport Shop, $username</h2>";
          echo "This is your password: $password</h2><br>\n<br>\n<br>\n";
      ?>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=100>Description</th>
					<th width=180>Quantity</th>
					<th width=100>Cost Per Item</th>
					<th width=100>Sub total</th>
				</tr>

			<?php
			$total = 0;

			$articles = array(
						array("T-Shirt","Casual Shirt","Polo Shirt","Shipping"),
						array($tShirt,$casualShirt,$poloShirt,$shipping),
						array(14.99,9.99,19.99,$shippingPrice)
			);

			for($a=0;$a<3;$a++) {
					$description = $articles[0][$a];
					$amount = $articles[1][$a];
					$unit_price = number_format( $articles[2][$a], 2);
					$total_price = number_format( $amount * $unit_price, 2);
					$total += $total_price;
            echo("<tr>");
            echo("<td>$description</td>");
            echo("<td class='text-center'>$amount</td>");
            echo("<td class='text-right'>$$unit_price</td>");
            echo("<td class='text-right'>$$total_price</td>");
            echo("</tr>");
			}

      echo("<tr>");
      echo("<td>Shipping</td>");
      echo("<td class='text-center'>$shipping</td>");
      echo("<td class='text-center'></td>");
      echo("<td class='text-right'>$$shippingPrice</td>");
      echo("</tr>");
      $total += $shippingPrice;



			echo("<tr>");
			echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
			echo("<td class='text-right'><b>$" . number_format(((($total*$vat)/100)+$total),2) . "</b></td>");
			echo("</tr>");
			?>
			</table>
		</div>
  </body>
</html>
