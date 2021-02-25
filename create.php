<?php
$j = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data.json');
$data = json_decode($j);

if(!empty($_POST) && !empty($_FILES)) {
    $uploaddir = '/home/sanyok/test2/storage/';
    $uploadfile = $uploaddir . basename($_FILES['picture']['name']);

    move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);

    $post['info'] = $_POST;
    $post['picture'] = basename($_FILES['picture']['name']);
    $data[] = $post;
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data.json', json_encode($data));
}

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';
header("Location: http://$host$uri/$extra");
exit;
?>