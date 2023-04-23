<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Student Create</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="text-center mt-5">Create New Student</h1>
            <form action="store.php" method="post">
                <div class="form-group mb-3">
                    <label class="form-label">Name</label>
                    <input required type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input required type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-control">
                        <option disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="custom">Custom</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Date of birth</label>
                    <input required type="date" class="form-control" name="dob" placeholder="date of birth">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Age</label>
                    <input required type="number" class="form-control" name="age" placeholder="Age">
                </div>
                <button class="btn btn-primary">Create new student</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

