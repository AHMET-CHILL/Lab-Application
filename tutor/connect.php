<?php

    $firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','odev');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into examples(firstName, lastName, gender, email, password) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $lastName, $gender, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully... <br>";
		$stmt->close();
		
	}
	




    $sql = "SELECT * FROM examples";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // Process each row of data
    while ($row = $result->fetch_assoc()) {
        // Access row data
        $firstName = $row["firstname"];
        $lastName = $row["lastname"];
        $gender = $row["gender"];
        $email = $row["email"];
        $password = $row["password"];


        // Display the student information
        echo "First Name: $firstName <br>";
        echo "Last Name: $lastName<br>";
        echo "Gender: $gender<br>";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        echo "<br>";
    }
} else {
    echo "No students found.";
}

// Close the database connection
$conn->close();
?>