<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2>Program Menghitung Nilai Mata Kuliah</h2>
    <form action="khsjson.php" method="post">
        <div class="mb-3">
            <label for="npm" class="form-label">NPM:</label>
            <input type="text" class="form-control" id="npm" name="npm" required />
        </div>
        <div class="mb-3">
            <label for="nnama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nnama" name="nnama" required />
        </div>
        <div class="mb-3">
            <label for="njekel" class="form-label">Jenis Kelamin:</label>
            <input type="text" class="form-control" id="njekel" name="njekel" required />
        </div>
        <div class="mb-3">
            <label for="njurusan" class="form-label">Jurusan:</label>
            <input type="text" class="form-control" id="njurusan" name="njurusan" required />
        </div>
        <div class="mb-3">
            <label for="ttugas" class="form-label">Masukan Input Tugas:</label>
            <input type="text" class="form-control" id="ttugas" name="ttugas" required />
        </div>
        <div class="mb-3">
            <label for="tuts" class="form-label">Masukan Input UTS:</label>
            <input type="text" class="form-control" id="tuts" name="tuts" required />
        </div>
        <div class="mb-3">
            <label for="tuas" class="form-label">Masukan Input UAS:</label>
            <input type="text" class="form-control" id="tuas" name="tuas" required />
        </div>
        <button type="submit" class="btn btn-primary" name="bok">OK</button>
        <button type="reset" class="btn btn-secondary">Batal</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>