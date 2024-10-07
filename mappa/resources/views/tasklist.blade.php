<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskList</title>
</head>
<body>
    <h1>Teendők</h1>
    <ul>
    <?php foreach($tasks as $task) : ?>
    <li><?= $task; ?></li>
    <?php endforeach; ?>
    </ul>
    <div>{{ $foo }}</div>
</body>
</html>