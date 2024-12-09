<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vodkas</title>
    <link rel="stylesheet" href="/Authentication/stylesheets/style3.css">
</head>
<body>
    <!-- Navigation Section -->
    <nav class="nav">
        <div class="container">
            <a href="products.php" class="btn">Back to Alcohol...</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <!-- Jazz Juke Box Section -->
        <section class="jukebox">
            <h2>Jazz Juke Box</h2>
            <audio controls autoplay>
                <source src="/Authentication/music/jazz1.mp3" type="audio/mpeg">
            </audio>
        </section>

        <!-- Vodkas Showcase Section -->
        <section class="tequila">
            <h2>Vodkas</h2>
            <div class="vodka-images">
                <div class="img-container">
                    <img src="/Authentication/img/shmeer.png" alt="Sauza Tequila">
                </div>
                <div class="img-container">
                    <img src="/Authentication/img/skyy.png" alt="Espolon Tequila">
                </div>
                <div class="img-container">
                    <img src="/Authentication/img/absolut.png" alt="Don Julio Tequila">
                </div>
            </div>
        </section>
    </main>

    <div>
        <?php
        try {
            // Database connection
            $dsn = "pgsql:host=localhost;dbname=LiquorProject";
            $username = "postgres";
            $password = "Anaethan03";
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // Query the database
            $sql = "SELECT * FROM vodka";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //search box
            echo "<div class='search-container'>";
            echo "<label for='searchInput'>Search: </label>";
            echo "<input type='text' id='searchInput' placeholder='Search Vodkas'>";
            echo "</div>";
        
            // Output data into a table
            echo "<table class='alcoholGrid'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>";
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['vodka_name']) . "</td>
                        <td>" . htmlspecialchars($row['vodka_location']) . "</td>
                        <td>" . htmlspecialchars($row['vodka_base']) . "</td>
                      </tr>";
            }
        
            echo "</tbody></table>";
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
        ?>
    <div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 The Liquor Lounge. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="/Authentication/js/searchTable.js"></script>
</body>
</html>
    </footer>
</body>
</html>
