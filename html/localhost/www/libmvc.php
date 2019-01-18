<?php
	class View {
		static public function generateTable($table)
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
		        	if ($key == "id" && $value==$table->num_rows) {
		        		echo "<span id='rowNumbers'>" . $value . "</span>"; // This value is number of checkboxes
		        	} else {
		        		echo $value;
		        	}
		        	echo "</td>"; 	
		        }
		        echo "</tr>";
			}
			echo "</table>";
		}
	}
	class Control {
		static public function build($table) {
			$t = Model::getTable($table);
			View::generateTable($t);
		}
	}
	class Model {
		static public function getTable($table)
		{
			$mysqli = new mysqli("localhost", "root", "password_0", "students");
			// Check connection
			if ($mysqli->connect_errno) {
				echo "Connect failed: " . $mysqli->connect_error;
			    exit();
			}
			$query = "SELECT * FROM students." . $table;
			$result = $mysqli->query($query);
			return $result;
		}
	}