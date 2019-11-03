var ctx = document.getElementById('myChart').getContext('2d');
var grafikProdis = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September'],
        datasets: [
            {
              label: 'Produksi',
              data: [
                <?php 
                $jumlah_teknik = mysqli_query($koneksi,"select * from mahasiswa where fakultas='teknik'");
                echo mysqli_num_rows($jumlah_teknik);
                ?>
              ],
              backgroundColor: 'rgba(0, 0, 0, 0)',
              borderColor: [
                'rgba(232, 126, 4, 1)'
              ],
              pointBorderColor: [
                'rgba(232, 126, 4, 1)',
                'rgba(232, 126, 4, 1)',
                'rgba(232, 126, 4, 1)'
              ],
              pointBackgroundColor: [
                'rgba(232, 126, 4, 1)',
                'rgba(232, 126, 4, 1)',
                'rgba(232, 126, 4, 1)'
              ],
              borderWidth: 3
          }
        // ,
        //   {
        //     label: 'Distribusi',
        //     data: [12, 20, 3, 4, 5, 7, 40, 100, 45,],
        //     backgroundColor: 'rgba(0, 0, 0, 0)',
        //     borderColor: [
        //       'rgba(44, 130, 201, 1)'
        //     ],
        //     pointBorderColor: [
        //       'rgba(44, 130, 201, 1)',
        //       'rgba(44, 130, 201, 1)',
        //       'rgba(44, 130, 201, 1)'
        //     ],
        //     pointBackgroundColor: [
        //       'rgba(44, 130, 201, 1)',
        //       'rgba(44, 130, 201, 1)',
        //       'rgba(44, 130, 201, 1)'
        //     ],
        //     borderWidth: 3
        // }
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