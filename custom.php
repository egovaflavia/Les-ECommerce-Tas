<div class="span9">
    <div class="well well-small">
        <h1> Roman Indah UKM</h1>
        <hr class="soft" />
        <h2>Custome Tas dengan Design Sendiri</h2>
        <form enctype="multipart/form-data" method="post" class="bs-docs-example form-horizontal">
            <div class="control-group">
                <label class="control-label">Upload Custome Tas</label>
                <div class="controls">
                    <input required autofocus type="file" name="gambar">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button class="btn btn-primary" name="kirim">Kirim</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['kirim'])) {
            $user         = $_POST['user'];
            $pass         = $_POST['pass'];
            $email         = $_POST['email'];
            $no_telp         = $_POST['no_telp'];
            $alamat         = $_POST['alamat'];

            $kirim = $koneksi->query("INSERT INTO  `pelanggan` (   `username`, 
                                                                    `password`, 
                                                                    `email`, 
                                                                    `no_telp`, 
                                                                    `alamat`) 
                                                                    VALUES(
                                                                    '$user', 
                                                                    '$pass', 
                                                                    '$email', 
                                                                    '$no_telp', 
                                                                    '$alamat') ");

            if ($daftar) {
                echo "
                    <script>alert('Berhasil update, Silahkan login');window.location='index.php'</script>;
                    ";
            } else {
                echo "
                    <script>alert('Gagal update');window.location='index.php?page=daftar'</script>;
                    ";
            }
        }
        ?>
    </div>
</div>