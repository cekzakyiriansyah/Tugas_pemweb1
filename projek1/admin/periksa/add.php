<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';

if (isset($_POST["submit"])) {
    $_tanggal = $_POST['tanggal'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi'];
    $_tensi = $_POST['tensi'];
    $_keterangan = $_POST['keterangan'];
    $_pasien_id = $_POST['pasien_id'];
    $_dokter_id = $_POST['dokter_id'];

    $data = [$_tanggal, $_berat, $_tinggi, $_tensi, $_keterangan, $_pasien_id, $_dokter_id];
    $sql = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    echo "<script>window.location.href = 'index.php';</script>";
}

// Query untuk mendapatkan daftar pasien dan paramedik
$sqlPasien = "SELECT * FROM pasien";
$stmtPasien = $dbh->query($sqlPasien);
$pasienList = $stmtPasien->fetchAll(PDO::FETCH_ASSOC);

$sqlDokter = "SELECT * FROM paramedik";
$stmtDokter = $dbh->query($sqlDokter);
$dokterList = $stmtDokter->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Periksa</h3>
                        </div>
                        <div class="card-body">
                            <h2 class="text-center">Form Periksa</h2>
                            <form action="add.php" method="POST">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat" class="col-4 col-form-label">Berat</label>
                                    <div class="col-8">
                                        <input id="berat" name="berat" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi" class="col-4 col-form-label">Tinggi</label>
                                    <div class="col-8">
                                        <input id="tinggi" name="tinggi" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tensi" class="col-4 col-form-label">Tensi</label>
                                    <div class="col-8">
                                        <input id="tensi" name="tensi" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                                    <div class="col-8">
                                        <input id="keterangan" name="keterangan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pasien_id" class="col-4 col-form-label">Pasien ID</label>
                                    <div class="col-8">
                                        <select id="pasien_id" name="pasien_id" class="form-control">
                                            <?php foreach ($pasienList as $pasien) { ?>
                                                <option value="<?= $pasien['id'] ?>"><?= $pasien['nama'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dokter_id" class="col-4 col-form-label">Dokter</label>
                                    <div class="col-8">
                                        <select id="dokter_id" name="dokter_id" class="form-control">
                                            <?php foreach ($dokterList as $dokter) { ?>
                                                <option value="<?= $dokter['id'] ?>"><?= $dokter['nama'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once 'footer.php';
?>