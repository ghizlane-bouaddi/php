<?php

session_start();
//echo "Salam " . $_SESSION['user'];


if (!isset($_SESSION['user'])) {
    echo "Ma kaynch user, sir t9addam login.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4">
            <h2>Marhba <?php echo htmlspecialchars($username); ?>!</h2>
            <p>Hna profile dyalk. Daba t9dar tchaouf contacts dyalk f page dyal contacts.</p>
            <a href="logout.php" class="btn btn-danger">Déconnexion</a>
        </div>
    </div>
</body>
</html>

