<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="index.php" method="GET">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // $name = (trim($_POST['name']));
            // $email = (trim($_POST['email'])); 
            // $message = (trim($_POST['message'])); 

            $name = (trim($_GET['name']));
            $email = (trim($_GET['email'])); 
            $message = (trim($_GET['message'])); 

            echo "<h3>Your Submitted Data:</h3>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Message: $message<br>";
        }
        ?>
    </div>
</body>
</html>
