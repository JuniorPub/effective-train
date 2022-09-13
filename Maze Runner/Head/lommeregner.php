<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

<title> Hjemmeside 3 </title>
</head>
<body>
   <nav>
        <ul>
            <li> <a href="index.php">Home</a></li>
            <li> <a href="Lommeregner.php">Lommeregner</a></li>
            <li> <a href="signup.php">Sign Up</a></li>
            <li> <a href="loginsystem.php">Login</a></li>

        </ul>
   </nav>
<br>
    <h1>Her er min Lommeregner</h3> <br>

        <form>
            
            <form action="/action_page.php">
            
                <input type="text" id="value1" placeholder="insert value 1 here"><br>              
            
                <input type="text" id="value2" placeholder="insert value 2 here"><br>

            <select id="operator">
                <option value="" disabled selected>chose operator...</option>
                <option value="add">Add</option>
                <option value="min">Minus</option>
                <option value="div">Divide</option>
                <option value="mul">Multiply</option>
            </select> 
            <br>

            <button type="button" onclick="calc()">Calulate</button>
        </form>

        <div id="results"></div>

        
</body>
    <script src="Main.js"></script>
</html>