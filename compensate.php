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
            <h5>SANCTIONS</h5>
        </div>
        <div class="card-body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">BARANGAY</th>
                        <th scope="col">VIOLATION</th>
                        <th scope="col">SANCTION</th>
                        <th scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <th scope="row">2289</th>
                        <td>Kort Makaguba</td>
                        <td>Santo Niño</td>
                        <td>Mass Gathering</td>
                        <td>Compensation</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p>ID : 2289</p>
            <p>VIOLATION : Mass Gathering</p>
            <p>LEVEL OF OFFENSE : 1st</p>
            <p>TYPE OF SANCTION : Compensation</p>
            <p>AMOUNT :500</p>
            <button class="btn btn-lg btn-success"> Mark as Paid</button>
            <button class="btn btn-lg btn-success">Print</button>
        </div>
    </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>