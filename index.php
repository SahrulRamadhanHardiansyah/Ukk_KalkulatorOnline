<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Online</title>
    <link href="style.css" rel="stylesheet" type="text/css";>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="hasil.php">
        <h1>Kalkulator Online</h1>
        <input type="number" name="angka1">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>:</option>
            <option>x</option>
        </select>
        <input type="number" name="angka2">
        <button type="submit">Hitung</button>
    </form>
    
</body>
</html>