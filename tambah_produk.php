<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>

    <h3>Tambah Produk</h3>
    <div class="container">
    <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        nama produk :
        <input type="text" name="nama_produk" value="" class="form-control">

        deskripsi :
        <br>
        <textarea name="deskripsi" cols = 147 class = "from-control"></textarea>
        <br>

        harga :
        <input type="number" name="harga" value="" class="form-control">

        foto produk :
        <input type="file" name="foto_produk" value="" class="form-control">
    </div>
    <center>
    <br>
        <input type="submit" name="simpan" value="proses" class="btn btn-primary">
    </center>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html> 