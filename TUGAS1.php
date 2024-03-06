<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <style>
        #proses {
            background-color: #28a745;
            border-color: #28a745;
        }

        .harga-title {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <h1>Belanja Online</h1>
    <hr>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 order-md-1">
                <form action="" method="post">
                    <div class="form-row align-items-center mb-3">
                        <div class="col-auto">
                            <label for="customer" class="col-form-label">
                                <h5>Customer :</h5>
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="customer" name="customer" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="produk" class="form-label">
                            <h5>Produk Pilihan :</h5>
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="tv" value="tv" required>
                            <label class="form-check-label" for="tv">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="kulkas" value="kulkas" required>
                            <label class="form-check-label" for="kulkas">Kulkas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="mesin_cuci" value="mesin_cuci" required>
                            <label class="form-check-label" for="mesin_cuci">Mesin Cuci</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">
                            <h5>Jumlah Beli :</h5>
                        </label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="proses" id="proses">Kirim</button>
                </form>
            </div>
            <div class="col-md-6 order-md-2">
                <table class="table">
                    <thead class="harga-title">
                        <tr>
                            <th>
                                <h5>Daftar Harga</h5>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV : Rp 4.200.000</td>

                        </tr>
                        <tr>
                            <td>Kulkas : Rp 3.100.000</td>

                        </tr>
                        <tr>
                            <td>Mesin Cuci : Rp 3.800.000</td>

                        </tr>
                    </tbody>
                    <tfoot class="harga-title">
                        <th>
                            <h5>Harga Dapat Berubah Suatu Saat</h5>
                        </th>
                    </tfoot>
                </table>
            </div>
        </div>
        <hr>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proses'])) {

            $customer = $_POST["customer"];
            $selectedProduk = isset($_POST['produk']) ? $_POST['produk'] : '';
            $jumlah = $_POST["jumlah"];


            $productPrices = [
                'tv' => 4200000,
                'kulkas' => 3100000,
                'mesin_cuci' => 3800000
            ];

            $price = isset($productPrices[$selectedProduk]) ? $productPrices[$selectedProduk] : 0;


            $total = $jumlah * $price;


            echo "<h4>Hasil Belanja:</h4>";
            echo "<p>Customer: $customer</p>";
            echo "<p>Produk Pilihan: $selectedProduk</p>";
            echo "<p>Jumlah Beli: $jumlah</p>";
            echo "<p>Total: " . number_format($total, 0, ',', '.') . "</p>";
        }
        ?>
    </div>

</body>

</html>