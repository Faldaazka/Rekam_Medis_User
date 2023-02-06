<div class="section-title">
          <h2>ANTRIAN PASIEN</h2>
          <p></p>
        </div>
    
        <div>
            <table border="1" align="center" width="100%">
    
                <tr>
                    <th align="center">Departemen</th>
                    <th align="center">ID Pasien</th>
                    <th align="center">nama_pasien</th>
                    <th align="center">Jenis Kelamin</th>
                    <th align="center">TGL Lahir</th>
                    <th colspan="2">Aksi</th>
                </tr>

            <?php
            include "database/koneksi.php";

            $ambildata = mysqli_query($connect,"select * from antrian");
            while($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                    <td>$tampil[departemen]</td>
                    <td>$tampil[id_pasien]</td>
                    <td>$tampil[nama_pasien]</td>
                    <td>$tampil[jenis_kelamin]</td>
                    <td>$tampil[tgl_lahir]</td>
                    <td>$tampil[alamat]</td>
                </tr>";
            }
            ?>
            </table>