<html>
    <head>
        <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cek Ongkos Kirim RMZParts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <!-- Icons font CSS-->
    <link href="assets4/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets4/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="assets3/images/logor4.png" type="image/gif" />

    <!-- Vendor CSS-->
    <link href="assets4/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets4/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets4/css/main.css" rel="stylesheet" media="all">
  
    </head>
    <body>
        <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-3 bg-white rounded">
                    <div class="row">
                        <div class="row-md-6">
                            <h1 class="text-uppercase">Hasil Cek Ongkir</h1>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Pengiriman Dari:</span><span class="ml-1"></span></div>
                            <?php echo $hasil->rajaongkir->origin_details->city_name?>,
                            <?php echo $hasil->rajaongkir->origin_details->province ?>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Tujuan Ke :</span><span class="ml-1"></span></div>
                            <?php echo $hasil->rajaongkir->destination_details->city_name?>,
                            <?php echo $hasil->rajaongkir->destination_details->province ?>
                            <div class="billed"><span class="font-weight-bold text-uppercase">Menggunakan Jasa Kurir:</span><span class="ml-1"></span></div>
                            <?php echo $hasil->rajaongkir->results[0]->name ?>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Berat Paket</th>
                                        <th>Biaya Pengiriman</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo ($hasil->rajaongkir->query->weight/1000) ?>kg,</td>
                                        <td><?php foreach ($hasil->rajaongkir->results[0]->costs as $biaya):?><br>
                                        <?php echo $biaya->service?>: Rp.<?php echo number_format($biaya->cost[0]->value)?><br> (<?php echo $biaya->cost[0]->etd ?> hari)
                                        <?php endforeach?>
                                        <?php echo $hasil->rajaongkir->results[0]->name ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row-md-6 text-left mt-3">
                            <h6 class="text-danger mb-0 text-right">web maker by RMZParts</h6></div>
            </div>
        </div>
    </div>
        </div>
    </body>
</html>

