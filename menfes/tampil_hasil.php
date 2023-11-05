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
        <title>Confes Orang lain</title>
    </head>

    <body>

        <table class="table-data-buku" border="0">
            <tr>
                <th class="no">No</th>
                <th>Untuk</th>
                <th>Kelas</th>
                <th>Dari</th>
                <th>Pesan</th>

            </tr>

            <?php 
          include "koneksi.php";
          $no = 1;
        $tampil = mysqli_query($koneksi, "SELECT * FROM hasil");
          while($data=mysqli_fetch_array($tampil))
        {
        ?>
            <tr>
            <td class="no"> <?php echo $no++; ?> </td> 
                <td>
                    <?php echo $data['untuk']; ?>
                </td>
                <td>
                    <?php echo $data['kelas']; ?>
                </td>
                <td>
                    <?php echo $data['dari']; ?>
                </td>
                <td>
                    <?php echo $data['pesan']; ?>
                </td>

            </tr>

            <?php } ?>
        </table>


        <center><a href="index.php" class="lihat">balik ke awal kuy</a></center>

        <script>
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
</script>

    </body>

</html>