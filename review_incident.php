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
            <h5>RECENT ASSIGNED INCIDENT</h5>
        </div>
        <button type="button" class="btn btn-info">REFRESH</button>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">PUROK</th>
                        <th scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <th scope="row">44203</th>
                        <td>Purok 14</td>
                        <td>Interrogation</td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">44210</th>
                        <td>Purok 18</td>
                        <td>On-going</td>
                    </tr>
                </tbody>
            </table>
            <p class="fw-bold">SELECTED: 44203</p>
            <p class="fw-bold">TYPE : Crime</p>
            <p class="fw-bold">STATUS : Interrogation</p>
            <p class="fw-bold">REMARKS :</p>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked />
                <label class="form-check-label" for="defaultCheck1">
                    Casualties
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked />
                <label class="form-check-label" for="defaultCheck1">
                    Arrested
                </label>
            </div>
            <p></p>

        </div>
        <button type="button" class="btn btn-success btn-lg"
            onclick="location.href = 'publish_staff.php';">APPROVE</button>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>