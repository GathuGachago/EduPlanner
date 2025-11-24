<?php
// Simulate user session (no backend)
$userName = "Student Name"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | StudentAssist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <h2 class="logo">StudentAssist</h2>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="index.php" class="btn">Logout</a></li>
    </ul>
</nav>

<section class="dashboard">
    <h2>Welcome, <?php echo $userName; ?> 👋</h2>

    <div class="dashboard-grid">

        <div class="card">
            <h3>📚 Workload Tracker</h3>
            <p>See upcoming tasks, assignments, and deadlines.</p>
        </div>

        <div class="card">
            <h3>🗓 Study Planner</h3>
            <p>Plan your weekly study schedule.</p>
        </div>

        <div class="card">
            <h3>📈 Progress Overview</h3>
            <div class="progress-bar">
                <div class="progress-fill" style="width:60%"></div>
            </div>
            <p>Estimated weekly progress.</p>
        </div>

        <div class="card">
            <h3>💡 Study Tips</h3>
            <ul>
                <li>Break study sessions into chunks</li>
                <li>Review materials daily</li>
                <li>Stay consistent</li>
            </ul>
        </div>

    </div>
</section>

</body>
</html>
