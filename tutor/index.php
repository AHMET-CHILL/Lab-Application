<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilim.css">
    <title>Registration Form</title>
</head>
<body>
    <form action="connect.php"  method="post">
        <div class="container">
            <h1>Register Form</h1>
            <p>Create an account.</p>

            <label for="Firstname"><b>First name</b></label>
            <input type="text" placeholder="Enter First name" name="firstname" id="firstname" required>

            <label for="Lastname"><b>Last name</b></label>
            <input type="text" placeholder="Enter Last name" name="lastname" id="lastname" required>

            <label for="Email"><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" id="email" required>

            <label for="Gender"><b>Gender</b></label><br>
            <label><input type="radio" name="gender" value="m">Male</label>
            <label><input type="radio" name="gender" value="f" >Female</label><br>


            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter password" name="password" id="password" required>

            <button type="submit" class="Registerbtn" name="Registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account <a href="#">Sign in</a></p> 

        </div>
    </form>
</body>
</html>