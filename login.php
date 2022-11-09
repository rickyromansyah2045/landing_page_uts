<!DOCTYPE html>
<html lang="en">
<head>

     <!-- Link Css -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon.jpg"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon.jpg"/>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon.jpg"/>
    <title>Login</title>

</head>
<body>

    <?php 
        include "sidebar/nav1.php";
        include "sidebar/nav2.php";
    ?>

<div class="container">
        <form name="formPendaftaran" action="daftar.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Nama lengkap" class="form-control" required maxlength="40" minlength="3">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email Aktif" class="form-control">
                <small id="emailHelp" class="form-text text-muted">Email Akan Digunakan Untuk Mengirimkan Notifikasi.</small>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                        <option value="0">Pilih Jurusan</option>
                        <option value="1">Jurusan Informatika</option>
                        <option value="2">Jurusan Teknik Komputer Jaringan</option>
                        <option value="3">Jurusan Multimedia</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["nama"].value == "") {
                alert("Nama Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["nama"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["email"].value == "") {
                alert("Email Tidak Boleh Kosong");
                document.forms["formPendaftaran"]["email"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["jurusan"].selectedIndex < 1) {
                alert("Pilih Jurusan.");
                document.forms["formPendaftaran"]["jurusan"].focus();
                return false;
            }
        }
    </script>
</body>
</html>
