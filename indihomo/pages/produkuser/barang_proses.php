<?php
include '../../db/db.php';
require('fpdf17/fpdf.php');

$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    
    $insert = $db->query('INSERT INTO produk 
                        (kode_produk,nama_produk,keterangan,harga) 
                        VALUES 
                        ("'.$kodeproduk.'","'.$namaproduk.'","'.$keterangan.'","'.$harga.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    
    $update = $db->query('UPDATE produk SET kode_produk="'.$kodeproduk.'",
                                            nama_produk="'.$namaproduk.'",
                                            keterangan="'.$keterangan.'",
                                            harga="'.$harga.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

}else if ($aksi == 'beli') {
    $id = $_GET['id']; // id barang
    $iduser = $_POST['iduser']; // iduser
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $nomorhp = $_POST['nomorhp'];
    $hari = $_POST['hari']; // tanggal pembelian
    $invoice = rand(10000,99999); // masuk nomor invoice
    
    $beli = $db->query('INSERT INTO orderan
                    (invoice,datecreate,id_user,id_barang) 
                    VALUES 
                    ("'.$invoice.'","'.$hari.'","'.$iduser.'","'.$id.'")');

    if ($beli) {
        $pdf = new FPDF('P','mm','A4');

        $pdf->AddPage();

        //set font to arial, bold, 14pt
        $pdf->SetFont('Arial','B',14);
        //Cell(width , height , text , border , end line , [align] )
        $pdf->Cell(130 ,5,'IndiHome',0,0);
        $pdf->Cell(59 ,5,'INVOICE',0,1);//end of line
        //set font to arial, regular, 12pt
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(130 ,5,'Id Barang :'.$id.'',0,0);
        $pdf->Cell(59 ,5,'',0,1);//end of line
        $pdf->Cell(130 ,5,'[City, Country, ZIP]',0,0);
        $pdf->Cell(25 ,5,'Date',0,0);
        $pdf->Cell(34 ,5,$hari,0,1);//end of line
        $pdf->Cell(130 ,5,'Phone [+12345678]',0,0);
        $pdf->Cell(25 ,5,'Invoice #',0,0);
        $pdf->Cell(34 ,5,$invoice,0,1);//end of line
        $pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
        $pdf->Cell(25 ,5,'Customer ID',0,0);
        $pdf->Cell(34 ,5,$kodeproduk,0,1);//end of line
        //make a dummy empty cell as a vertical spacer
        $pdf->Cell(189 ,10,'',0,1);//end of line
        //billing address
        $pdf->Cell(100 ,5,'Bill to',0,1);//end of line
        //add dummy cell at beginning of each line for indentation
        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,$user,0,1);
        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,$email,0,1);
        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,$nomorhp,0,1);
        $pdf->Cell(10 ,5,'',0,0);
        $pdf->Cell(90 ,5,'[Address]',0,1);
        //make a dummy empty cell as a vertical spacer
        $pdf->Cell(189 ,10,'',0,1);//end of line
        //invoice contents
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(130 ,5,'Barang',1,0);
        $pdf->Cell(25 ,5,'Pajak',1,0);
        $pdf->Cell(34 ,5,'Harga',1,1);//end of line
        $pdf->SetFont('Arial','',12);
        //Numbers are right-aligned so we give 'R' after new line parameter
        $pdf->Cell(130 ,5,$namaproduk,1,0);
        $pdf->Cell(25 ,5,'-',1,0);
        $pdf->Cell(34 ,5,$harga,1,1,'R');//end of line
        //summary
        $pdf->Cell(25 ,5,'Total Harga',0,0);
        $pdf->Cell(4 ,5,'Rp',1,0);
        $pdf->Cell(30 ,5,$harga,1,1,'R');//end of line

        $pdf->Output();

        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=produkuser&s=produk"</script>';
    } else {
        echo '<script>alert("Pembelian Gagal");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM produk WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
} else if ($aksi == 'update_password') {
    $id = $_GET['id_user'];
    $password = md5($_POST['password']);
    
    $change = $db->query('UPDATE user SET password="'.$password.'" WHERE id="'.$id.'"');

    if ($change) {
        echo '<script>alert("Password berhasil diganti");location.href = "../../index.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Password gagal diganti");history.go(-1)</script>';
    }
}




