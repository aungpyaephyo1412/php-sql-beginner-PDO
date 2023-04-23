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
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Student Edit</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <?php if ($student): ?>
            <h1 class="text-center mt-5">Edit Student</h1>
            <form action="update.php" method="post">
                <div class="form-group mb-3">
                    <label class="form-label">Name</label>
                    <input required value="<?php echo $student->name?>" type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input required value="<?php echo $student->email?>" type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-control">
                        <option disabled>Select your gender</option>
                        <option value="male" <?php if ($student->gender == "male") {echo "selected";} ?> >Male</option>
                        <option value="female" <?php if ($student->gender == "female") {echo "selected";} ?>>Female</option>
                        <option value="custom" <?php if ($student->gender == "custom") {echo "selected";} ?>>Custom</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Date of birth</label>
                    <input required value="<?php echo $student->dob?>" type="date" class="form-control" name="dob" placeholder="date of birth">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Age</label>
                    <input required value="<?php echo $student->age?>" type="number" class="form-control" name="age" placeholder="Age">
                </div>
                <button class="btn btn-primary">Update student</button>
            </form>
            <?php else:?>
            <p>Student not found</p>
            <?php endif;?>
        </div>
    </div>
</div>
</body>
</html>


