<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Hasil Tabel</title>
</head>

<body>
    <?php
    if (isset($_POST['simpan'])) {
        $nim = $_POST['nim'];
        $prodi = $_POST['opsi'];
        $nilai_tugas = $_POST['ntugas'];
        $nilai_uts = $_POST['nuts'];
        $nilai_uas = $_POST['nuas'];

        $nakhir = (0.4 * $ntugas) + (0.3 * $nuts) + (0.3 * $nuas);
        if ($nakhir > 84) {
            $status = 'Lulus';
			$huruf = 'A';
        } elseif ($nakhir > 70) {
            $status = 'Lulus';
			$huruf = 'B';
        } elseif ($nakhir > 60) {
            $status = 'lulus';
			$huruf = 'C';
        } elseif ($nakhir > 50) {
            $status = 'Tidak Lulus';
			$huruf = 'D';
        } else {
            $status = "Tidak Lulus";
        }

        $selected_catatan = array();
        if (!empty($_POST['catatan'])) {
            foreach ($_POST['catatan'] as $catatan) {
                array_push($selected_catatan, $catatan);
            }
        }
    ?>
        <table border=3>
            <thead>
                <tr>
                    <th>Program Studi</th>
                    <th>NIM</th>
                    <th>Nilai Akhir</th>
                    <th>Status</th>
                    <th>Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $prodi ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $nakhir ?></td>
                    <td><?= $status ?></td>
                    <td>
                        <?php
                        foreach ($selected_catatan as $catatan_data) {
                            echo $catatan_data . "<br>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

    <?php
    }
    ?>
</body>

</html>