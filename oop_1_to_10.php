<h3 style="background-color: #ccc; padding: 10px;">Video : 1</h3>
<!-- ************************************************************ -->

<?php 
	
	class Person
	{
		public $name; 
		public $age;

		public function __construct($name, $age)
		{
			$this->name = $name; 
			$this->age 	= $age; 
		} 

		public function personName()
		{
			echo $this->name."<br/>";
		}

		public function personAge($val)
		{
			echo $this->age = $val; 
		}

		public function calculate($a, $b)
		{
			echo "Summation is = ".($a+$b).'<br/>';
			echo "Subtraction is = ".($a-$b).'<br/>';
			echo "Multiplication is = ".($a*$b).'<br/>';
			echo "Division is = ".($a/$b);
		}

		public function personDetails()
		{
			echo $this->name.'/'.$this->age; 
		}


	}

	// Create Instance and make object 
	$personOne 			= new Person("Rabiul Awal", '27'); 
	$personOne->name 	= "Rabiul Awal";
	$personOne->personName();

	//By passing parameter 
	$personOne->personAge('27');


?>


<!-- ************************************************************ -->
<h3 style="background-color: #ccc; padding: 10px;">Video : 2</h3>
<!-- ************************************************************ -->

<form action="" method="post">
	<table>
		<tr>
			<td>Enter the first number : </td>
			<td><input type="number" name="num1"></td>
		</tr>

		<tr>
			<td>Enter the second number : </td>
			<td><input type="number" name="num2"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="calculate"></td>
		</tr>
	</table>
</form>

<?php
	if(isset($_POST['calculation']))
	{
		$numOne = $_POST['num1'];
		$numTwo = $_POST['num2'];

		if(empty($numOne) || empty($numTwo))
		{
			echo "Field Must Not Be Empty.".'<br/>';
		}
		else
		{
			echo "First Number is = ".$numOne. ", Second Number is = ".$numTwo.'<br/>';
			$personOne->calculate($numOne, $numTwo);
		}
	}

?>



<!-- ************************************************************ -->
<h3 style="background-color: #ccc; padding: 10px;">Video : 3</h3>
<!-- ************************************************************ -->

<?php $personOne->personDetails(); ?>
