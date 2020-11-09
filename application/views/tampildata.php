<!DOCTYPE html>
<html>

<head>
    <title>Sepatu Indah</title>
</head>

<body>

    <h2 style="text-align:center;">CRUD DATA PEMBELI</h2>
    <br />

    <center><a href="<?= site_url('tambah_data'); ?>"> + Tambah Data</a></center>
    <br />
    <br />
    <table border="1" align="center">
        <tr>
            <th>NO</th>
            <th>Nama Pembeli</th>
            <th>Nomor Handphone</th>
            <th>Merk Sepatu</th>
            <th>Harga</th>
            <th>Ukuran</th>
        </tr>
        <tr>
            <?php
            $no = 1;
            foreach ($isi->result() as $row) {
            ?>
                <td><?php echo $no++;  ?></td>
                <td><?php echo $row->nama_pembeli;  ?></td>
                <td><?php echo $row->no_hp;  ?></td>
                <td><?php echo $row->merk_sepatu;  ?></td>
                <td><?php echo $row->harga ?></td>
                <td><?php echo $row->ukuran;  ?></td>
        </tr>
    <?php } ?>
    </table>
</body>

</html>