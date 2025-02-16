<?php
// update_vidas.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $file = 'vidas.json';
    if (file_exists($file)) {
        file_put_contents($file, json_encode($data));
    }
}
?>
