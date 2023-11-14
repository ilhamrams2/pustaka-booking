<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body style="background-color: #f1f1f1;">
    <div class="navbar bg-dark">
        <div class="container">
            <h4 class="m-0 py-2 text-white">D-LEMAS</h4>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto py-1">
            <a href="/" class=""><-Kembali</a>
            </div>
            <div class="col-lg-10 mx-auto px-5 py-3" style="background-color: white !important; border-radius:10px;">
                <form action="<?= site_url('/siswa/store') ?>" method="post">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-center text-uppercase">Tambah Data Siswa</h4>
                            <hr>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nis">NIS:</label>
                                <input type="text" name="nis" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Kelas:</label>
                                <input type="text" name="kelas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir:</label>
                                <input type="text" name="tempat_lahir" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin:</label><br>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir:</label>
                                <input type="date" name="tgl_lahir" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea name="alamat" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="agama">Agama:</label>
                                <select name="agama" class="form-control" required>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </div>


                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>