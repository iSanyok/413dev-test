<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
    <form method="POST" action="create.php" enctype="multipart/form-data">
        <div>
            <label>Название</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Анонс</label>
            <input type="text" name="announc">
        </div>
        <div>
            <label>Картинка</label>
            <input type="file" name="picture">
        </div>
        <button type="submit">send</button>
    </form>
</body>
</html>
