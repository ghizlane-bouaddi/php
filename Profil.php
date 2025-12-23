<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// vérifier session
if (!isset($_SESSION['user'])) {
    echo "Ma kaynch user, sir t9addam login.";
    exit();
}

$username = $_SESSION['user'];


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ConnectSys</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Contacts</a>
        </li>
      </ul>
      <div class="d-flex">
        <a href="logout.php" class="btn btn-outline-danger">Déconnexion</a>
      </div>
    </div>
  </div>
</nav>
</header>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h3 class="card-title text-center mt-4 mb-4 text-white">Bienvenue <?php echo htmlspecialchars($username); ?></h3>

                <ul class="list-group mb-4">
                    <li class="list-group-item">
                        <strong>Nom d'utilisateur :</strong> <?php echo htmlspecialchars($username); ?>
                    </li>
                    
                </ul>

                <div class="d-grid">
                    <a href="contact.php" class="btn btn-primary">Gérer mes contacts</a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.js"></script>
<script src="script.js"></script>
</body>
</html>
