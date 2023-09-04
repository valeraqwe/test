<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
</head>
<body>
<h1>Manage Employees</h1>

<!-- Add Employee Form -->
<form method="post">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="address" placeholder="Address">
    <input type="tel" name="telephone" placeholder="Telephone">
    <textarea name="comments" placeholder="Comments"></textarea>
    <select name="department_id">
        <?php foreach ($departments as $department): ?>
            <option value="<?php echo $department['id']; ?>"><?php echo $department['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Add Employee">
</form>

<!-- List of Employees -->
<ul>
    <?php foreach ($employees as $employee): ?>
        <li>
            <?php echo $employee['username']; ?> (<?php echo $employee['email']; ?>)
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
