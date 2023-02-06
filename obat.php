<div class="section-title">
          <h2>DAFTAR OBAT</h2>
          <p></p>
        </div>
    
        <div>
            <table border="1" align="center" width="100%">
    
                <tr>
                    <th align="center">ID Obat</th>
                    <th align="center">Nama Obat</th>
                    <th align="center">Jumlah Obat</th>
                    <th colspan="2">Aksi</th>
                </tr>

            <?php
            include "database/koneksi.php";

            $ambildata = mysqli_query($connect,"select * from pasien");
            while($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                    <td>$tampil[id_obat]</td>
                    <td>$tampil[nama_obat]</td>
                    <td>$tampil[jumlah]</td>
                    
                </tr>";
            }
            ?>
            </table>