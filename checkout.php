<?php 

    session_start();

    include "koneksitoko.php";

    $cart=@$_SESSION['cart'];

    if(count($cart)>0){

        $lama_pinjam=5; //satuan hari

        $tgl=date('Y-m-d');

        mysqli_query($conn,"insert into transaksi (id_pelanggan,id_petugas,tgl_transaksi) value('".$_SESSION['id_pelanggan']."','1','".$tgl."')");

         $id=mysqli_insert_id($conn);

        foreach ($cart as $key_produk => $val_produk) {

            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_produk,qty,subtotal) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$val_produk['subtotal']."')");

        }

        unset($_SESSION['cart']);

        echo '<script>alert("Transaksi Berhasil");location.href="histori_pembelian.php"</script>';

    }

?>