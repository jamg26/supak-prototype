<html>

<head>
    <title>SUPAK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
</head>

<body>
    <?php require('header.php') ?>

    <html>

    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Violations', 'Crimes'],
                ['Jan', 56, 4],
                ['Feb', 27, 3],
                ['Mar', 102, 6],
                ['Apr', 13, 6],
                ['May', 57, 8],
                ['Jun', 35, 15],
                ['Jul', 44, 10],
                ['Aug', 21, 2],
                ['Sep', 0, 5],
                ['Oct', 75, 7],
                ['Nov', 45, 9],
                ['Dec', 65, 11]
            ]);

            var options = {
                title: 'Supak Summary Report',
                // curveType: 'function',
                legend: {
                    position: 'bottom'
                },
                animation: {
                    duration: 2000,
                    easing: 'out',
                    startup: true
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
        </script>
    </head>

    <body>
        <div id="curve_chart" style="width: 100%; height: 500px"></div>
    </body>

    </html>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>