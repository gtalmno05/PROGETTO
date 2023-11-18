<?php
session_start();

// Recupero dei dati dal form
$username = $_POST['username'];
$password = $_POST['password'];
$ruolo = $_POST['ruolo'];

// Verifica dei dati di accesso
if ($ruolo === 'segretaria' && $username === 'segretaria' && $password === 'passwordsegretaria') {
    $_SESSION['ruolo'] = 'segretaria';
    header("Location: segreteria.php");
    exit;
} elseif ($ruolo === 'docente' && $username === 'docente' && $password === 'passworddocente') {
    $_SESSION['ruolo'] = 'docente';
    header("Location: docente.php");
    exit;
} elseif ($ruolo === 'amministratore' && $username === 'admin' && $password === 'passwordadmin') {
    $_SESSION['ruolo'] = 'amministratore';
    header("Location: amministratore.php");
    exit;
} else {
    echo "Accesso negato";
}
?>