<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konversi String</title>
</head>
<body>

<form method="post">
    <input type="text" name="text" placeholder="Masukkan teks" required>
    <input type="text" name="replace_from" placeholder="Ganti kata (opsional)">
    <input type="text" name="replace_to" placeholder="Menjadi">
    <button type="submit">Proses</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $replace_from = $_POST["replace_from"] ?? "";
    $replace_to = $_POST["replace_to"] ?? "";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Opsi</th><th>Hasil</th></tr>";
    echo "<tr><td>Upper Case</td><td>" . strtoupper($text) . "</td></tr>";
    echo "<tr><td>Lower Case</td><td>" . strtolower($text) . "</td></tr>";
    echo "<tr><td>Replace</td><td>" . str_replace($replace_from, $replace_to, $text) . "</td></tr>";
    echo "</table>";
}
?>

</body>
</html>