<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
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
			$bold ="<p><strong>$this->str</stong></p>";
			return $bold;
		}

		function Italic(){
			$Italic ="<p><i>$this->str</i></p>";
			return $Italic;
		}

		function Capitalize(){
			$Capital ="<p style='text-transform=capitalize'>$this->str</p>";
			return $Capital;
		}

	}

	$mastr =new StrUtils ("Hello world");

	echo $mastr->afficher();
	echo $mastr->bold();
	echo $mastr->Italic();
	echo $mastr->Capitalize();

	$mastr =new StrUtils ("me voici");

	echo $mastr->afficher();
	?>







</body>
</html>
