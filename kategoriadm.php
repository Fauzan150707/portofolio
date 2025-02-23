<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('ow.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FFD700; 
            padding: 10px 20px;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #1d471a; /* Dark green */
            font-weight: bold;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }

        .navbar .logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .logout a {
            font-size: 24px;
            color: black;
            text-decoration: none;
            border: 2px solid #dcdcdc;
            padding: 5px;
            border-radius: 8px;
        }

        /* Container styling */
        .container {
            width: 100%;
            margin: 20px 0;
            padding: 20px;
            background-color: #FFD700; /* Slightly transparent background */
            border-radius: 10px;
            position: relative;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow to container */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            background-color: #FFF0F5;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 12px;
        }


        .banner {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .banner img {
            width: 100%;
            max-width: 900px;
            height: auto; /* Keeps the aspect ratio */
            max-height: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        }

        /* Categories section styling */
        .categories {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .category {
            text-align: center;
            background-color: #f2f2f2;
            border-radius: 10px;
            padding: 10px;
            width: 180px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }

        .category:hover {
            transform: translateY(-5px); 
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);         }

        .category img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .category p {
            margin: 10px 0;
            font-size: 18px;
            font-weight: bold;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .actions button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 20px;
        }

       
        .add-category {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .add-category .add {
            font-size: 30px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 50%;
            cursor: pointer;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            .navbar ul li {
                margin-right: 10px;
            }

            .navbar .logo {
                width: 40px;
                height: 40px;
            }

            .category {
                width: 150px;
            }

            .category img {
                width: 120px;
                height: 120px;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                flex-direction: column;
                width: 100%;
            }

            .categories {
                flex-direction: column;
                align-items: center;
            }

            .category {
                width: 100%;
            }

            .add-category {
                justify-content: center;
            }
        }
        .menu {
    list-style-type: none;
    padding: 0;
}

.menu > li {
    position: relative;
    display: inline-block;
    margin-right: 20px;
}

.submenu {
    display: none;
    position: absolute;
    list-style-type: none;
    background-color: white;
    padding: 10px;
    border: 1px solid #ccc;
}

.menu > li:hover .submenu {
    display: block;
}

.submenu li {
    margin: 0;
}

.submenu li a {
    display: block;
    padding: 5px 10px;
    text-decoration: none;
}

.submenu li a:hover {
    background-color: #f0f0f0;
}

    </style>
</head>
<body>
  
    <header style="background-color: #D0D0D0; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center;">
            <img src="/kantin_sehat/img/logo.jpg" alt="Logo" style="width: 50px; height: 50px; border-radius: 50px;">

        </div>
        <nav style="display: flex; align-items: center; margin-left: auto;">
            <a href="../home/home-admin.php" style="margin-right: 18px; text-decoration: none; color: #000000; font-weight: bold;">Home</a>
            <a href="../../pengguna/pengguna.php" style="margin-right: 18px; text-decoration: none; color: #000000; font-weight: bold;">Pengguna</a>
            <a href="../kategori/kategoriadm.php" style="margin-right: 18px; text-decoration: none; color: #000000; font-weight: bold;">Kategori</a>
            <a href="../kategori/makanan-admin.php" style="margin-right: 18px; text-decoration: none; color: #000000; font-weight: bold;">produk</a>
            <a href="../laporan/laporan.php" style="margin-right: 24px; text-decoration: none; color: #000000; font-weight: bold;">Laporan</a>
        </nav>
        <button style=" background: none ; border: black; cursor: pointer;">
            <img src="../../img/logout.svg" alt="logout" style="width: 30px; height: 30px; background: none;">
        </button>
    </header>

    
    <div class="container">
        <h2>Kategori</h2>
        <div class="banner">
            <img src="../../img/2636757.jpg" alt="Healthy Food">
        </div>

        <!-- Plus button in the bottom-right corner -->
        <div class="add-category">
            
        </div>

        <div class="categories">
            <div class="category">
                <img src="../../img/snack.jpg" alt="Snack">
                <p>Snack</p>
                <div class="actions">
                    <button class="edit">&#9998;</button>
                    <button class="delete">&#128465;</button>
                </div>
            </div>
            <div class="category">
                <img src="../../img/minuman.jpg" alt="Minuman">
                <p>Minuman</p>
                <div class="actions">
                    <button class="edit">&#9998;</button>
                    <button class="delete">&#128465;</button>
                </div>
            </div>
            <div class="category">
                <img src="../../img/makanan.jpg" alt="Makanan">
                <p>Makanan</p>
                <div class="actions">
                    <button class="edit">&#9998;</button>
                    <button class="delete">&#128465;</button>
                </div>
            </div>
            <div class="category">
                <img src="../../img/dessert.jpg" alt="Dessert">
                <p>Dessert</p>
                <div class="actions">
                    <button class="edit">&#9998;</button>
                    <button class="delete">&#128465;</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
