<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Transaksi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Transaksi</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Detail Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                $transaksi = file_get_contents('transaksi.txt');
                $transaksi = explode("\n", $transaksi);
                foreach ($transaksi as $data) {
                    if (!empty($data)) {
                        echo '<tr><td>' . htmlspecialchars($data) . '</td></tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="index.html" class="btn btn-secondary btn-block">Kembali</a>
    </div>
</body>
</html>