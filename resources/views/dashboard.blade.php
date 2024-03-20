@extends('template')
<?php
$ambil =  mysqli_query("SELECT * FROM postingan") or die (mysql_error());
?>
@section('main')
<div>
    <tr>
    <h1>PT Wes Makmur </h1>
    </tr>
    <th></th>
<tr><p>Wes Makmur merupakan perusahaan jamu rumahan</p></tr>

    <div class="row pt-4 gx-4 gy-4">
       <?php
        while ($ngisi =  mysqli_fetch_array($ambil)) {
            ?>
          <div class="col-md-4">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $ngisi['judulpostingan'] ?> </h5>
                  <p class="card-text" style="text-align: justify;"><?php echo maximum_kata($ngisi['isi'], 30) ?> ....</p><br>
                  <a href="profil_wisata.php?look=<?php echo $ngisi['id_wisata']?>" class="btn btn-primary col-3">Lihat Detail</a>
                </div>
              </div>
          </div>
        <?php
            }
        ?>

      </div>
@endsection
