<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Departments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Manage Departments</h1>

    <!-- Add Department Form -->
    <form method="post" class="mt-3">
        <input type="text" name="name" placeholder="New Department Name" class="form-control">
        <input type="submit" name="add" value="Add Department" class="btn btn-primary mt-2">
    </form>

    <!-- List of Departments -->
    <ul class="list-group mt-3">
        <?php foreach ($departments as $department): ?>
            <li class="list-group-item">
                <?php echo $department['name']; ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $department['id']; ?>">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
