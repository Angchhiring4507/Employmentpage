

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body> 

<header>
        <nav>
            <ul>
            <li><a href="form.php">Add Employee Record</a></li>
            <li class="logo"><a href="index.php"><img src="logo-transparent-png.png" alt="Business Logo"></a></li>
            <li><a href="view.php">View Employees Record</a></li>
            </ul>
        </nav>
    </header>

   <h1>Employee Data Entry Page</h1>
  <form action="processform.php" method="post">
  
   <label for="Employeeid"> Employeeid:</label><br>
    <input type="number" name="Employeeid"><br>
   
   <label for="Firstname"> Firstname:</label><br> 
   <input type="text" name="Firstname"><br>

   <label for="Lastname"> Lastname:</label><br>
   <input type="text" name="Lastname"><br>

   <Label for="Hours"> Hours:</Label><br>
   <input type="number" name="Hours"><br>

  <input type="submit" value="register" class="submit-butt">

  </form>
  <footer>
    <p>&copy; 2023 GREEN BOUNTY DEPOT. All rights reserved.</p>
</footer>
</body>
</html>


