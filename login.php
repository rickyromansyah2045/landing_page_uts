<!DOCTYPE html>
<html lang="en">

    <?php 
        include "header/header.php";
    ?>

<body>

    <?php 
        include "sidebar/nav1.php";
        include "sidebar/nav2.php";
    ?>

<div class="container mt-5">
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
                <label>City</label>
                <input type="text" name="city" placeholder="City" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nomer HP</label>
                <input type="number" name="no_hp" placeholder="example : 087733133913" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php 
            include "footer/footer.php"
    ?>
</body>
</html>
