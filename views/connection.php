<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Connection</title>
  
  <!-- Intégration de Bootstrap 5.2 via CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>

  <!-- Section de présentation -->
  <header>
  <h1> Fast-food Sushi </h1>
  </header>

<body id ="body">
    <!-- <header class="text-center my-3">
        <h1 class="text-logo"><span class="bi-shop"></span> Fast-food Sushi <span class="bi-shop"></span></h1>
    </header>

    <h1>Page de Connection</h1>

    <div id ="formContenue">
        <form action="" METHODE="POST" id="form">

            <label for="Utilisateur"> Utilisateur </label>
            <input type="text" name="utilisateur" id=" Utilisateur "> <br>

            <label for="mdp"> Mot de passe </label>
            <input type="password" name="mdp" id="mdp"><br>

            <label for="email"> Courriel </label>
            <input type="email" name="email" id="email"><br>

            <label for="souvenir"> Se souvenir de moi </label>
            <input type="checkbox" name="souvenir" id="souvenir"><br>

            <input type="submit" value="Envoyer">

        </form>
    </div> -->

    <main>
  <div class="container my-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <form method="POST">                
                
                <div class="mb-3">
                    <label for="email" class="form-label">  Courreile</label>
                    <input type="email" class="form-control" id="email" name="email" >
                    <span class="help-inline"><?= $errors['password'] ?? '' ?></span>

                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"> Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="help-inline"><?= $errors['password'] ?? '' ?></span>
                </div>
                
                    <div cclass="mb-3">
                    <label for="souvenir"> Se souvenir de moi </label>
                    <input type="checkbox" name="souvenir" id="souvenir"><br>
                    </div>
                <button type="submit"> Envoyer</button>
            </form>

        </div>
   
    </div>
</div>

</main>
</body>

</html>