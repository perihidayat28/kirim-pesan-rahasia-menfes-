<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Inter:wght@600&family=Poppins&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>MENFES IFSU</title>
</head>

<body>


    <form action="" method="POST">
        <table>
            <tr>
                <td><img src="https://i.ibb.co/vZxnSN6/peri.jpg" alt="logo-ifsu" loading="lazy"></td>
                <td>
                    <h2 class="judul">MENFES PERI</h2>
                </td>

            </tr>
            <tr>
                <td><label for="name">Untuk :</label></td>
                <td><input type="text" name="untuk" placeholder="Untuk Siapa ?" autocomplete="off" required></td>
            </tr>

            <tr>
                <td><label for="name">Kelas :</label></td>
                <td><input type="text" name="kelas" placeholder="Kelas Berapa dia ? " autocomplete="off" required></td>
            </tr>

            <tr>
                <td><label for="name">Dari :</label></td>
                <td><input type="text" name="dari" placeholder="Dari Siapa nih ?" autocomplete="off" required></td>
            </tr>

            <tr>
                <td><label for="name">Pesan :</label></td>
                <td><input type="text" class="pesan" name="pesan" placeholder="Masukan Pesannya" autocomplete="off" required></td>
            </tr>
            <tr>
                <td> <button type="submit" name="kirim">Kirim</button></td>

            </tr>
        </table>
    </form>



    <?php

                include "koneksi.php";
                if(isset($_POST['kirim']))
                {
                    $untuk       = $_POST['untuk'];
                    $kelas       = $_POST['kelas'];
                    $dari        = $_POST['dari'];
                    $pesan        = $_POST['pesan'];
                  

                    
                    mysqli_query($koneksi, "INSERT INTO hasil VALUES(
                        '$untuk','$kelas', '$dari', '$pesan'
                    )") or die(mysqli_error($koneksi));

                    echo "<div align='center' class='notif'><h5> Sedang Mengirimkan Pesan</h5></div>";
                    echo "<meta http-equiv='refresh' content='1;url=http://localhost/menfes/tampil_hasil.php'>";
                }
        ?>

    <footer>
        Copyright © 2023 Perihidayat
    </footer>


    <script>
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
        }, false);
    </script>

</body>

</html>