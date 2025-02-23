<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Makanan dan Minuman</title>
</head>

<body style="margin: 0; font-family: Arial, sans-serif; background-color: #FFD700;">
    <!-- Navbar -->
    <header style="background-color: #D0D0D0; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center;">
            <img src="/kantin_sehat/img/logo.jpg" alt="Logo" style="width: 50px; height: 50px; border-radius: 50px;">

        </div>
        <nav style="display: flex; align-items: center; margin-left: auto;">
            <a href="../home/home-admin.php" style="margin-right: 18px; text-decoration: none; color: #000000; font-weight: bold;">Home</a>
            <a href="../../pengguna/pengguna.php" style="margin-right: 18px; text-decoration: none; color: #000000; font-weight: bold;">Pengguna</a>
            <a href="../kategori/kategoriadm.php" style="margin-right: 18px; text-decoration: none; color: #000000; font-weight: bold;">Kategori</a>
            <a href="../laporan/laporan.php" style="margin-right: 24px; text-decoration: none; color: #000000; font-weight: bold;">Laporan</a>
        </nav>
        <button style=" background: none ; border: black; cursor: pointer;">
            <a href="../../login/landing.html" style="background: none; border: none; cursor: pointer;">
            <img src="../../img/logout.svg" alt="logout" style="width: 30px; height: 30px; background: none;">
        </button>
    </header>

    <section style="padding: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div style="background-color: #FFFFFF; padding: 10px 20px; border-radius: 17px; border: 2px solid #4A5F27; display: inline-block;">
                <h2 style="color: #4A5F27; font-size: 24px; margin: 0;">Makanan</h2>
            </div>
            <a href="../produk/tambah-produk.php"><button style="background-color: #D9D9D9; color: #686161; border: none; padding: 10px; border-radius: 5px; cursor: pointer; font-size: 16px;">Tambah Produk +</button></a>
        </div>

        <!-- Makanan Products -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <?php
            include '../../koneksi.php';

            // Query untuk produk dengan kategori Makanan (id_kategori = 1 misalnya)
            $sql_makanan = "SELECT * FROM tbl_produk WHERE fid_kategori = 1";  // Anggap 1 adalah kategori Makanan
            $result_makanan = mysqli_query($conn, $sql_makanan);
            while ($row = mysqli_fetch_assoc($result_makanan)) {
            ?>
                <div style="background-color: #FFFFFF; padding: 20px; text-align: left; border-radius: 10px;">
                    <img src="../../img/<?= $row['gambar']; ?>" alt="" style="width: 100%; height: 300px; border-radius: 10px;">
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['nama_produk']; ?></p>
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['harga']; ?></p>
                    <a href="../produk/edit-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Edit</button></a>
                    <a href="../produk/delete-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Delete</button></a>
                </div>
            <?php
            }
            ?>
        </div>

        <!-- Minuman Products -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; margin-top: 40px;">
            <div style="background-color: #FFFFFF; padding: 10px 20px; border-radius: 17px; border: 2px solid #4A5F27; display: inline-block;">
                <h2 style="color: #4A5F27; font-size: 24px; margin: 0;">Minuman</h2>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <?php
            // Query untuk produk dengan kategori Minuman (id_kategori = 2 misalnya)
            $sql_minuman = "SELECT * FROM tbl_produk WHERE fid_kategori = 2";  // Anggap 2 adalah kategori Minuman
            $result_minuman = mysqli_query($conn, $sql_minuman);
            while ($row = mysqli_fetch_assoc($result_minuman)) {
            ?>
                <div style="background-color: #FFFFFF; padding: 20px; text-align: left; border-radius: 10px;">
                    <img src="../../img/<?= $row['gambar']; ?>" alt="" style="width: 100%; height: 300px; border-radius: 10px;">
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['nama_produk']; ?></p>
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['harga']; ?></p>
                    <a href="../produk/edit-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Edit</button></a>
                    <a href="../produk/delete-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Delete</button></a>
                </div>
            <?php
            }
            ?>
        </div>

        <!-- Dessert Products -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; margin-top: 40px;">
            <div style="background-color: #FFFFFF; padding: 10px 20px; border-radius: 17px; border: 2px solid #4A5F27; display: inline-block;">
                <h2 style="color: #4A5F27; font-size: 24px; margin: 0;">snack</h2>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <?php
            // Query untuk produk dengan kategori Dessert (id_kategori = 3 misalnya)
            $sql_dessert = "SELECT * FROM tbl_produk WHERE fid_kategori = 3";  // Anggap 3 adalah kategori Dessert
            $result_dessert = mysqli_query($conn, $sql_dessert);
            while ($row = mysqli_fetch_assoc($result_dessert)) {
            ?>
                <div style="background-color: #FFFFFF; padding: 20px; text-align: left; border-radius: 10px;">
                    <img src="../../img/<?= $row['gambar']; ?>" alt="" style="width: 100%; height: 300px; border-radius: 10px;">
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['nama_produk']; ?></p>
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['harga']; ?></p>
                    <a href="../produk/edit-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Edit</button></a>
                    <a href="../produk/delete-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Delete</button></a>
                </div>
            <?php
            }
            ?>
        </div>

        <!-- Snack Products -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; margin-top: 40px;">
            <div style="background-color: #FFFFFF; padding: 10px 20px; border-radius: 17px; border: 2px solid #4A5F27; display: inline-block;">
                <h2 style="color: #4A5F27; font-size: 24px; margin: 0;">desert</h2>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <?php
            // Query untuk produk dengan kategori Snack (id_kategori = 4 misalnya)
            $sql_snack = "SELECT * FROM tbl_produk WHERE fid_kategori = 4";  // Anggap 4 adalah kategori Snack
            $result_snack = mysqli_query($conn, $sql_snack);
            while ($row = mysqli_fetch_assoc($result_snack)) {
            ?>
                <div style="background-color: #FFFFFF; padding: 20px; text-align: left; border-radius: 10px;">
                    <img src="../../img/<?= $row['gambar']; ?>" alt="" style="width: 100%; height: 300px; border-radius: 10px;">
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['nama_produk']; ?></p>
                    <p style="margin: 10px 0; font-size: 18px; color: #333;"><?= $row['harga']; ?></p>
                    <a href="../produk/edit-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Edit</button></a>
                    <a href="../produk/delete-produk.php?id=<?= $row['id'] ?>"><button style="background-color: #7F8DE9; color: black; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Delete</button></a>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</body>

</html>
