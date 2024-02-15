<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Group2ti2exercice | Informations|vue"/>
    <meta name="author" content="Pierre Sandron"/>
    <title>informations| vue</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<!-- Responsive navbar-->
<?php
include "home.php";
?>
<!-- Page content-->
<body>
    

<form>
  <div class="form-group">
    <label for="name">Nom :</label>
    <input id="name" name="name" type="text" required />
  </div>
  <div class="form-group">
    <label for="age">Âge :</label>
    <input id="age" name="age" type="number" min="18" max="99" required />
  </div>
  <div class="form-group">
    <label for="gender">Sexe :</label>
    <select id="gender" name="gender" required>
      <option value="">Sélectionnez...</option>
      <option value="F">Féminin</option>
      <option value="M">Masculin</option>
      <option value="O">Autre</option>
    </select>
  </div>
  <div class="form-group">
    <label for="satisfaction">Niveau de satisfaction :</label>
    <input id="satisfaction" name="satisfaction" type="range" min="0" max="10" value="5" />
    <output for="satisfaction">5</output>
  </div>
  <div class="form-group">
    <button type="submit">Envoyer</button>
  </div>
</form>
</body>

</html>