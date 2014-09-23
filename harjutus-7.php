<!DOCTYPE html>
<html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Harjutus-7</title>
</head>
<body> 

	<h2>While loop</h2>

	<?php
	$count = 1;

	while ($count <= 10) {
		echo $count;
		$count += 1;
	}
	?>
	<br><br>

	<?php
	$count = 10;

	while ($count <= 100) {
		echo $count . ", ";
		$count += 1;
	}
	?>

	<!-- <h3>Infinite while loop</h3> -->

	<?php
/*    $count = 1;

    while ($count <= 10) {
        echo $count;
        $count = 1;
      }*/
      ?> 

      <?php
      $count = 1;
      $number = 10;

      while ($count < 10) {
      	while ($number < 0) {
      		echo $number;
      		$number -= 1;
      	}

      	$count += 1;
      }
      ?>
      <br><br>

      <?php
      $count = 0;

      while ($count < 15) {
      	if ($count == 5) {
      		echo "<script>alert('Number viie kord');</script>";
      	} else {
      		echo $count;
      	}

      	$count += 1;
      }
      ?>
      <br><br>

      <h3>Conditional statements in while loop</h3>

  <?php
    $count = 1;

    while ($count <=10) {
        if ($count == 3) {
            echo "kolm";
        } elseif($count == 7) {
            echo "seitse";
            
        } else {
        	echo $count;
        }

        $count += 1;
    }
?>


    </body>
    </html> 