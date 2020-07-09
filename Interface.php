<h3 style="background-color: #ccc; padding: 10px;">Video : 12 to 13</h3>
<!-- ************************************************************ -->

<?php 
	
	interface School{
		public function mySchool();
	}

	interface College{
		public function myCollege();
	}

	interface Varsity{
		public function myVarsity();
	}

	/**
	 * Implement Interface in multiple class
	 */
	class Teacher implements School, College, Varsity
	{
		public function __construct()
		{
			$this->mySchool();
				$this->myCollege();
					$this->myVarsity();
		}

		public function mySchool()
		{
			echo "I am a School teacher.<br/>";
		}

		public function myCollege()
		{
			echo "I am a College teacher.<br/>";
		}

		public function myVarsity()
		{
			echo "I am a Varsity teacher.<br/>";
		}

	}


	class Student implements School, College, Varsity
	{
		public function __construct()
		{
			$this->mySchool();
				$this->myCollege();
					$this->myVarsity();
		}

		public function mySchool()
		{
			echo "I am a School student.<br/>";
		}

		public function myCollege()
		{
			echo "I am a College student.<br/>";
		}

		public function myVarsity()
		{
			echo "I am a Varsity student.<br/>";
		}

	}

	$teacher = new Teacher();
	echo '<br/>'; 
	$student = new Student(); 

?>