<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
   
    <div class="regform">
    <form action="index.php" method="POST" class="form" autocomplete="off">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required autocomplete="on"><br><br>

         <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required autocomplete="new-email"><br><br>

         <label for="password">Pasword:</label><br>
         <input type="password" id="password" name="password" required autocomplete="new-password"><br><br>
         
        <button type="submit" name="submit">Send</button>
    </form>
    </div>
</body>
</html>