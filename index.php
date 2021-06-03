<html>

<head>
    <title>SUPAK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
</head>

<body>
    <?php require('header.php') ?>
    <div>
        <div class="card">
            <div class="card-header">
                <h5>NEWS FEEDS</h5>
            </div>
            <div class="card-body">
                <img src="staff.png" class="rounded-circle" alt="Cinque Terre" width="50" />
                <b>Barangay Staff</b>
                <small class="text-muted"><i>just now</i></small>
                <br /><br />
                <h5 class="card-text">Incident ID: 44203</h5>
                <h5 class="card-text">Type: Crime</h5>
                <h5 class="card-text">Purok: 4</h5>
                <p></p>
                <h5 class="card-text">Attachements</h5>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path
                            d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z" />
                    </svg>
                    00-VIDEO.MP4
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path
                            d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z" />
                    </svg>
                    02-IMG.JPG
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path
                            d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z" />
                    </svg>
                    00-VOICE.ACC
                </p>

                <img src="cim.png" class="img-thumbnail" alt="..." />
                <h5 class="card-text">
                    He is Juswa Makatigbas, commited trespassing and attempted robbery
                    incident happen in Purok 4.
                </h5>
            </div>
            <textarea class="form-control m-3 w-auto"
                placeholder="Kung naa kaya mag tambay na BCPO kada purok para sure jud ma less ang krimen"
                id="exampleFormControlTextarea1" rows="3"></textarea>
            <button class="btn btn-lg btn-success m-3" onclick="location.href = 'reading_feedback.php';">
                GIVE FEEDBACK
            </button>
        </div>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <img src="sec.png" class="rounded-circle" alt="Cinque Terre" width="50" />
                <b>Barangay Secretary</b>
                <small class="text-muted"><i>25 mins ago</i></small>
                <br /><br />
                <h5 class="card-text">For upcoming Fiest</h5>
                <p></p>
                <h5 class="card-text">
                    This is what you are all waiting for❗️❗️❗️ Calling the attention
                    of all ML players in Barangay Binugao. Come and join our 1st Mobile
                    Legends One Day Tournament *Knockout system* this coming May 21,
                    2021. Be ready and form your team. Open only for 16 teams so FIRST
                    COME FIRST SERVE. Registration starts today until May 19, 2021. To
                    submit your entries, you can message either SK Chairperson Quennie
                    Tubog, SK Kagawad Marvin Albaracin, or SK Secretary Meridette Joyz
                    Monteza. Thank you and Mabuhay!
                </h5>
                <div><img src="ml.jpg" alt="" /></div>
            </div>
            <textarea class="form-control m-3 w-auto" placeholder="" id="exampleFormControlTextarea1"
                rows="3"></textarea>
            <button class="btn btn-lg btn-success m-3" onclick="location.href = 'reading_feedback.php';">
                GIVE FEEDBACK
            </button>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>