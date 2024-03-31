<?php
include_once 'header.php';
include_once 'sidebar.php'

?>
<!-- main.php -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ini halaman Tugas</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tugas 2

                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">


                            <?php
                            $ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "TE" => "Teknik Elektro", "BD" => "Bisnis Digital"];



                            ?>





                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


                            <h1>Form Registrasi IT CLUB Data Science</h1>
                            <form method="POST" action="#">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adn"></i>
                                                </div>
                                            </div>
                                            <input id="nim" name="nim" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-address-book"></i>
                                                </div>
                                            </div>
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jenis kelamin" id="jenis kelamin_0" type="radio" class="custom-control-input" value="Laki-Laki">
                                            <label for="jenis kelamin_0" class="custom-control-label">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jenis kelamin" id="jenis kelamin_1" type="radio" class="custom-control-input" value="Perempuan">
                                            <label for="jenis kelamin_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="skill" class="col-4 col-form-label">Program Studi</label>
                                    <div class="col-8">
                                        <select id="prodi" name="prodi" class="custom-select">
                                            <!-- <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="TE">Teknik Elektro</option> -->
                                            <?php
                                            foreach ($ar_prodi as $index_prodi => $value_prodi) {
                                            ?>
                                                <option value="<?= $index_prodi ?>"><?= $value_prodi ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Skill Web & Programming</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="Skill[]" id="Skill_0" type="checkbox" class="custom-control-input" value="HTML">
                                            <label for="Skill_0" class="custom-control-label">HTML</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="Skill[]" id="Skill_1" type="checkbox" class="custom-control-input" value="CSS">
                                            <label for="Skill_1" class="custom-control-label">CSS</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="Skill[]" id="Skill_2" type="checkbox" class="custom-control-input" value="JavaScript">
                                            <label for="Skill_2" class="custom-control-label">JavaScript</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="Skill[]" id="Skill_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                                            <label for="Skill_3" class="custom-control-label">RWD Bootstrap</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="Skill[]" id="Skill_4" type="checkbox" class="custom-control-input" value="PHP">
                                            <label for="Skill_4" class="custom-control-label">PHP</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="Skill[]" id="Skill_5" type="checkbox" class="custom-control-input" value="Python">
                                            <label for="Skill_5" class="custom-control-label">Python</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="Skill[]" id="Skill_6" type="checkbox" class="custom-control-input" value="Java">
                                            <label for="Skill_6" class="custom-control-label">Java</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Domisili" class="col-4 col-form-label">Tempat Domisili</label>
                                    <div class="col-8">
                                        <select id="Domisili" name="Domisili" class="custom-select">
                                            <option value="Jakarta ">Jakarta</option>
                                            <option value="Depok">Depok</option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Tangerang">Tangerang</option>
                                            <option value="Bekasi">Bekasi</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-gg-circle"></i>
                                                </div>
                                            </div>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>


                            <?php

                            $ar_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];

                            $nim = $_POST["nim"];
                            $nama = $_POST["nama"];
                            $jenis_kelamin = $_POST["jenis_kelamin"];
                            $index_prodi = $_POST['prodi'];
                            $skill = isset($_POST['Skill']) ? $_POST['Skill'] : [];
                            $domisili = $_POST["Domisili"];
                            $email = $_POST['email'];

                            // Hitung skor skill
                            $total_skor = 0;
                            foreach ($skill as $selected_skill) {
                                $total_skor += isset($ar_skill[$selected_skill]) ? $ar_skill[$selected_skill] : 0;
                            }

                            // Tentukan kategori skill
                            $kategori_skill = "";
                            if ($total_skor >= 100) {
                                $kategori_skill = "Sangat Baik";
                            } elseif ($total_skor >= 60) {
                                $kategori_skill = "Baik";
                            } elseif ($total_skor >= 40) {
                                $kategori_skill = "Cukup";
                            } elseif ($total_skor > 0) {
                                $kategori_skill = "Kurang";
                            } else {
                                $kategori_skill = "Tidak Memadai";
                            }

                            // Output hasil registrasi
                            echo "<h2>Hasil Registrasi:</h2>";
                            echo "NIM: $nim<br>";
                            echo "Nama: $nama<br>";
                            echo "Jenis Kelamin: $jenis_kelamin<br>";
                            echo "Program Studi: $index_prodi <br>";
                            echo "Skill: " . implode(", ", $skill) . "<br>";
                            echo "Total Skor Skill: $total_skor<br>";
                            echo "Kategori Skill: $kategori_skill<br>";
                            echo "Domisili: $domisili<br>";
                            echo "Email:: $email<br>";
                            ?>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            ini hasil Tugas 2
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';


?>