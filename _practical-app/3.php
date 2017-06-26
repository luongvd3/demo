<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
if (3<4) {
	echo "I love php";
} elseif (3>4) {
	echo "I hate PHP";
}else{
	echo "What ever";
}

for ($i=0; $i <10 ; $i++) { 
	echo $i . "<br>";
}
$number = 23;
switch ($number) {
	case 21:
		echo "the number is 21";
		break;
	case 22:
		echo "the number is 22";
		break;
	case 23:
		echo "the number is 23";
		break;
	case 24:
		echo "the number is 24";
		break;
	case 25:
		echo "the number is 25";
		break;
	
	default:
		echo "what ever";
		break;
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>