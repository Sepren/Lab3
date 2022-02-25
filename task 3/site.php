<?php
    /** @var string $email */
    /** @var string $title */
    /** @var string $category */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task3</title>
</head>
<body>

<form action="index.php" method="post">
    <label>
        Введите заголовок:
        <br>
        <input name="title" required>
        <br> <br>
        Введите свою почту:
        <br>
        <input name="email" required>
        <br> <br>
        Введите текст:
        <br>
        <input name="text" required>
    </label>
    <br> <br>
    <label for="category">Выберите категорию:</label>
    <br>
    <select name="category" id="category" required>
        <option value="Auto">Автомоболь</option>
        <option value="Sport">Спорт</option>
        <option value="Motorcycle">Мотоцикл</option>
    </select>
    <br> <br>
    <button>Submit</button>
</form>

<div class="content">
    <?= renderTemplate('table.php', [
        'email' => $email,
        'title' => $title,
        'category' => $category
    ]);
    ?>
</div>

</body>
</html>