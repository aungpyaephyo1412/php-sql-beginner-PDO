<?php
try {
    $pdo = new PDO("mysql:dbname=school;host=localhost","root","admin123");
    $statement = $pdo->query("
SELECT * from students;
    ");
if ($statement){
    $students = $statement->fetchAll(PDO::FETCH_OBJ);
}
}catch (Exception $exception){
    var_dump($exception->getMessage());
}?>
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
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">DOB</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $student):?>
                    <tr>
                        <th scope="row"><?php echo $student->id; ?></th>
                        <td><?php echo $student->name; ?></td>
                        <td><?php echo $student->email; ?></td>
                        <td><?php echo $student->age; ?></td>
                        <td><?php echo $student->dob; ?></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
</body>
</html>