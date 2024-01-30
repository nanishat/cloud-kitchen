<?php include('partials-front/menu.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact Us</title>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <section class="contact-form">

    <?php 
        ?>
        <form action=" " method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>
</body>
</html>
<?php 
    // Start Session
    if(isset($_POST['submit'])){
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    
    if(isset($_POST['message'])) {
        $message = $_POST['message'];
    }

    
    $sql = "INSERT INTO tbl_contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        echo "<div class='message'>------------------------Submitted successfully! We will Get Back to you shortly---------------------------</div>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
    
