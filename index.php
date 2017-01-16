<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 
<?php 
class StrUtils{

		private $str="";

		public function __construct($newString){
	  	$this->str = $newString;
		}

		function afficher(){
			return $this->str;
		}

		function bold(){
			$bold ="<strong>$this->str</stong>";
			return $bold;
		}

		function Italic(){
			$Italic ="<i>$this->str</i>";
			return $Italic;
		}

		function Capitalize(){
			$Capital ="<i>$this->str</i>";
			return $Capital;
		}

	}

	$mastr =new StrUtils ("bla");

	echo $mastr->afficher();
	echo $mastr->bold();
	echo $mastr->Italic();
	echo $mastr->Capitalize();



	//echo $mastr->afficher();

	 ?>

</body>
</html>
