<html>
<head>
    <title>TP 1</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<h1>EXERCICE 1</h1>
<form action="exos.php" method="get">
    Renseignez votre Date de naissance (format aaaa/mm/jj) : <br />
    Annee : <input type="text" name="annee" /> <br />
    Mois : <input type="text" name="mois" /> <br />
    Jours : <input type="text" name="jour" /> <br />
    <input type="submit" value="Envoyer" />
</form>

<h1>EXERCICE 2</h1>
<form action="exos.php" method="post">
    Utilisateur : <input type="text" name="utilisateur" /> <br />
    Mot de passe : <input type="password" name="motdepasse" /> <br />
    <input type="submit" value="Envoyer" />
</form>

<h1>EXERCICE 3</h1>
<form action="exos.php" method="get">
    Saisissez un nombre : <input type="text" name="nombre" /> <br />
    <input type="submit" value="Envoyer" />
</form>

</body>
</html>