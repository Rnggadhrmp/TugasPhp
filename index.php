<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga Pulsa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            color: white;
            padding: 20px;
        }
        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            color: black;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        th, td {
            border: 1px solid black;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #00aaff;
            color: white;
        }
        .button {
            background: #28a745;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: 0.3s;
        }
        .button:hover {
            background: #218838;
            transform: scale(1.1);
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #fff;
        }
        h2 {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<h2>Daftar Harga Pulsa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Operator</th>
        <th>Nominal Pulsa</th>
        <th>Harga (Rp)</th>
        <th>Aksi</th>
    </tr>

    <?php
    $pulsa = [
        ["operator" => "Telkomsel", "nominal" => "5.000", "harga" => 6000],
        ["operator" => "Telkomsel", "nominal" => "10.000", "harga" => 11000],
        ["operator" => "Indosat", "nominal" => "5.000", "harga" => 5500],
        ["operator" => "Indosat", "nominal" => "10.000", "harga" => 10500],
        ["operator" => "XL", "nominal" => "5.000", "harga" => 5800],
        ["operator" => "XL", "nominal" => "10.000", "harga" => 10800],
        ["operator" => "Tri", "nominal" => "5.000", "harga" => 5200],
        ["operator" => "Tri", "nominal" => "10.000", "harga" => 10200],
    ];

    $no = 1;
    foreach ($pulsa as $item) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$item['operator']}</td>
                <td>{$item['nominal']}</td>
                <td>" . number_format($item['harga'], 0, ',', '.') . "</td>
                <td><a href='#' class='button'>Beli</a></td>
              </tr>";
        $no++;
    }
    ?>

</table>

<div class="footer">
    Dibuat oleh: <strong>Rangga Dharma Putra</strong>
</div>

</body>
</html>
