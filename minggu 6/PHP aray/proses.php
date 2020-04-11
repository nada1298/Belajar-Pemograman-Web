<?php
	 if (isset($_POST["simpan"])) {
        $nim = $_POST["nim"];
        $opsi = $_POST["opsi"];
        $nugas = $_POST["ntugas"];
        $nuts = $_POST["nuts"];
        $nuas = $_POST["nuas"];

        $nakhir = (0.4 * $nugas) + (0.3 * $nuts) + (0.3 * $nuas);
        if ($nakhir > 84) {
            $status = 'Lulus';
			$huruf = 'A';
        } else if ($nakhir > 70) {
            $status = 'Lulus';
			$huruf = 'B';
        } else if ($nakhir > 60) {
            $status = 'Lulus';
			$huruf = 'C';
        } else if ($nakhir > 50) {
            $status = 'Tidak Lulus';
			$huruf = 'E';
        } else {
            $status = "Tidak Lulus";
			$huruf = '-';
        }

        $selected_catatan = "";
        if (!empty($_POST['catatan'])) {
            foreach ($_POST['catatan'] as $catatan) {
                $selected_catatan .= $catatan . " <br> ";
            }
        }

        echo "
        <table border=3>
            <thead>
                <tr>
                    <th>Program Studi</th>
                    <th>NIM</th>
                    <th>Nilai Akhir</th>
                    <th>STATUS</th>
                    <th>Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$opsi</td>
                    <td>$nim</td>
                    <td>$nakhir | $huruf</td>
                    <td>$status</td>
                    <td>$selected_catatan</td>
                </tr>
            </tbody>
        </table>
        ";
    }
?>