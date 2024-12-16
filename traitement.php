<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($nom) && !empty($email)) {
        echo "<div style='text-align: center; font-family: Arial; padding: 20px;'>
                <h1>Merci pour votre soumission !</h1>
                <p><strong>Nom :</strong> $nom</p>
                <p><strong>Email :</strong> $email</p>
                <a href='index.php' style='color: blue;'>Retourner au formulaire</a>
              </div>";
    } else {
        echo "<div style='text-align: center; font-family: Arial; padding: 20px;'>
                <h1>Erreur</h1>
                <p>Veuillez remplir tous les champs.</p>
                <a href='index.php' style='color: red;'>Retourner au formulaire</a>
              </div>";
    }
} else {
    header('Location: index.php');
    exit();
}
?>
