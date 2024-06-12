<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAZI | Enregistrer un cv</title>
</head>
<body>
    <div>
        <h2>Enregistrer votre cv</h2>

        <form method="post" action="/cv">
            @csrf
            <label for="nom">Nom</label>
            <input type="text" name="nom">

            <label for="postnom">Post-Nom</label>
            <input type="text" name="postnom">

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom">

            <label for="profession"></label>
            <select name="profession" id="profession">
                <option value="developpeur web">Developper Mobile</option>
                <option value="developpeur mobile">Developper Mobile </option>
                <option value="designer">Designer</option>
                <option value="soudeur">Soudeur</option>
                <option value="Macon">Macon</option>
            </select>

            <label for="villeNaissance">Ville de naissance</label>
            <input type="text" name="villeNaissance">

            <label for="dateNaissance">Date de naissance</label>
            <input type="date" name="dateNaissance">

            <label for="adresse">Adresse</label>
            <input type="text" name="adresse">

            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="telephone">Telephone</label>
            <input type="text" name="telephone">

            <input type="submit" value="Valider">
        </form>
    </div>
</body>
</html>