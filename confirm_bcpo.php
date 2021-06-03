<html>
  <head>
<title>SUPAK</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php require('header.php') ?>
    <div class="card">
      <div class="card-header"><h5>CONFIRMATION</h5></div>
      <div class="card-body">
        <p class="fw-bold">Incident ID: 44203</p>
        <p class="fw-bold">Type:</p>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault1"
          />
          <label class="form-check-label" for="flexRadioDefault1">
            Violation
          </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault2"
            checked
          />
          <label class="form-check-label" for="flexRadioDefault2">
            Crime
          </label>
        </div>
        <p></p>

        <p class="fw-bold">Remarks:</p>
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="defaultCheck1"
          />
          <label class="form-check-label" for="defaultCheck1">
            Suspect/Violator has been arrested
          </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="defaultCheck2"
          />
          <label class="form-check-label" for="defaultCheck2">
            Suspect/Violator get away
          </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="defaultCheck2"
          />
          <label class="form-check-label" for="defaultCheck2">
            There is casualties
          </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="defaultCheck2"
          />
          <label class="form-check-label" for="defaultCheck2">
            Reported area is clear
          </label>
        </div>
      </div>
        <textarea
          class="form-control m-2 w-auto"
          id="exampleFormControlTextarea1"
          rows="3"
          type="text"
          placeholder="Other remarks..."
          aria-label="default input example"
        ></textarea>
      <button class="btn btn-lg btn-success m-2" onclick="location.href = 'incident_prof.php';">SUBMIT</button>
    </div>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
  crossorigin="anonymous"
></script>
