<?php
require 'konek.php';

$idTanaman =$_GET["idTanaman"];

if ( hapus($idTanaman) > 0){
      echo "
      <script>
         alert ('data berhasil dihapus');
         </script>
         ";
   
    }else {
      echo "
        <script>
         alert ('data gagal dihapus');
         </script>
         ";
    }

?>