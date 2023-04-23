<?php
try {
    $pdo = new PDO("mysql:dbname=school;host=localhost", "root", "admin123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("SELECT * FROM students where id = :id");
    $statement->bindParam(":id", $_GET['id']);
    if ($statement->execute()) {
        $student = $statement->fetch(PDO::FETCH_OBJ);

    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <?php if($student) : ?>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo "{$student->name}"?></h5>
                        <p class='card-text'><?php echo "{$student->email}"?></p>
                        <a href='#' class='btn btn-primary'>Log out</a>
                    </div>
                    <?php else:?>
                        <p>Student not found</p>;
                    <?php endif;?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
