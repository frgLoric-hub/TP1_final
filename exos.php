<html>
<head>
    <title>Resultat</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
// EXERCICE 1 : calcul de l'age
if (isset($_GET["annee"])) {
    $annee = $_GET["annee"];
    $mois  = $_GET["mois"];
    $jour  = $_GET["jour"];

    $age = date("Y") - $annee;

    if (date("m") < $mois || (date("m") == $mois && date("d") < $jour)) {
        $age = $age - 1;
    }

    echo "Vous avez $age ans.";
}

// EXERCICE 2 : verification du mot de passe
if (isset($_POST["motdepasse"])) {
    $utilisateur = $_POST["utilisateur"];
    $motdepasse  = $_POST["motdepasse"];

    if ($motdepasse == "CR7g0at") {
        echo "Bonjour 007";
    } else {
        echo "erreur de mot de passe !";
    }
}

// EXERCICE 3 : boucle d'affichage
if (isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];

    $cpt = 0;
    while ($cpt < $nombre) {
        echo "je suis trop fort <br />";
        $cpt++;
    }
}
?>

<p><a href="index.php">Retour</a></p>
</body>
</html>