<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | StudentAssist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <h2 class="logo">StudentAssist</h2>
</nav>

<div class="form-container">
    <h2>Create Your Account</h2>

    <form>
        <label>Email</label>
        <input type="email" placeholder="Enter your email" required>

        <label>First Name</label>
        <input type="text" placeholder="John" required>

        <label>Last Name</label>
        <input type="text" placeholder="Doe" required>

        <label>Password</label>
        <input type="password" placeholder="Min 6 characters" required>

        <label>Gender</label>
        <select required>
            <option value="">Select gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Rather not say</option>
        </select>

        <button type="submit" class="btn">Register</button>

        <p class="redirect-text">
            Already have an account? <a href="login.php">Login</a>
        </p>
    </form>
</div>

</body>
</html>
