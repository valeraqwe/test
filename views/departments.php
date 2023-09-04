<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Departments</title>
</head>
<body>
<h1>Manage Departments</h1>

<!-- Add Department Form -->
<form method="post">
    <input type="text" name="name" placeholder="New Department Name">
    <input type="submit" name="add" value="Add Department">
</form>

<!-- List of Departments -->
<ul>
    <?php foreach ($departments as $department): ?>
        <li>
            <?php echo $department['name']; ?>
            <form method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $department['id']; ?>">
                <input type="submit" name="delete" value="Delete">
            </form>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
