<?php
error_reporting(0);
include('header1.php');
?>


 <style>
        /* CSS for image slider */
        .slider-container {
            position: relative;
            width: 80%;
            height: 400px; /* Adjust the height as needed */
            overflow: hidden;
            margin: 0 auto; /* Center the slider */
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        /* Styling for about-section */
        .about-section {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .about-section h2 {
            text-align: center;
            color: #333;
        }

        .about-section p {
            text-align: center;
            color: #666;
            line-height: 1.6;
            margin-top: 20px;
        }

        /* Styling for mission-vision-section */
        .mission-vision-section {
            padding: 50px 0;
            background-color: #e6e6e6;
        }

        .mission-vision-section h2 {
            text-align: center;
            color: #666;
        }

        .mission-vision-section p {
            text-align: center;
            color: #666;
            line-height: 1.6;
            margin-top: 20px;
        }

        .mission-vision-section ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        .mission-vision-section ul li {
            margin-bottom: 10px;
            color: #666;
			 text-align: center;
        }
    </style>


<body>
<center>
    <section class="slider-section">
        <div class="slider-container">
            <div class="slider">
                <img src="image1.jpg" alt="Image 1">
                <img src="image2.jpg" alt="Image 2">
                <img src="image3.jpg" alt="Image 3">
            </div>
        </div>
    </section>
</center>
    <section class="about-section">
        <div class="container">
            <h2>Who We Are</h2>
            <p>Welcome to Agricultural Farmer Project, your reliable partner in modern farming solutions. We are a team of passionate individuals dedicated to revolutionizing the agricultural sector through innovation and sustainable practices.</p>
            <p>Our journey began with a vision to empower farmers with cutting-edge technologies and expertise to enhance productivity, optimize resource utilization, and ensure food security for generations to come.</p>
        </div>
    </section>

    <section class="mission-vision-section">
        <div class="container">
            <h2>Our Mission</h2>
            <p>At Agricultural Farmer Project, our mission is to:</p>
            <ul>
                <li>Empower farmers with knowledge and resources to maximize yields.</li>
                <li>Promote sustainable farming practices to safeguard the environment.</li>
                <li>Facilitate access to advanced agricultural technologies for all farmers.</li>
                <li>Contribute to global food security and alleviate poverty in rural communities.</li>
            </ul>

           
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Agricultural Farmer Project. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // JavaScript for image slider
        let index = 0;
        const images = document.querySelectorAll('.slider img');
        
        function showImage() {
            for (let i = 0; i < images.length; i++) {
                images[i].style.display = 'none';
            }
            index = (index + 1) % images.length;
            images[index].style.display = 'block';
            setTimeout(showImage, 3000); // Change image every 3 seconds
        }
        showImage();
    </script>

</body>
</html>

<?php
include('footer.php');
?>
