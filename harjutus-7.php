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

// While tsükkel
<?php
$count = 1;

while ($count <= 10) {
 echo $count;
 $count += 1;
}
?>

// For tsükkel
<?php
for ($count = 1; $count <= 10; $count += 1) {
 echo $count;
}
?> 

<h2>For loop</h2>

<?php
for ($count = 1; $count <= 20; $count += 1) {
 if ($count % 2 == 0) {
  echo $count . ' on paarisarv.<br>';}
  else {echo $count . ' on paaritu arv.<br>';}
}
?> 
<br>
// While loop
<?php
$students = 1;

while ($students <= 20) {
        // Ulata õpilasele paberileht.

  $students++;
}
?>

<?php
for ($students = 1; $students <= 20; $students++) {
        // Ulata õpilasele paberileht.
}
?>

<ul><?php

$drinks = array("tea", "coffee", "water", "sprite");
foreach ($drinks as $drink) {
 echo "<li>" . $drink . "</li>";
}
?>
</ul>

<h2>Foreach loop</h2>

<ul>
      <?php 
      $businesses = array("Nike", "Adidas", "Puma", "Reebok", "Oneill");
      foreach ($businesses as $business) {
       echo "<li>" . $business . "</li>";
 }
 ?>
</ul>

<ol>
      <?php 
      $classes = array("3D graafika", "Sisuhaldussüsteemid", "Veebikujundus", "Veebitehnoloogiad", "Serveripoolsete rakenduste programmeerimine");
      foreach ($classes as $classes) {
       echo "<li>" . $classes . "</li>";
 }
 ?>
</ol>


<?php
$contact = array(
    "first_name" => "Eve",
    "phone_number" => 53334325,
    "location" => "Tartu"
    );

foreach ($contact as $attribute => $value ) {
    echo "{$attribute}: {$value}<br>";
}
?>
<br>

<DOCTYPE html>
      <html>
      <head>
      </head>
      <body cz-shortcut-listen="true">
            <table>
                  <tbody>
                        <contact-table>
                        <tr>
                              <td>first_name</td>
                              <td>Eve</td>
                        </tr>
                        <tr>
                              <td>last_name</td>
                              <td>Link</td>
                        </tr>
                        <tr>
                              <td>e-mail</td>
                              <td>eve.link@khk.ee</td>
                        </tr>
                        <tr>
                              <td>age</td>
                              <td>22</td>
                        </tr>
                  </contact-table>
            </tbody>
      </table>
</body>
</html>

<style>
table { border: 1px solid red; }
tr { background-color: gray; }
tbody { padding: 5px; }
</style>
