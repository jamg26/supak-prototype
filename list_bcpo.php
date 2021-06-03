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
      <div class="card-header"><h5>REPORT LIST</h5></div>
      <button type="button" class="btn btn-info m-3">REFRESH</button>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">PUROK</th>
              <th scope="col">PRIORITY</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-danger"  onclick="location.href = 'details_bcpo.php';">
              <th scope="row">44202</th>
              <td>Purok 13</td>
              <td><p class="text-danger">URGENT</p></td>
            </tr>
          </tbody>
        </table>
        
        </div>
      </div>
    </div>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
  crossorigin="anonymous"
></script>
