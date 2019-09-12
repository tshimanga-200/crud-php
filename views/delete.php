<?php
/**
suppression
 */
include('../config/connection.php');
$id = htmlspecialchars($_GET['id']);
$delete = $pdo->prepare('DELETE FROM student WHERE id = ?');
$delete->execute(array($id));
header('Location: voir.php');
?>
