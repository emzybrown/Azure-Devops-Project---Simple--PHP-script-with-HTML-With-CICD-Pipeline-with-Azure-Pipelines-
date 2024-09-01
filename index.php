<?php
// Start the PHP session (if you want to use sessions)
session_start();

// Initialize variables
$name = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store the input
    $name = htmlspecialchars(trim($_POST['name']));
    // Optionally store name in session
    $_SESSION['name'] = $name;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .greeting {
            font-size: 1.2em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to PHP and HTML Example</h1>
        
        <!-- Display greeting if a name has been submitted -->
        <?php if ($name): ?>
            <div class="greeting">
                Hello, <?php echo $name; ?>! Nice to meet you.
            </div>
        <?php endif; ?>

        <!-- Form to input name -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="name">Enter your name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
