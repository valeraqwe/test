<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Manage Employees</h1>

    <!-- Add Employee Form -->
    <form method="post" class="mt-3">
        <input type="email" name="email" placeholder="Email" class="form-control">
        <input type="text" name="username" placeholder="Username" class="form-control mt-2">
        <!-- ... other fields ... -->
        <input type="submit" value="Add Employee" class="btn btn-primary mt-2">
    </form>

    <!-- List of Employees -->
    <ul class="list-group mt-3">
        <?php foreach ($employees as $employee): ?>
            <li class="list-group-item">
                <?php echo $employee['username']; ?> (<?php echo $employee['email']; ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
