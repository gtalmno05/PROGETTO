<title>Area Docente</title>
<?php
session_start();

// Verifica del ruolo utente
if ($_SESSION['ruolo'] !== 'docente') {
    header("Location: index.html");
    exit;
}
// Contenuto riservato per il docente
echo "Benvenuto docente!";
?>