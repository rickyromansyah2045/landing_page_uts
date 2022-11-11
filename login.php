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
        <form name="formPendaftaran" action="dashboard.php" method="post" onsubmit="return RedirectValidate()">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" class="form-control" maxlength="40" minlength="3">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email Aktif" class="form-control">
                <small id="emailHelp" class="form-text text-muted">Email Akan Digunakan Untuk Mengirimkan Notifikasi.</small>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" placeholder="City" class="form-control" autofocus>
                    <option value="">Silahkan Pilih Kota</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="bandung">Bandung</option>
                    <option value="tangerang">Tangerang</option>
                    <option value="yogyakarta">Yogyakarta</option>
                    <option value="cirebon">Cirebon</option>
                    <option value="depok">Depok</option>
                    <option value="bogor">Bogor</option>
                    <option value="bekasi">Bekasi</option>
                    <option value="cianjur">Cianjur</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nomer HP</label>
                <input type="number" name="no_hp" placeholder="example : 087733133913" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<?php 
            include "footer/footer.php";
?>

<script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["username"].value == "") {
                {
                        Swal.fire({
                        icon: 'error',
                        title: 'Username Tidak Boleh Kosong',
                        text: ("Isi ya usernamenya")
                    })
                }
                document.forms["formPendaftaran"]["username"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["email"].value == "") {
                {
                        Swal.fire({
                        icon: 'error',
                        title: 'Email Tidak Boleh Kosong',
                        text: ("Isi ya Emailnya")
                    })
                }
                document.forms["formPendaftaran"]["email"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["city"].value == "") {
                {
                        Swal.fire({
                        icon: 'error',
                        title: 'City Tidak Boleh Kosong',
                        text: ("Isi ya Citynya")
                    })
                }
                document.forms["formPendaftaran"]["city"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["no_hp"].value == "") {
                {
                        Swal.fire({
                        icon: 'error',
                        title: 'Nomer HP Tidak Boleh Kosong',
                        text: ("Isi ya Nomer Hpnya")
                    })
                }
                document.forms["formPendaftaran"]["no_hp"].focus();
                return false;
            }
        }

        function RedirectValidate() {
            let validate = validateForm()
            if (validate == false){
                return false;
            }else{
                {
                    Swal.fire(
                    'Selamat!!!',
                    'Login Berhasil',
                    'success'
                    )
                }
            }
        }

    </script>

</html>
