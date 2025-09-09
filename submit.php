<?php

$fname = $lname = $email = $password = "";

if (
    $_SERVER["REQUEST_METHOD"]
    == "POST"
) {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Submitted Data</title>
</head>

<body>

    <h2>Submitted Data</h2>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p><strong>First Name: </strong> <?php echo $fname; ?></p>
        <p><strong>Last Name: </strong> <?php echo $lname; ?></p>
        <p><strong>Email: </strong> <?php echo $email; ?></p>
        <p><strong>Password: </strong> <?php echo $password ?></p>
    <?php else: ?>
        <p>No data has been submitted yet.</p>
    <?php endif; ?>

</body>

</html>