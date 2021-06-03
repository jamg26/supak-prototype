<html>

<head>
    <title>SUPAK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
</head>

<body>
    <?php require('header.php') ?>

    <div class="card">
        <div class="card-header">
            <h5>COLLECTIONS</h5>
        </div>
        <div class="card-body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">VIOLATION</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <th scope="row">2289</th>
                        <td>Kort Makaguba</td>
                        <td>Mass Gathering</td>
                        <td>500.00</td>
                        <td>11/02/2020</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="table-info">
                        <th scope="row">2290</th>
                        <td>Kevin Makaluya</td>
                        <td>No Facemask</td>
                        <td>250.00</td>
                        <td>11/02/2020</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="table-info">
                        <th scope="row">2291</th>
                        <td>Juvert Makabugto</td>
                        <td>False Report</td>
                        <td>300.00</td>
                        <td>11/02/2020</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p>TOTAL DAILY COLLECTIONS : 1050</p>
            <p>TOTAL MONTHLY COLLECTIONS : 1050</p>
            <button class="btn btn-lg btn-success">PRINT</button>
        </div>
    </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>