<h3 style="background-color: #ccc; padding: 10px;">Video : 4 to 7</h3>
<!-- ************************************************************ -->

<?php 	
	class Person
	{
		public $name; 
		public $age;
		public $id;

        const NAME = "Md. Rabiul Awal";
        public static $fullName = "R A";

		public function __construct($name, $age)
		{
			$this->name = $name; 
			$this->age 	= $age;
		} 

		public function setId($id)
		{
			$this->id = $id; 
		}

        public static function display()
        {
            echo "Your Name is : ".Person::NAME.'<br/>'; 
            echo "Your Full Name is : ".self::$fullName; 
        }

		public function __destruct()
		{
            unset($id);
			// if(!empty($this->id))
			// {
			// 	echo "Id Not empty";
			// }
			// else
			// {
			// 	echo "Id empty";
			// }
		}
	}

	// Create Instance and make object 
	$personOne 			= new Person("Rabiul Awal", '27'); 
	$personOne->setId(12);
    $personTwo          = new Person("Rabiul Awal", '28'); 
    echo $personOne->age.'<br/>'; 
    $personOne->display(); 
    //Person::display(); 
?>
