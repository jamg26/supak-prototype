<html>
  <head>
    <title>SUPAK</title>
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

    <div class="card m-3">
      <div class="card-header"><h5>REPORT LIST</h5></div>
      <button type="button" class="btn btn-info">REFRESH</button>
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
            <tr onclick="location.href = 'report_details.php';">
              <th scope="row">44201</th>
              <td>Purok 1</td>
              <td>Normal</td>
            </tr>
            <tr
              class="table-danger"
              onclick="location.href = 'report_details.php';"
            >
              <th scope="row">44202</th>
              <td>Purok 13</td>
              <td><p class="text-danger">URGENT</p></td>
            </tr>
            <tr onclick="location.href = 'report_details.php';">
              <th scope="row">44203</th>
              <td>Purok 4</td>
              <td>Normal</td>
            </tr>
            <tr
              class="table-danger"
              onclick="location.href = 'report_details.php';"
            >
              <th scope="row">44204</th>
              <td>Purok 4</td>
              <td><p class="text-danger">URGENT</p></td>
            </tr>
            <tr onclick="location.href = 'report_details.php';">
              <th scope="row">44205</th>
              <td>Purok 2</td>
              <td>Normal</td>
            </tr>
          </tbody>
        </table>
        <p class="fst-italic fw-bold">SELECTED: 44202</p>
        <p class="card-text">
          <span class="text-success"
            ><svg
              width="80"
              height="50"
              fill="currentColor"
              class="bi bi-dot"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"
              /></svg></span
          >Online Officers (3)
        </p>
        <select class="form-select" aria-label="Default select example">
          <option selected>BCPO 1</option>
          <option value="1">BCPO 2</option>
          <option value="2">BCPO 3</option>
          <option value="3">BCPO 4</option>
        </select>
      </div>
      <button
        class="btn btn-lg btn-success m-3"
        onclick="location.href = 'list_bcpo.php';"
      >
        ASSIGN
      </button>
    </div>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
  crossorigin="anonymous"
></script>
