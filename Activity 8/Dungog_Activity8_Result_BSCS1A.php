<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    /* Custom styling for the form submission result page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      margin-top: 0;
    }

    p {
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4c55af;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Submission Result</h2>
    <?php
    // Retrieve and display form data
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
      include 'Pagdanganan_activity8_data_bscs1A.php';
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      echo "<p><strong>Name:</strong> " . $name . "</p>";
      echo "<p><strong>Email:</strong> " . $email . "</p>";
      echo "<p><strong>Message:</strong> " . $message . "</p>";
    } else {
      echo "<p>No form data submitted.</p>";
    }
    ?>
  </div>
  <a href="Dungog_Activity8_BSCS1A.html" class="btn">Go Back</a>
  <a href="Dungog_Activity8_View_BSCS1A.php" class="btn">View Entries</a>
</body>
</html>