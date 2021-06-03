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
      <div class="alert alert-danger" role="alert" >
       If you want to see the violation profile click  <a href="violation_prof.php">here!</a>
      </div>
        <div class="card-header"><h5>CRIME PROFILE</h5></div>
        <div class="card-body">
            <p>INCIDENT ID: 44203</p>
          <p>Type : Crime</p>
          <p>Purok : Purok 4</p>
          <p>Priority :  <a class="text-danger">URGENT</a></p>
          <p>
            Priority : URGENT Statement: Naay tao nga naga attempt ug sulod sa
            gate.
          </p>
          <p>Reported by : Leonardo Emparador</p>
          <p> Date : 04-24-21 11:03PM</p>
          <p class="fw-bold"> View Attachments ></p>
          <p class="fw-bolder">Suspects</p>   
           <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">Add Criminal</button>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">BARANGAY</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-info">
                <th scope="row">2242</th>
                <td>Juswa Makatigbas</td>
                <td>Santa Marina</td>
              </tr>
            </tbody>
          </table>
          <p class="fw-bolder">Victims</p> 
           <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">Add Victims</button>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">BARANGAY</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-info">
                <th scope="row">4153</th>
                <td>Leonardo Emperador</td>
                <td>Binugao Cental II</td>
              </tr>
            </tbody>
          </table>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
  crossorigin="anonymous"
></script>
