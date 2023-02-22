<?php
$mahasiswa1 = [
    'id'=>'1', 
    'NIM'=>110122228,
    'UTS'=>98,
    'UAS'=>90,
    'TUGAS'=>85,
];

$mahasiswa2 = [
    'id'=>'2', 
    'NIM'=>110122123,
    'UTS'=>94,
    'UAS'=>97,
    'TUGAS'=>75,
];

$mahasiswa3 = [
    'id'=>'3', 
    'NIM'=>111222228,
    'UTS'=>75,
    'UAS'=>56,
    'TUGAS'=>78,
];

$mahasiswa4 = [
    'id'=>'4', 
    'NIM'=>110122338,
    'UTS'=>100,
    'UAS'=>90,
    'TUGAS'=>75,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>    
        <table class="table table-dark table-striped">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id']?></td>
                <td><?= $nilai['NIM']?></td>
                <td><?= $nilai['UTS']?></td>
                <td><?= $nilai['UAS']?></td>
                <td><?= $nilai['TUGAS']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>