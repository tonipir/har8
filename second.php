<h2>Second Page</h2>
		<p>
			This is the second page.
		</p>

		<h3> PHP variable </h3>

		<?php
		$name='Garfield';
		$age=5;
		echo 'Name of the cat is <b>' .$name.  '</b> and it is <b>' .$age. '</b> years old <b>' ;
		?>

		<h3> PHP array  </h3>

		<<?php

		$names = array('Jim', 'Lisa', 'Bob');
		echo 'Names from the array: <br/>';
		print_r($names);
		echo '<br/> Second name is : '.$names[1];
		?>

		<h3> PHP assosiative </h3>

		<?php

		$persons=array(
			array("fname"=>'Jim', "lname"=>'Smith'),
			array("fname"=>'Lisa', "lname"=>'Simpson'),
			array("fname"=>'Bob', "lname"=>'Jones')
);

		?>

		All persons: <br>

		<?php

		print_r($persons);

		?>

		<p>
			Lastnames: <br>
			<?php

			foreach ($persons as $rivi)

			{
				echo $rivi['lname'].'<br>';
				// code...
			}

			 ?>
		</p>
