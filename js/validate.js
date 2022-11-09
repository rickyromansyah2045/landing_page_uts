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
    if (document.forms["formPendaftaran"]["city"].value == "") {
        alert("City Tidak Boleh Kosong");
        document.forms["formPendaftaran"]["city"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["no_hp"].value == "") {
        alert("Nomer HP Tidak Boleh Kosong");
        document.forms["formPendaftaran"]["no_hp"].focus();
        return false;
    }
}