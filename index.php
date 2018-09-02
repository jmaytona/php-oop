<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="calc.php" method="POST">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <select name="cal" id="operator">
            <option value="add">Add</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    
</body>
</html>