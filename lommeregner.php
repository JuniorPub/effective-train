<?php 
    include_once 'header.php';
?>

<br>
    <h1>Her er min Lommeregner</h1> <br>

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

        
<?php 
    include_once 'footer.php';
?>