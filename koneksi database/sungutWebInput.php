<?php
  include "sungutWebKoneksi.php";

  $sesuaikan  = $_REQUEST['atribut nama'];

  $mysqli  = "INSERT INTO 'nama table' ('atribut name') VALUES ('Sesuaikan variabel dengan name')";
  $result  = mysqli_query($conn, $mysqli);


  if ($result) {
    ?>
        <script language="JavaScript">
        alert('Successfully');
        document.location='jika berhasil input akan diarahkan kemana';
        </script>
    <?php
    }
    else {
    echo "Failed :(";
    }

  mysqli_close($conn);
?>