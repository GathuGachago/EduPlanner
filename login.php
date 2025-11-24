<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | StudentAssist</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<nav class="navbar">
    <h2 class="logo">StudentAssist</h2>
</nav>

<div class="form-container">
    <h2>Login</h2>

    <form onsubmit="simulateLogin(event)">
        <label>Email</label>
        <input type="email" placeholder="Enter email" required>

        <label>Password</label>
        <input type="password" placeholder="Enter password" required>

        <button type="submit" class="btn">Login</button>

        <p class="redirect-text">
            Don’t have an account? <a href="register.php">Register</a>
        </p>
    </form>
</div>

</body>
</html>
