<?php
	class Table
	{
		static public function getTable($table_name, $db_name = "students")
		{
			$mysqli = new mysqli("localhost", "root", "password_0", $db_name);
			// Check connection
			if ($mysqli->connect_errno) {
				echo "Connect failed: " . $mysqli->connect_error;
			    exit();
			}
			$query = "SELECT * FROM " . $db_name . "." . $table_name;
			// Display number of rows
			if ($result = $mysqli->query($query)) {
				echo "Кількість записів: <span id='numRows'>" . $result->num_rows . "</span></br>";
			}
			return $result;
		}
		static public function showTable($table)
		{
			echo "<table>";
			$first = true; 
			while($row = $table->fetch_assoc()) {
				if ($first) { 
					//  Display column names
					foreach ($row as $key => $value) {
					    echo "<th>";
					    echo $key;
					    echo "</th>";
					}
					$first = false;
				}
				echo "<tr>";
		        foreach ($row as $key => $value) {
		        	// Display rows
		        	echo "<td>";
		        	echo $row[$key];
		        	echo "</td>";
		        }
		        echo "</tr>";
			}
			echo "</table>";
		}
	}