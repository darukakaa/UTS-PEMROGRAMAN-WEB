<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Soal no.3</title>
</head>
<body>
    <h2>Soal no.3</h2>
    <h2>Darujata Kakamarda</h2>

    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Ukuran</th>
            <th>Contact</th>
            <th>Warna</th>
        </tr>
<?php

			$json_data = file_get_contents("products.json");
			$products = json_decode($json_data, true);
			if(count($products) != 0){
				foreach ($products as $product) {
					?>
        <tr>
            <td>
                <img src="<?php echo $product['gambar']; ?>" alt="">
            </td>
            <td>
                <?php echo $product['nama']; ?>
            </td>
            <td>
                <?php echo $product['harga']; ?>;
            </td>
            <td>
                <?php echo $product['ukuran']; ?>
            </td>
            <td>
                <?php echo $product['Contact']; ?>
            </td>
            <td>
                <select name="warna" id="warna">
                    <option value="pilih warna">Pilih Warna</option>
                    <option value="merah">Merah</option>
                    <option value="kuning">Kuning</option>
                    <option value="hijau">Hijau</option>
                    <option value="hitam">Hitam</option>
                    <option value="putih">Putih</option>
                </select>
            </td>
        </tr>
        <?php
				}
			}
		?>
    </table>

</body>
</html>