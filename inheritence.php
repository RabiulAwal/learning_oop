<h3 style="background-color: #ccc; padding: 10px;">Video : 8</h3>
<!-- ************************************************************ -->

<?php 	
	class Person
	{
		public $user; 
		public $userId;

		public function __construct($userName, $userId)
		{
			$this->user 	= $userName; 
			$this->userId 	= $userId;
		} 

        public function display()
        {
        	echo "Username is : {$this->user} <br/> ID is : {$this->userId} ";
        }
	}


	/*******************************************************
	** Create A Sub Class From Person (Extend Person)
	*******************************************************/
	class Admin extends Person
	{
		public $level;
		
        public function display()
        {
        	echo "Username is : {$this->user} <br/> ID is : {$this->userId} <br/> Level is : {$this->level} ";
        }

	} 

	// Create Instance and make object 
	$user 		= "Rabiul";
	$id 		= "25";
	$persons 	= new Person($user, $id); 
	$persons->display();
	echo "<br/><hr>";

	// Get All data From Subclass (Admin) INHERITENCE
	$user 			= "Admin";
	$id 			= "1";
	$Admin 			= new Admin($user, $id); 
	$Admin->level 	= "Administartor"; 
	$Admin->display();
	echo "<br/>";

?>
