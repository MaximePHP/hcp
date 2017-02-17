<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=u559000742_site', 'u559000742_maxou', 'Bea97clo');
?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
   </head>
   <body>
         <h2>Bienvenue</h2>
         <p>C'est un profil</p>
         <br />
         <p>Tu peux modifier ou te déconnecter si tu le souhaite :)</p>
         <p>Je m'appele Maxime Cabrol est je suis le créateur de ce site :)</p>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
<?php include("footer.php"); ?>
   </body>
</html>