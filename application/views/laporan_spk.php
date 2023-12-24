<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <!-- <link href="<?php echo base_url() ?>assets/styles.css" rel="stylesheet" /> -->
        <link rel="icon" type="img" href="assets/img/orion.jpeg"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <style>
        table {
            font-size: 14px;

        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        thead {
            font-size: 16px;
        }

        .judul h3,
        h2,
        p {
            text-align: center;
            margin: 5px 5 5px 5;
        }

        .form-inline img {

            display: inline-block;
        }

        h2 {
            font-size: 30px;
        }

        .kop tr td {
            text-align: center;
            border-collapse: collapse;
        }

        .gambar {
            margin-right: 10px;
        }

        .isi tr td {
            padding-left: 5px;
            padding-right: 5px;
        }

        .ttd {
            text-align: left;
            display: inline-block;
            float: right;
        }
    </style>

    <script>
        window.load = print_d();

        function print_d() {
            window.print();
        }
        window.onfocus = function() {
            window.close();
        }
    </script>

</head>
<body>
    <main>


    <div class="container-fluid">
         <center>
        <table class="kop">
            <tr>
                <td rowspan="6"><img src="<?= base_url() ?>assets/oowl.png" height="80" alt="" class="gambar"><br><br>GA-FM1.1-1</td>
            </tr>
            <tr>
                <td style="font-size: 25px; font-weight: bold;">PT. ORION OWL INDONESIA</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold;">BERITA ACARA PELAKSANA</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold;">( B A P )</td>
            </tr>
        </table>
    </center>

    <center>
        <?php foreach ($data as $row): ?>
        <p style="font-size: 16px; font-weight: bold;">No BAP:<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/ BAP-GA / BJM /<?= $row->nomor_spk?>/20<?= date('Y');?>    </p>
        <?php endforeach; ?>
    </center>        
    <center>
        <p style="font-size: 22px; font-weight: bold;">BAB I - JUDUL</p>
    </center>
    <center>
        <div style="width: 455px; height: 30px; padding: 20px; border: 1px solid #000; margin: 10px;">
        </div>
    </center>
    <center>
        <p style="font-size: 22px; font-weight: bold;">BAB II - DESKRIPSI</p>
    </center>
    <div style="margin-left:100px;">
    <table style="border: none; margin: 2px;">
        <?php foreach ($data as $row): ?>
            <tr>
                <td style="border: none;">Yang bertanda tangan dibawah ini</td>
                <td style="border: none;">:</td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Nama Lengkap</td>
                <td style="border: none;">: <?= $row->nama?></td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Jabatan</td>
                <td style="border: none;">: <?= $row->jabatan?></td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Departemen</td>
                <td style="border: none;">: <?= $row->departemen     ?></td><!-- Leave this cell empty for user input -->
            </tr>
            <?php endforeach; ?>
        </table>
        <br><br>
        Dengan ini menerangkan, 
    <table style="border: none; margin: 2px;">
        <?php foreach ($data as $row): ?>
            <tr>
                <td style="border: none;">Nama Vendor</td>
                <td style="border: none;">: <?= $row->nama_vendor?></td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Alamat Vendor</td>
                <td style="border: none;">: <?= $row->alamat_vendor?></td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Rincian Biaya Anggaran</td>
                <td style="border: none;">: <?= $row->rincian_biaya?></td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Cara Pembayaran</td>
                <td style="border: none;">: <?= $row->cara_pembayaran?></td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Jangka Waktu</td>
                <td style="border: none;">: <?= $row->jangka_waktu?></td><!-- Leave this cell empty for user input -->
            </tr>
            <?php endforeach; ?>
        </table>
        <br><br>
         <center>
        <p style="font-size: 22px; font-weight: bold;">BAB III - PENGESAHAN</p>
    </center>
    <table style="border: none; margin: 2px;">
        <?php foreach ($data as $row): ?>
            <tr>
                <td style="border: none;">Dibuat di</td>
                <td style="border: none;">: <?= $row->tempat?></td><!-- Leave this cell empty for user input -->
            </tr>
            <tr>
                <td style="border: none;">Pada Tanggal</td>
                <td style="border: none;">: <?= $row->tanggal?></td><!-- Leave this cell empty for user input -->
            </tr>
            <?php endforeach; ?>
        </table>
<div style="margin-left:100px;">
    
        <table style="border: none; margin-top: 20px;">
    <tr>
        <td style="border: none; text-align: center;">Dibuat Oleh,</td>
        <td style="border: none; text-align: center;">Mengetahui,</td>
        <td style="border: none; text-align: center;">Menyetujui,</td>
    </tr>
    <tr>
        <td style="border: none; text-align: center;">Admin / Staff / Officer</td>
        <td style="border: none; text-align: center;">Supervisor / Manager</td>
        <td style="border: none; text-align: center;">Kepala Cabang</td>
    </tr>
    <tr>
        <td style="border: none; text-align: center; padding-top: 40px;">
            (_____________)
        </td>
        <td style="border: none; text-align: center; padding-top: 40px;">
            (_____________)
        </td>
        <td style="border: none; text-align: center; padding-top: 40px;">
            (_____________)
        </td>
    </tr>
</table>


    </div>
    </div>
    </div>
