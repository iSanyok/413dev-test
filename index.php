<?php
$j = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data.json');
$data = json_decode($j);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
<div>
    <a href="form.php">Добавить новость</a>
</div>
<?php foreach ($data as $post): ?>
    <div style="margin-bottom: 1em">
        <div>
            <label><?= $post->info->name ?></label>
        </div>
        <div>
            <label><?= $post->info->announc ?></label>
        </div>
        <div>
            <img src="storage/<?= $post->picture ?>" alt="" style="max-height: 300px; max-width: 300px">
        </div>
    </div>
<?php endforeach; ?>
</body>
</html>
