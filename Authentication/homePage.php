<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Liquor Lounge</title>
    <link rel="stylesheet" href="./stylesheets/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>The Liquor Lounge</h1>
            <p>Your gateway to premium spirits and jazz vibes</p>
        </div>
        <!-- Back to Login Button -->
        <a href="login.php" class="back-to-login-btn">Back to Login</a>
    </header>

    <!-- Navigation Section -->
    <nav class="nav">
        <div class="container">
            <a href="products.php" class="btn">Explore Our Products</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <!-- Jazz Juke Box Section -->
        <section class="jukebox">
            <h2>Jazz Juke Box</h2>
            <p>Pick your favorite track and let the music take over</p>
            <div class="audio-controls">
                <audio controls>
                    <source src="/Authentication/music/jazz1.mp3" type="audio/mpeg">
                </audio>
                <audio controls>
                    <source src="/Authentication/music/jazz2.mp3" type="audio/mpeg">
                </audio>
                <audio controls>
                    <source src="/Authentication/music/jazz3.mp3" type="audio/mpeg">
                </audio>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="about">
            <h2>Who We Are</h2>
            <p>
                At The Liquor Lounge, we blend exceptional taste and style, offering a curated selection of spirits 
                paired with the smoothest jazz. Step into a world of sophistication and discover your perfect sip.
            </p>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 The Liquor Lounge. All Rights Reserved.</p>
            <p>Follow us: 
                <a href="#" class="social">Facebook</a> | 
                <a href="#" class="social">Instagram</a> | 
                <a href="#" class="social">Twitter</a>
            </p>
        </div>
    </footer>
</body>
</html>
