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
        <div class="card-header"><h5>INCIDENT DETAILS</h5></div>
        <div class="card-body">
            <p>INCIDENT ID: 44203</p>
          <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg> +63 912 345 6789</p>
          <p>Purok: Purok 4</p>
          <p>
            Priority: URGENT Statement: Naay tao nga naga attempt ug sulod sa
            gate.
          </p>
          <p>Reported by: Leonardo Emparador Date: 04-24-21 11:03PM</p>
          <p class="fw-bold"> View Attachments ></p>
          <button type="button" class="btn btn-danger" onclick="location.href = 'confirm_bcpo.php';">CONFIRM INCIDENT</button>
          <button type="button" class="btn btn-warning" onclick="location.href = 'confirm_bcpo_false.php';">FALSE REPORT</button>
          <p></p>
          
          <p class="fw-bold">Messages:</p>
          <p><small>Quick Chat</small></p>
          <button type="button" class="btn btn-light">I'm arrived</button>
          <button type="button" class="btn btn-light">We're roaming</button>
          <button type="button" class="btn btn-light">Ok</button>
          <button type="button" class="btn btn-light">Can you see me?</button>
          <button type="button" class="btn btn-light">Call for backup</button>
          <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
          />
  
          <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"
          ></script>
  
          <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"
          ></script>
         
          <br />
  
    <div class="row">
     <div class="card">
          <div class="card-header text-center">
            <span>Chat Box</span>
                  </div>
                
                  <div class="card-body chat-care">
                    <ul class="chat">
                      <li class="agent clearfix">
                        <span class="chat-img left clearfix mx-2">
                          <img
                            src="u.png"
                            alt="Agent"
                            class="img-circle"
                          />
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header clearfix">
                            <strong class="primary-font">Secretary</strong>
                            <small class="right text-muted">
                              <span class="glyphicon glyphicon-time"></span>50 secs
                              ago</small
                            >
                          </div>
                          <p>On going BCPO to your location.</p>
                        </div>
                      </li>
                      <li class="admin clearfix">
                        <span class="chat-img right clearfix mx-2">
                          <img
                            src="me.png"
                            alt="Admin"
                            class="img-circle"
                          />
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header clearfix">
                            <small class="left text-muted"
                              ><span class="glyphicon glyphicon-time"></span> 1 min
                              ago</small
                            >
                            <strong class="right primary-font">Resident</strong>
                          </div>
                          <p>Okay thank you for quick response</p>
                        </div>
                      </li>
                      <li class="agent clearfix">
                        <span class="chat-img left clearfix mx-2">
                          <img
                            src="u.png"
                            alt="Agent"
                            class="img-circle"
                          />
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header clearfix">
                            <strong class="primary-font">BCPO 1</strong>
                            <small class="right text-muted">
                              <span class="glyphicon glyphicon-time"></span>5 mins
                              ago</small
                            >
                          </div>
                          <p>I'm arrive.</p>
                        </div>
                      </li>
                  <div class="card-footer">
                    <div class="input-group">
                      <input
                        id="btn-input"
                        type="text"
                        class="form-control input-sm"
                        placeholder="Type your message here..."
                      />
                      <span class="input-group-btn">
                        <button class="btn btn-primary" id="btn-chat">Send</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
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