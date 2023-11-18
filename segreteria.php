<title>Area Segreteria</title>
<?php
session_start();

// Verifica del ruolo utente
if ($_SESSION['ruolo'] !== 'segretaria') 
{
    header("Location: index.html");
    exit;
}

// Contenuto riservato per la segretaria
echo "Benvenuta segretaria!";

?>