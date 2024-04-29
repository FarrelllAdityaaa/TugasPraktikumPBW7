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
    <title>Form Pengisian KRS</title>
</head>

<!-- <style>
    body{
        background-image: url(Gambarr/WALL.jpg);
        /* background-position: contain; */
    }
</style> -->

<body>
    <div>
    <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
        
        ?>
            <div class="alert alert-success my-4 mx-4"><?= $message ?></div>
        <?php
        }
        ?>     
    </div>

    <div class="container border-primary border-bottom border-2 mb-5 w-50 ">
        <h2 class="text-center py-2 fs-4 fw-bold ">SELAMAT DATANG DI FORM PENGISIAN KRS</h2>
    </div>


    <div class="card-body mb-5 ">
        <form action="krs-proccess.php" method="post" class=" px-5 mx-5">
            <div class="container border border-primary  border-3 rounded-4 w-50 justify-content-center bg-light">
                <div>
                    <h3 class="my-3">Data Mahasiswa</h3>
                </div>
                <div class="mb-3">
                    <label for="npm" class=" form-label ">NPM</label>
                    <input type="text" name="npm" id="npm" class=" form-control " required>
                </div>
                <div class="mb-3">
                    <label for="nama" class=" form-label ">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class=" form-control " required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-select" required>
                        <option disabled selected hidden>Pilih Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class=" form-control " required></textarea>
                </div>

                <div>
                    <h3 class="my-3">Data Mata Kuliah</h3>
                </div>
                <div class="mb-3">
                    <label for="kodemk" class=" form-label ">Kode Mata kuliah</label>
                    <input type="text" name="kodemk" id="kodemk" class=" form-control " required>
                </div>
                <div class="mb-3">
                    <label for="namamk" class=" form-label ">Nama Mata Kuliah</label>
                    <input type="text" name="namamk" id="namamk" class=" form-control " required>
                </div>
                <div class="mb-3">
                    <label for="jumlahsks" class="form-label ">Jumlah SKS</label>
                    <input type="number" name="jumlahsks" id="jumlahsks" class="form-control" required style="width: 15%;">
                </div>
                <div class="mb-3">
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                    <a href="krs.php" class="btn btn-warning ">Cek KRS</a>
                </div>
                
            </div>
        </form>
    </div>

</body>

</html>