<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
}
else {
  $loggedin = false;
}

include 'dbconnect.php';
include 'login.php';

    $sql = "SELECT Email from users WHERE (Username='$username')";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peer chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="website4.css">
</head>
<body>

<!-- Navbar -->

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo192.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Solution</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Plans & Prices</a>
              </li>
            </ul>
            <div>
                <button class="btn sales">Contact Sales</button>';
                
                if(!$loggedin){
                  echo '<a href="Sign_up.php" class="free"><button class="btn sign"><strong>Sign Up Free</strong></button></a>';
                }
                else{
                  echo '<a href="logout.php" class="free"><button class="btn sign"><strong>Log Out</strong></button></a>';
                }
                
                
                ?>
                </div>
              </div>
            </div>
          </nav>
    
          <div class="defination-box">
            <div class="text-box">
              <h1>Don’t let distance get in your way!</h1>
              <p>It’s easy – simply create a link and share with people you want to join the call. No sign ups required. If you don’t have Skype installed, that's ok, you can enjoy it on your browser. Invite up to 99 people (plus you) and enjoy free video calls using Skype.</p>
              <p>Best of all, your SkypeLink doesn’t expire and can be used anytime!</p>
              <ul>
                <li>No Downloads</li>
                <li>Call up to 24 Hours</li>
                  </ul>
                </div>
                <div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title center">Create a video call with one click!</h5>
                      <p class="card-text center">No downloads required</p>
                    </div>
                    <img src="https://secure.skypeassets.com/apollo/0.0.0/meetnowwidget/1.0.150/images/PrepareMeetingHeader.svg" height="170rem" class="card-img-top" alt="...">
                    <!-- <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
              </div> -->
              <form action="host_meeting.php" class="card-body center">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Name Your Meeting">
                <p>Put the name of your meeting and get your unique link to send it to others you want to meet with.</p>
                <button type="submit" class="btn btn-primary center">Create Video Call</button>
                <a href="join_meeting.php" class="card-link">Join with link</a>
              </form>
            </div>
              </div>
            </div>
            
            <div class="what-we-offer">
              <div class="offer-img">
                <img src="http://www.teqlease.com/wp-content/uploads/2015/10/bigstock-Business-people-working-in-off-61710530.jpg" alt="" height="300rem">
              </div>
              <div class="offer-text">
                <h2>Unified communication and collaboration platform</h2>
                <h5>Make meaningful connections with meetings, team chat, whiteboard, phone, and more in one offering.</h5>
                <div class="offer-bullets">
                  <div class="offer-bullet">
                    <div><img src="https://file-paa.zoom.us/TWAE5vIoSyqnbwQ9r_H3zg/MS4yLoT3qtycfaKkPD_rMUSRdEwmZpFWI4d5R-gmGf12svDk/cc8733ef-6b23-4d15-acbb-dbc6217901d1.svg" alt="">virtual meetings</div>
                    <div><img src="https://file-paa.zoom.us/d3dF9rgFTLS9E2TmZvCw1w/MS4yLuTLqT2yvfZZoo_hIn2MBli66KifOKbdCSsvmgxx84kL/e7989e66-118d-4304-9efe-963a9b8a99fb.svg" alt="">Screen Share</div>
                  </div>
                  <div class="offer-bullet">
                    <div><img src="https://file-paa.zoom.us/W0L51lMrQtWShqOeU10A2w/MS4yLkbW6YpwLWY7OEieFZe6irJUk7UZocX___gXO2FjPQiS/48f8ddec-ee22-4b98-9671-6256a830e110.svg" alt="">Team Chat</div>
                    <div><img src="https://file-paa.zoom.us/9xN0-ByKRoGGM9sw2hWE9Q/MS4yLqXRbO-x95zSmr9JbTZ7DfxKHbEH9SCUK_g_hU9kDhv8/24bdcaf6-934b-40a4-a8ee-2cf34ece062c.svg" alt="">Virtual Working Spaces</div>
                  </div>
                </div>
              </div>
            </div>


            <div class="steps">
              <div>
                <div><img src="https://secure.skypeassets.com/content/dam/scom/meet-now/generatelink@2x.png" alt=""></div>
                <div class="step1">
                  <p>1. Generate Link</p>
                  <p>Generate a call link in a simple click.</p>
                </div>
              </div>
              <div>
                <div><img src="https://secure.skypeassets.com/content/dam/scom/meet-now/sharelink@2x.png" alt=""></div>
                <div class="step1">
                  <p>2. Share</p>
                  <p>Invite anyone using innvite link.</p>
                </div>
              </div>
              <div>
                <div><img src="https://secure.skypeassets.com/content/dam/scom/meet-now/joinlink@2x.png" alt=""></div>
                <div class="step1">
                  <p>3. Join Call</p>
                  <p>Join call through your unique link.</p>
                </div>
              </div>
            </div>


          <footer>
            <div class="footer">
              <div class="footer-column">
                <div>Contact Info</div>
                <div>karanbhattt36603@gmail.com</div>
              </div>
              <div class="footer-column">
                <div>Efficient Shortcuts</div>
                <div>FAQ</div>
                <div>About us</div>
                <div>Conatct Us</div>
                <div>Terms of Use</div>
                <div>© Bootstrap.com 2023</div>
              </div>
              <div class="footer-column"></div>
              <div class="footer-column"></div>
              <div class="footer-column"></div>
            </div>
            <div class="main-links">
              <div>Sitemap</div>
              <div>Contact us</div>
              <div>Privacy</div>
              <div>Terms of use</div>
              <div>Trademarks</div>
              <div>About our ads</div>
              <div>EU contract summary</div>
              <div>Legal</div>
              <div>© Bootstrap.com 2023</div>
            </div>
          </footer>


    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </html>