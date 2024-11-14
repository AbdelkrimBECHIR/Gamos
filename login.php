<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page login Gamos location de voiture haut de gamme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="/traitement.php"> method="POST"</form>
    <div>
        <label for="Firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname"
            pattern="^[a-zA-ZÀ-ÿ\s\-]+$"
            title="Le nom doit contenir que des lettres, des espaces et des tirets">
    </div>
    <div>
        <label for="lastname Custumer">Nom :</label>
        <input type="text" id="familyname" name="familyname" required
            pattern="^[a-zA-ZÀ-ÿ\s\-]+$"
            title="Le nom doit contenir que des lettres, des espaces et des tirets">
    </div>
    <form class="row g-3 needs-validation" novalidate>

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Email :</label>
            <input type="email" class="form-control" id="validationCustom01" name="email" placeholder="nom@exemple.com" required>
            <div class="valid-feedback">
                Nickel !
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Mot de passe :</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe" id="password" name="password" required minlength="8">
            </div>
            <div class="button">
                <button class="btn btn-primary" type="submit">Se Connecter</button>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>