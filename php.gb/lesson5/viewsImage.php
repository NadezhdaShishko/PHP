<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Views of photo</title>
</head>
<body>

<?php foreach ($result as $image): ?>
    <img src="<?= $image['path'] . $image['name'] ?>">
    <p> Просмотров: <?= $image['views'] ?> </p>
<?php endforeach; ?>

</body>
</html>