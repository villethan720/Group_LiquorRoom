<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Liquor Room</title>
        <link rel="stylesheet" href="/Authentication/stylesheets/styles.css">
    </head>

    <body>
    <div class="form-container">
        <h2>Login to the Liquor Room</h2>
    <form action="authentication.php" method="post">
        
        <!--Creates fields for the username and password that we can use to authenticate the session by having the user log in-->
        <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" required>
        </div>

       <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
