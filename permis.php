<?php
// session_start();
$nome = isset($_SESSION['nome']) ? $_SESSION["nome"] : null;
$id = isset($_SESSION['id']) ? $_SESSION["id"] : null;
$fp = isset($_SESSION['fp']) ? $_SESSION["fp"] : null;
$permis = isset($_SESSION['permis']) ? $_SESSION["permis"] : null;
if (!empty($permis)) {
	$adm=1;
}
?>