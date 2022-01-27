<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkembangan Covid Di indonesia</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div>
        <canvas id="chartDataCovid"></canvas>
        <script>
            const dataPositif = {
                label: 'Data Positif Covid',
                borderColor: 'red',
                data: [<?php echo $jumlahpositif ?>],
            }
            const dataSembuh = {
                label: 'Data Sembuh  Covid',
                borderColor: 'green',
                data: [<?php echo $jumlahsembuh ?>],
            }
            const datadirawat = {
                label: 'Data Dirawat  Covid',
                borderColor: 'yellow',
                data: [<?php echo $jumlahdirawat ?>],
            }
            const datameninggal = {
                label: 'Data Meninggal',
                borderColor: 'black',
                data: [<?php echo $jumlahmeninggal ?>],
            }

            const labels = [
                <?php echo $labels ?>
            ];
            const data = {
                labels: labels,
                datasets: [dataPositif, dataSembuh, datadirawat, datameninggal],
            };

            const config = {
                type: 'line',
                data: data,
                options: {}
            };


            const myChart = new Chart(
                document.getElementById('chartDataCovid'),
                config
            );
        </script>
    </div>

</body>

</html>