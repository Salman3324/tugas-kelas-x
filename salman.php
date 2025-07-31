<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi String</title>
</head>
<body>

<h2>Konversi Upper Case, Lower Case, dan Replace String</h2>

<form method="post">
    <label>Masukkan Teks:</label><br>
    <input type="text" name="text" required><br><br>

    <label>Pilih Konversi:</label><br>
    <select name="operation">
        <option value="uppercase">Upper Case</option>
        <option value="lowercase">Lower Case</option>
        <option value="replace">Replace String</option>
    </select><br><br>

    <label>Ganti Kata (jika memilih Replace String):</label><br>
    <input type="text" name="replace_from"><br>

    <label>Menjadi:</label><br>
    <input type="text" name="replace_to"><br><br>

    <button type="submit">Proses</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $operation = $_POST["operation"];
    $replace_from = $_POST["replace_from"] ?? "";
    $replace_to = $_POST["replace_to"] ?? "";
    $result = "";

    switch ($operation) {
        case "uppercase":
            $result = strtoupper($text);
            break;
        case "lowercase":
            $result = strtolower($text);
            break;
        case "replace":
            $result = str_replace($replace_from, $replace_to, $text);
            break;
    }

    echo "<h3>Hasil:</h3>";
    echo "<p>$result</p>";
}
?>

</body>
</html>