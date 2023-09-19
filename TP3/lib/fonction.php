<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'enregistrer') {
        enregistrer();
    }
}

function enregistrer()
{
    if (validerNom()) {
        
    } else {
        echo 'Tu as pas le droit davoir un nom qui commence par un s !';
    }

    if (validerDateNaissance()) {
        //C'est bon
    } else {
        echo 'Comment ca tu est né aprés 2020 et tu est sur un pc mon ptit tabarnak !';
    }

    if (validerPassword()) {

    } else {
        echo 'Ton mot de passe est ass en criss !';
    }

    if (validerAge()) {

    } else {
        echo 'Tu est trop petit pour t inscire salle niaiseux !';
    }

    if (comfirmerMdp()) {

    } else {
        echo 'Maudit niaiseux ton mot de passe et pas le meme dans les deux champs, recommence !';
    }

    if (validerCommentaire()) {

    } else {
        //c'est de l'humour t'inquiéte
        echo 'Met pas de w dans ton commentaire stp je les aimes pas, comme les n... euh je veut dire les niaiseux';
    }

    if (validerNom() && validerPassword() && comfirmerMdp() && validerAge() && validerCommentaire()) {
        afficher();
    }
}

function validerNom()
{
    if (isset($_POST['nom'])) {
        if ($_POST['nom'][0] <> 's') {
            return true;
        }
    }
}

function validerDateNaissance() {
    if (isset($_POST['date'])) {
        if ($_POST['date'] < '2020-01-01') {
            return true;
        }
    }
}

function validerPassword() {
    $mdp = $_POST['password'];
    $pattern = '/^(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$/';

    if (preg_match($pattern, $mdp)) {
        return true;
    }
}

function validerAge() {
    if (isset($_POST['age'])) {
        if ($_POST['age'] > '30') {
            return true;
        }
    }
}

function comfirmerMdp() {
    if ($_POST['cpassword'] == $_POST['password']) {
        return true;
    }
}

function validerCommentaire() {
    for ($i=0; $i<999; $i++) {
        if (isset($_POST['com'])) {
            if ($_POST['com'][$i] <> 'w' || $_POST['com'][$i] <> 'W') {
                return true;
            }
        }
    }
}

function afficher()
{
    echo "<hr>";
    echo 'Tu t est bien enregistrer a la newslettre xxx_Sylvain-branconnier-de-Alma_xxx';
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // echo "<hr>";
    // echo '======> $_GET[ ]';
    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";

    // echo "<hr>";
    // echo '======> $_SERVER[ ]';
    // echo "<pre>";
    // echo $_SERVER['PHP_SELF'];
    // echo "</pre>";
}
?>