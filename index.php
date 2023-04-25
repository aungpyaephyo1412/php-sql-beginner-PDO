<?php
try {
    $pdo = new PDO("mysql:dbname=school;host=localhost", "root", "admin123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->query("
SELECT * from students;
    ");
    if ($statement) {
        $students = $statement->fetchAll(PDO::FETCH_OBJ);
    }
} catch (Exception $exception) {
    var_dump($exception->getMessage());
} ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Students</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
                <?php foreach ($students as $student): ?>
                        <a href="show.php?id=<?php echo $student->id; ?>" class="nav-link">
                            <p><?php echo $student->name; ?></p>
                        </a>
                <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
</html>