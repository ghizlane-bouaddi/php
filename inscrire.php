
<?php
require 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>

        
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
            <h2 class="text-white">inscription</h2>
        </div>
        <form method="POST" action="auth.php" class="input">
             <div class="section_input">
            
            <input type="text" name="name" placeholder="user Name" class="border border-white p-2 rounded mb-3">
        </div>

        <div class="section_input">
            
            <input type="text" name="phone" placeholder="phone" class="border border-white p-2 rounded mb-3">
        </div>


        <div class="section_input">
            
            <input type="email" name="email" placeholder="email" class="border border-white p-2 rounded mb-3">
        </div>

        <div class="section_input">
            
            <input type="text" name="addrase" placeholder="addrease" class="border border-white p-2 rounded mb-3">
        </div>

         <div class="section_input">
           
            <input type="password" name="password" placeholder="password"class="border border-white p-2 rounded mb-3">
            
        </div>

       
       
        </div>
       
       <div class="section-button d-flex flex-column">
                  
                <button type="submite"  class="btn btn-primary">inscription</button>
                <button type="submite"  class="btn btn-primary">login</button>
        </div>


</form>
</section>

      
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>
</html>