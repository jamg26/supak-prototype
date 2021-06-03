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
            <h5>VIOLATION PROFILE</h5>
        </div>
        <div class="card-body">
            <p>VIOLATION ID : 2289</p>
            <p>Type : Violation</p>
            <p>Purok : Purok 3</p>
            <p>Priority : <a class="text-danger">URGENT</a></p>
            <p>
                Priority : URGENT Statement: Not wearing facemask going to sari-sari store.
            </p>
            <p>Reported by : Gabrel Makadako</p>
            <p> Date: 02-24-21 10:10 AM</p>
            <p class="fw-bold"> View Attachments ></p>
            <p class="fw-bolder">Suspects</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button">Add Violator</button>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">BARANGAY</th>
                        <th scope="col">VIOLATION</th>
                        <th scope="col">SANCTION</th>
                        <th scope="col">FALSE REPORT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info" onclick="location.href = 'compensate.php';">
                        <th scope="row">2289</th>
                        <td>Kort Makaguba</td>
                        <td>Santo Niño</td>
                        <td>Mass Gathering</td>
                        <td>Compensation</td>
                        <td>false</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="table-info" onclick="location.href = 'violation_staff.php';">
                        <th scope="row">2248</th>
                        <td>AU Genesis</td>
                        <td>Brgy. Lumboy</td>
                        <td>No Facemasks</td>
                        <td>Community Service</td>
                        <td>false</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="table-info" onclick="location.href = 'violation_staff.php';">
                        <th scope="row">2249</th>
                        <td>Juvert Makabugto</td>
                        <td>Brgy. Lumboy</td>
                        <td>No Facemasks</td>
                        <td>Community Service</td>
                        <td class="text-danger">true</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>