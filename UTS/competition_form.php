<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $category = htmlspecialchars($_POST["category"]);

i
  if (!empty($name) && !empty($email) && !empty($phone) && !empty($category)) {
  
    echo "
    <link rel='stylesheet' href='form.css'>
    <div class='container'>
      <h2>🏆 Competition Registration Form</h2>
      <div class='result'>
        <h3>✅ Registration Successful!</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Category:</strong> $category</p>
      </div>
      <div class='btn-group'>
        <a href='competition_form.php' class='btn home'>🏠 Back to Home</a>
        <a href='competition_form.php' class='btn'>+ Add Another Registration</a>
      </div>
    </div>
    ";
    exit();
  } else {
    $error = "⚠️ Please fill in all fields!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Competition Registration Form</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <div class="container">
    <h2>🏆 Competition Registration Form</h2>

    <?php if (!empty($error)): ?>
      <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form id="competitionForm" method="POST" action="">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your full name">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="example@email.com">

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" placeholder="0812xxxxxxx">

      <label for="category">Competition Category:</label>
      <select id="category" name="category">
        <option value="">-- Select --</option>
        <option value="Coding">Coding</option>
        <option value="Design">Design</option>
        <option value="Business Plan">Business Plan</option>
        <option value="Robotics">Robotics</option>
      </select>

      <input type="submit" value="Register">
    </form>
  </div>

  <script src="style.js"></script>
</body>
</html>
