<title>Area Amministratore</title>
<?php
session_start();

// Verifica del ruolo utente
if ($_SESSION['ruolo'] !== 'amministratore') {
    header("Location: index.html");
    exit;
}
// Contenuto riservato per l'amministratore
echo "Benvenuto amministratore!";

?>