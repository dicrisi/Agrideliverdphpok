<?php 
    include_once("header1.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Agricultural Farmer Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <center>

    <section class="contact-section">
        <div class="container">
		 <h1>Contact Us - Agricultural Farmer Management</h1>
            <h2>Get In Touch</h2>
			<br>
			<br>
			
            <p>Have a question or need assistance? Fill out the form below and we'll get back to you as soon as possible.</p>
			<br>
			<br>
            <form id="contactForm" action="process_contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Agricultural Farmer Project. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Show message sent popup
            alert('Message sent! We will get back to you soon.');

            // You can also redirect the user to another page if needed
            // window.location.href = 'thankyou.php';
        });
    </script>
</center>
</body>
</html>

<?php			
    include_once("footer.php");
?>
