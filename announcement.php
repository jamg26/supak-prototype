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
        <div class="card-header"><h5>Announcement</h5></div>
        <div class="card-body">
                <h5 class="card-text">Content</h5>
                </div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="What is your annoucement?"></textarea>
               <br>
                <input type="file" />
                <button class="btn btn-lg btn-success mt-2" onclick="location.href = 'index.php';">POST</button>
        </div>
      </div>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
  crossorigin="anonymous"
></script>
