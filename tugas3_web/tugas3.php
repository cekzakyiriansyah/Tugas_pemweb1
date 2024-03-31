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
                            //array: sekumpulan data
                            //array numerik dan array asosiatif
                            //perulangan foreach

                            //1. ARRAY NUMERIK
                            $ar_buah = array('pepaya', 'mangga', 'pisang ', 'jeruk');
                            //cetak index ke?
                            echo $ar_buah[1];
                            echo '<hr>';
                            //jummlah total buah
                            $jumlah = count($ar_buah);
                            echo $jumlah;
                            echo '<br>';

                            //lihat hasil sekumpulan data buah dengan foreach
                            foreach ($ar_buah as $isi) {
                                echo $isi . '<br>';
                            }
                            echo '<br>';
                            foreach ($ar_buah as $index => $isi) {
                                echo "$index $isi <br>";
                            }



                            //2. ARRAY ASOSIATIF
                            $ar_sisga = array(10 => 'luluk', 20 => 'angga', 30 => 'adi', 'afif');
                            foreach ($ar_sisga as $index => $isi) {
                                echo "$index $isi <br>";
                            }
                            ?>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                ini hasil Tugas 3
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