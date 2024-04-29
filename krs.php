<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>KRS Mahasiswa</title>
<style>
    span{
        color: red;
    }
</style>
<body>
    <div class="container mx-5">
        <div class=" d-flex justify-content-end me-5 my-3">
            <a href="index.php" class="btn btn-primary">Go Back</a>
        </div>
    </div>
    
    
    <div class=" d-flex  border-0 justify-content-center ">
    
        <table class=" table-striped table" style="width:90%">
            <thead>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>Keterangan</th>
            </thead>
            <tbody class=" table-group-divider ">
                <?php
                include "konekdb.php";
                $no = 1;
                $namamhs = mysqli_query($koneksi, "SELECT krs.id, mahasiswa.nama, matakuliah.namamk , matakuliah.jumlah_sks
                FROM krs 
                INNER JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm
                INNER JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk");
                foreach ($namamhs as $data) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['namamk'] ?></td>
                    <td><span><?= $data['nama'] ?></span> Mengambil Mata Kuliah <span><?= $data['namamk'] ?></span> (<?= $data['jumlah_sks'] ?> SKS)</td>
                </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
    
</body>
</html>