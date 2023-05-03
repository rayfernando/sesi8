<h3>Tambah Data User</h3>
<form method="POST" action="tbuser.php">
    <input type="hidden" name="opsi" value ="store">
    <div>
        Nama Lengkap
        <input type="text" name="txNAMA">
    </div>
    <div>
        Email
        <input type="email" name="txEMAIL">
    </div>
    <div>
        User Name
        <input type="text" name="txUSERNAME">
    </div>
    <div>
        Password 
        <input type="password" name="txPASS1">
    </div>
    <div>
        Verifikasi Password
        <input type="password" name="txPASS2">
    </div>
    <button type="submit"> Buat Data User </button>
</form>