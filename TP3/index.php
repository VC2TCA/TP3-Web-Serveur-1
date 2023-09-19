<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<?php
  $name = isset($_POST['nom']) ? $_POST['nom'] : "";
  $mail = isset($_POST['email']) ? $_POST['email'] : "";
  $passw = isset($_POST['password']) ? $_POST['password'] : "";
  $passwc = isset($_POST['cpassword']) ? $_POST['cpassword'] : "";
  $ages = isset($_POST['age']) ? $_POST['age'] : "";
  $daten = isset($_POST['date']) ? $_POST['date'] : "";
?>

<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="Media/moi.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      TP3 Formulaires PHP/XSS
    </a>
  </div>
</nav>

<div class="text-danger">
  <?php
  include('lib/fonction.php');
  ?>
</div>

<form name="form" action="index.php?action=enregistrer" method="post">
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><box-icon name='user'></box-icon></span>
    <input type="text" class="form-control" placeholder="Username" name="nom" value="<?php echo $name; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><box-icon name='envelope'></box-icon></span>
    <input type="email" class="form-control" placeholder="Your Email" name="email" value="<?php echo $mail; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><box-icon name='lock-alt'></box-icon></span>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $passw; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><box-icon name='lock-alt'></box-icon></span>
    <input type="password" class="form-control" placeholder="Comfirm your password" name="cpassword" value="<?php echo $passwc; ?>">
  </div>

  <select class="form-select" name="langue">
    <option selected>Choisir une langue</option>
    <option value="fr">Français</option>
    <option value="en">Anglais</option>
  </select>
  <br>
  <div class="row">
    <div class="col">
      <input type="number" class="form-control" placeholder="Age" name="age" value="<?php echo $ages; ?>">
    </div>
    <div class="col">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><box-icon type='solid' name='calendar'></box-icon></span>
        <input type="date" class="form-control" name="date" value="<?php echo $daten; ?>">
      </div>
    </div>

    <div class="form-check">
      <label for="">Êtes vous un vrai fan de Sylvain ?</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1 reverseCheck1" name="oui" value="oui">
        <label class="form-check-label" for="inlineCheckbox1">oui</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="non" value="non">
        <label class="form-check-label" for="inlineCheckbox2">non</label>
      </div>
    </div>

    <div class="form-check">
      <input class="form-check-input" required type="checkbox" value="ok" name="spam" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Je suis daccord pour reçevoir des spam de la part de Sylvain
      </label>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Commentaire</label>
      <textarea class="form-control" name="com" placeholder="Ecrit ton commentaire" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>

    <div class="col-5">
      <input type="submit" class="btn btn-secondary text-light" name="register" value="Enregistrer">
    </div>
  </div>
</form>
</body>
</html>