<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
</head>
<body>

<h2>Funktsiooni defineerimine</h2>

<h3>Argumendita funktsioon</h3>
<?php
	 		function say_hello() {
			echo 'Minu esimene funktsioon!<br>';
  	}
  	say_hello();
?>

<h3>Argumendiga funktsioon</h3>

<?php
	function say_hello_to($person){

		echo "<p>Tere{$person}</p>";
	}
say_hello_to(" Fränk");
?>

<?php
	function add($number1, $number2){
$sum = $number1 + $number2;
return $sum;
	}
	$result = add(4,5);
	echo $result + 10;
	
?>

<h3>Väärtuse tagastamine</h3>
<?php
  function calculate($nr1, $nr2) {
    $plus = $nr1 + $nr2;
    $minus = $nr1 - $nr2;

    return array($plus, $minus);
   
  }

  $result = calculate(10, 5);

  echo "<li>{$result[0]}</li>";
  echo "<li>{$result[1]}</li>";

?>


<?php        //näide
  function calculate($nr1="1", $nr2="2") {
    $plus = $nr1 + $nr2;

    return $plus;
   
  }

  $result = calculate();
  echo $result;

?>
</body>
</html>
