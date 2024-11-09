<?php
// Tangkap variabel dari form
$npm = $_POST["npm"];
$nama = $_POST["nnama"];
$jekel = $_POST["njekel"];
$jurusan = $_POST["njurusan"];
$vta = $_POST["ttugas"];
$vtb = $_POST["tuts"];
$vtc = $_POST["tuas"];
$vtd = ($vta * 0.2) + ($vtb * 0.3) + ($vtc * 0.5);

//Tampilkan datanya
echo "NPM       : $npm <br>";
echo "Nama       : $nama <br>";
echo "jenis Kelamin : $jekel <br>";
echo "jurusan    : $jurusan <br>";
echo " Nilai Tugas       : $vta <br>";
echo "Nilai UTS       : $vtb <br>";
echo "Nilai UAS     : $vtc <br>";
echo "Total NILAI      : $vtd <br>";

function cekKelulusan($vtd) {
    if ($vtd >= 90) {
        echo "Anda Mendapatkan Nilai A<br>";
        return "Lulus";
    } elseif ($vtd >= 80) {
        echo "Anda Mendapatkan Nilai B<br>";
        return "Lulus";
    } elseif ($vtd >= 60) {
        echo "Anda Mendapatkan Nilai C<br>";
        return "Lulus";
    } else {
        echo "Anda Mendapatkan Nilai D<br>";
        return "Tidak Lulus";
    }
}

// File json yang akan dibaca
$file = "krs2.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Data array baru
$data[] = array(

    'npm' => "$npm",
    'name' => "$nama",
    'gender' => "$jekel",
    'jurusan' => "$jurusan",
    'tugas' => "$vta",
    'uts' => "$vtb",
    'uas' => "$vtc",
    'nilai' => "$vtd",
    'status' => cekKelulusan($vtd)


);

$konten = json_encode($data, JSON_PRETTY_PRINT);

//menyimpan konten di file
file_put_contents($file, $konten);


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Data Mahasiswa</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Menampilkan data
            foreach ($data as $key => $value) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($value['npm']) . "</td>";
                echo "<td>" . htmlspecialchars($value['name']) . "</td>";
                echo "<td>" . htmlspecialchars($value['gender']) . "</td>";
                echo "<td>" . htmlspecialchars($value['jurusan']) . "</td>";
                echo "<td>" . htmlspecialchars($value['tugas']) . "</td>";
                echo "<td>" . htmlspecialchars($value['uts']) . "</td>";
                echo "<td>" . htmlspecialchars($value['uas']) . "</td>";
                echo "<td>" . htmlspecialchars($value['nilai']) . "</td>";
                echo "<td>" . htmlspecialchars($value['status']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Sertakan Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>