<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquor Products</title>
    <link rel="stylesheet" href="/Authentication/stylesheets/style4.css">
</head>
<body>
    <!-- Navigation Section -->
    <nav class="nav">
        <div class="container">
            <a href="homePage.php" class="btn">Back Home</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <!-- Jazz Juke Box Section -->
        <section class="jukebox">
            <h2>Jazz Juke Box</h2>
            <audio controls>
                <source src="/Authentication/music/jazz2.mp3" type="audio/mpeg">
            </audio>
        </section>

        <!-- Liquor Products Section -->
        <section class="liquors">
            <h2>All of the Different Liquors We Own</h2>
            <div class="buttons-container">
                <a href="tequila.php" class="btn liquor-btn">Tequila</a>
                <a href="vodka.php" class="btn liquor-btn">Vodka</a>
                <a href="whiskey.php" class="btn liquor-btn">Whiskey</a>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 The Liquor Lounge. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
