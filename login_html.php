
<?php 
require 'login.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Conntacter</title>
</head>
<body>
    

  <header>
        <!--nav-->
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ConnectSys</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">connexion</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">inscription</a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contacts</a>
        </li>
      </ul>
      <div class="d-flex">
       
        <a class="btn btn-outline-success" type="submit">connexion</a>
      </div>
    </div>
  </div>
</nav>

 </header>
<section>
    <div class="d-flex flex-column align-content-center flex-wrap btn">

            <div class="text-center pt-4 ">
            <h2 class="text-white">Conction</h2>
        </div>
        <form method="POST" action="login.php">
        <div class="input">
             <div class="section_input">
            
            <input type="text" name="name" placeholder="user Name" class="border border-white p-2 rounded mb-3">
        </div>

         <div class="section_input">
           
            <input type="password" name="password" placeholder="password"class="border border-white p-2 rounded mb-3">
            <div class="link-passowrd">
                 <a href="#" class="text-white">Mot de passe oublie</a>
            </div>
        </div>
       
        </div>
       
       <div class="section-button d-flex flex-column">

<button type="submit" name="Conntacter" class="rounded text-white border border-white p-2 mb-3 mt-3 bg-info">Conntacter</button>
                <!-- <a href="Profil.php" class="rounded text-white border border-white p-2 mb-3 mt-3 bg-info">Se Conntacter</a> -->
                <a href="inscrire.php"class="rounded text-Info border border-white p-2 bg-white">Creer un nouveau compte</a>
            </div>


        </div>
        </form>
</section>

      



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.js"></script>
<script src="script.js"></script>
</body>
</html>