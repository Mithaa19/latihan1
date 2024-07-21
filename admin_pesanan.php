<h3>Pemesanan</h3>
            <form action="proses_pesan.php" method="post">
                <table>
                    <tr>
                        <td width="130">Nama</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td width="130">Nomor</td>
                        <td><input type="text" name="nomor" required></td>
                    </tr>
                    <tr>
                        <td width="130">Produk</td>
                        <td><input type="text" name="produk" required></td>
                    </tr>
                    <tr>
                        <td width="130">Jumlah</td>
                        <td><input type="number" name="jumlah" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="kirim" name="proses"></td>
                    </tr>
                </table>
            </form>