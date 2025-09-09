<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Form</title>
</head>

<body>
  <form action="submit.php" method="post">
    <div>
      <label for="fname">First Name: </label>
      <input
        type="text"
        id="fname"
        name="fname"
        required
        placeholder="Enter your first name" />
    </div>
    <div>
      <label for="lname">Last Name: </label>
      <input
        type="text"
        id="lname"
        name="lname"
        required
        placeholder="Enter your last name" />
    </div>
    <div>
      <label for="email">Email: </label>
      <input
        type="email"
        id="email"
        name="email"
        required
        placeholder="Enter your email" />
    </div>
    <div>
      <label for="password">Password: </label>
      <input
        type="password"
        id="password"
        name="password"
        required
        placeholder="Enter your password" />
    </div>
    <div>
      <input type="submit" value="Submit" />
    </div>
  </form>
</body>

</html>