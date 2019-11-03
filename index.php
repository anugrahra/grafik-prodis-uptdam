<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">

    <title>GRAFIK PRODIS UPTDAM</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center text-center mt-2 mb-3">
        <h2>GRAFIK PRODIS UPTD AM CIMAHI</h2>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-md-10">
          <canvas id="myChart"></canvas>
        </div>
      </div>

      <?php
      require_once "app/db.php";
      require_once "app/function.php";

      $no = 1;
      $data_prodis = tampilkan_data_prodis();
      ?>

      <div class="row justify-content-center">
        <div class="col-md-10">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Bulan</th>
              <th scope="col">Produksi</th>
              <th scope="col">Distribusi</th>
            </tr>
          </thead>
          <tbody>
          <?php while($prodis = mysqli_fetch_assoc($data_prodis)):?>
            <tr>
              <th scope="row"><?=$no++;?></th>
              <td><?=$prodis['bulan'];?></td>
              <td><?=$prodis['jml_produksi'];?></td>
              <td><?=$prodis['jml_distribusi'];?></td>
            </tr>
          <?php endwhile;?>
          </tbody>
        </table>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="public/js/chart.js"></script>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap/bootstrap.js"></script>
    <!-- <script src="public/js/script.js"></script> -->
    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var grafikProdis = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September'],
              datasets:
                [
                  {
                    label: 'Produksi',
                    data: [
                      <?=jumlah_produksi_per_bulan("Januari");?>,
                      <?=jumlah_produksi_per_bulan("Februari");?>,
                      <?=jumlah_produksi_per_bulan("Maret");?>,
                      <?=jumlah_produksi_per_bulan("April");?>,
                      <?=jumlah_produksi_per_bulan("Mei");?>,
                      <?=jumlah_produksi_per_bulan("Juni");?>,
                      <?=jumlah_produksi_per_bulan("Juli");?>,
                      <?=jumlah_produksi_per_bulan("Agustus");?>,
                      <?=jumlah_produksi_per_bulan("September");?>
                    ],
                    backgroundColor: 'rgba(0, 0, 0, 0)',
                    borderColor: [
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)'
                    ],
                    pointBorderColor: [
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)'
                    ],
                    pointBackgroundColor: [
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)',
                      'rgba(232, 126, 4, 1)'
                    ],
                    borderWidth: 3
                  },
                  {
                    label: 'Distribusi',
                    data: [
                      <?=jumlah_distribusi_per_bulan("Januari");?>,
                      <?=jumlah_distribusi_per_bulan("Februari");?>,
                      <?=jumlah_distribusi_per_bulan("Maret");?>,
                      <?=jumlah_distribusi_per_bulan("April");?>,
                      <?=jumlah_distribusi_per_bulan("Mei");?>,
                      <?=jumlah_distribusi_per_bulan("Juni");?>,
                      <?=jumlah_distribusi_per_bulan("Juli");?>,
                      <?=jumlah_distribusi_per_bulan("Agustus");?>,
                      <?=jumlah_distribusi_per_bulan("September");?>
                    ],
                    backgroundColor: 'rgba(0, 0, 0, 0)',
                    borderColor: [
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)'
                    ],
                    pointBorderColor: [
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)'
                    ],
                    pointBackgroundColor: [
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)',
                      'rgba(44, 130, 201, 1)'
                    ],
                    borderWidth: 3
                  }
                ]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
    </script>
  </body>
</html>