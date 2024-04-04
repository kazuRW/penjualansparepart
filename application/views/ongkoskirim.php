<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cek Ongkos Kirim RMZParts</title>

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
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Cek Ongkir</h2>
                    <form method="post" action="<?php echo site_url('Ongkoskirim/cekongkir')?>">
                        <div class="row row-space">
                            <div class="row-2">
                                <div class="input-group">
                                    <label class="label">Pilih Asal Kota (Toko Kami Berada Di Bekasi)</label>
                                    <select class="form-control" name="asal">
                                    <option>Pilih Kota</option>
                                    <?php if ($kota) : ?>
                                        <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                                        <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
                                        <?php endforeach?>
                                    <?php endif?>
                                </select>
                                </div>
                            </div>
                            <div class="row-2">
                                <div class="input-group">
                                    <label class="label">Pilih Kota Tujuan (Destinasi kamu)</label>
                                    <select class="form-control" name="tujuan">
                                        <option value="">Pilih Kota</option>
                                        <?php if ($kota) : ?>
                                            <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                                            <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
                                            <?php endforeach?>
                                        <?php endif?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="row-2">
                                <div class="input-group">
                                <label>Berat Barang (gram)</label>
                                <p>(Untuk informasi berat barang silahkan cek pada informasi produk pada barang yang dituju)</p><br>
                                <input type="text" name="berat" class="form-control" placeholder="silahkan masukan berat barang disini (cantumkan hanya angka)">
                                </div>
                            </div>
                        <div class="input-group">
                            <label class="label">Ekspedisi</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select class="form-control" name="kurir">
                                    <option disabled="disabled" selected="selected">Silahkan Pilih Ekspedisi Pengiriman</option>
                                    <option value="jne">JNE</option>
                                    <option value="pos">POS</option>
                                    <option value="tiki">TIKI</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            <div class="form-group">
                        </div>
                        <div class="p-t-15"><br>
                            <input type="submit" value="cek ongkir" class="btn btn--radius-2 btn--blue" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets4/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets4/vendor/select2/select2.min.js"></script>
    <script src="assets4/vendor/datepicker/moment.min.js"></script>
    <script src="assets4/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets4/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkos Kirim RMZParts</title>
    <link rel="stylesheet" href="assets3/css/bootstrap.min.css"> -->
      <!-- style css -->
      <!-- <link rel="stylesheet" href="assets3/css/style.css"> -->
      <!-- Responsive-->
      <!-- <link rel="stylesheet" href="assets3/css/responsive.css"> -->
      <!-- fevicon -->
      <!-- <link rel="icon" href="assets3/images/logor4.png" type="image/gif" /> -->
      <!-- Scrollbar Custom CSS -->
      <!-- <link rel="stylesheet" href="assets3/css/jquery.mCustomScrollbar.min.css"> -->
      <!-- Tweaks for older IEs-->
      <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->
      <!-- owl stylesheets --> 
      <!-- <link rel="stylesheet" href="assets3/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets3/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
      
<!-- </head>
<body>
    <br><br><br><br>
    <div class="container"></div>
    <h2>Silahkan Cek Ongkos Kirim</h2>
    <form method="post" action="<?php echo site_url('Ongkoskirim/cekongkir')?>">
        <div class="form-group ">
        <label>Pilih Asal Kota (Toko Kami berada di Bekasi)</label>
        <select class="form-control" name="asal">
            <option>Pilih Kota</option>
            <?php if ($kota) : ?>
                <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
                <?php endforeach?>
            <?php endif?>
        </select>
        </div>
        <div class="form-group">
        <label>Pilih Tujuan Kota</label>
        <select class="form-control" name="tujuan">
            <option value="">Pilih Kota</option>
            <?php if ($kota) : ?>
                <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
                <?php endforeach?>
            <?php endif?>
        </select>
        </div>
        <div class="form-group">
        <label>Berat Barang (gram)</label>
        <p>(Untuk informasi berat barang silahkan cek pada informasi produk pada barang yang dituju)</p>
        <input type="text" name="berat" class="form-control" placeholder="silahkan masukan berat barang">
        </select>
        </div>
        <div class="form-group">
        <label>Pilih Ekspedisi</label>
        <select class="form-control" name="kurir">
            <option value="">Pilih Ekspedisi</option>
            <option value="jne">JNE</option>
            <option value="pos">POS</option>
            <option value="tiki">TIKI</option>
        </select>
        </div>
        <div class="form-group">
        <input type="submit" value="cek ongkir" class="btn btn-primary" name="submit">
        </div>
    </form>
</select>
    </form>
</body>
</html> -->

