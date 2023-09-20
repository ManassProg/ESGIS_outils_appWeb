<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <form action=""></form>
    <h1>Formulaire d'inscription</h1>
    <div>
        <label for="nom">Nom:</label>
        <input type="text" name="nom">
    </div>
    <div>
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom">
    </div>
    <div>
        <label for="mail">Email:</label>
        <input type="text" name="mail">
    </div>
    <div>
        <label for="dateNaissance">Date de Naissance:</label>
        <input type="date" name="dateNaissance">
    </div>
    <div>
        <label for="sexe">Sexe:</label>
        <input type="radio" name="sexe">Homme
        <input type="radio" name="sexe">Femme
    </div>
    <div>
        <label for="filière">Filière:</label>
        <select name="filier" id="filier">
            <option value="">SG</option>
            <option value="">DAF</option>
            <option value="" selected>IIRT</option>
        </select>
    </div>
    <div>
        <label for="matiere">Matiere</label>
        <input type="checkbox" name="">Reseau
        <input type="checkbox" name="">Programmation
        <input type="checkbox" name="">Securite
    </div>
    <div>
        <label for="">Dernier Bulletin</label>
        <input type="file" name="">
    </div>
    <input type="submit" value="Envoyer" name="">
    <input type="reset" value="Annuler" name="">
    </form>
</body>
</html>
