<html>
    <head>
        <title>Tampil Data Siswa Baru</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Siswa Baru
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama lengkap</th>
                        <th>:</th>
                            <td>
                                <?= $nama; ?>
                            </td>
                </tr>
                <tr>
                    <th>Nomer NIS</th>
                        <td>:</td>
                            <td>
                                <?= $nis; ?>
                            </td>
                </tr>
                <tr>
                    <th>Kode Kelas</th>
                        <th>:</th>
                            <td>
                                <?= $kelas; ?>
                            </td>
                </tr>
                <tr>
                    <th>Tempat Tanggal Lahir</th>
                        <th>:</th>
                            <td>
                                <?= $ttl; ?>
                            </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                        <th>:</th>
                            <td>
                                <?= $jk1; ?>
                            </td>
                            <td>
                                <?= $jk2; ?>
                            </td>
                </tr>
                <tr>
                    <th>Agama</th>
                        <td>:</td>
                            <td>
                                <?= $agama; ?>
                            </td>   
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                    </td>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('Home'); ?>">Home</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>

</html>
