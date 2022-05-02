<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form name="formRequestGet" method="get" action="Request.php">
                <label for="name">Nombre</label> 
                <input type="text" name="name">
                <input type="submit">
            </form>
        </div><br>
        <div class="row">
            <form name="formRequestPost" method="post" action="Request.php">
                <label for="name">Nombre</label> 
                <input type="text" name="name" value="">
                <input type="submit" />
            </form>
        </div>
    </div>
</body>
</html>