<!DOCTYPE html>
<html lang="en">

<!--profile-about.html 18:00:16 GMT -->
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta charset="UTF-8">
<meta name="description" content="Practo - The Ultimate Multipurpose Admin Template">
<meta name="keywords" content="Practo, Admin, Template, Bootstrap">
<title>Practo - The Ultimate Multipurpose Admin Template</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/material-design-iconic-font.min.css" rel="stylesheet">
<link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>

<body>
<?php
//include('header.php');
// include 'adminnavs.php';
?>
<section id="content">
  <div class="container">
    <header class="page-header">
      <h3>ADMIN PROFILE</h3>
    </header>
    <div class="tile" id="profile-main">
      <div class="pm-overview c-overflow-dark">
        <div class="pmo-pic">
          <div class="p-relative"> <a href="#"> <img class="img-responsive" src="img/profile-pics/BIB.jpg" alt=""> </a>
            <div class="dropdown pmop-message"> <a data-toggle="dropdown" href="#" class="pmopm-send"> <i class="jtv jtv-comment-text-alt"></i> </a>
              <div class="dropdown-menu">
                <textarea placeholder="Write something..."></textarea>
                <button class="btn bg-green btn-icon"><i class="jtv jtv-mail-send"></i></button>
              </div>
            </div>
            <a href="#" class="pmop-edit"> <i class="jtv jtv-camera"></i> <span class="hidden-xs">Update Profile Picture</span> </a> </div>
          <div class="pmo-stat">
            <h2 class="m-0 c-white">1234</h2>
            Total Connections </div>
        </div>
        <div class="pmo-block pmo-contact hidden-xs">
          <h2>Contact</h2>
          <ul>
            <li><i class="jtv jtv-phone"></i> +91 9567302584</li>
            <li><i class="jtv jtv-email"></i> jishnumonpb1997@gmail.com</li>
            <li><i class="jtv jtv-facebook-box"></i> jishnu@fb</li>
            <li><i class="jtv jtv-twitter"></i> jishnu@twitter.com</li>
            <li> <i class="jtv jtv-pin"></i>
              <address class="m-b-0">
              1234 Wood Street Idukki,<br/>
              GH 45678<br>
              Peruvanthanam
              </address>
            </li>
          </ul>
        </div>
        <div class="pmo-block pmo-items hidden-xs">
          <h2>Connections</h2>
          <div class="pmob-body">
            <div class="row"> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/1.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/2.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/3.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/4.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/5.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/6.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/7.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/8.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/1.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/2.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/3.jpg" alt=""> </a> <a href="#" class="col-xs-2"> <img class="img-avatar" src="img/profile-pics/4.jpg" alt=""> </a> </div>
          </div>
        </div>
      </div>
      <div class="pm-body clearfix">
        <ul class="tab-nav tn-justified">
          <li class="active"><a href="adminhome1.php">About</a></li>
        </ul>

        <div class="pmb-block">
          <div class="pmbb-header">
            <h2><i class="jtv jtv-account m-r-5"></i> Basic Information</h2>
            <ul class="actions">
              <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="jtv jtv-more-vert"></i> </a>
                <ul class="dropdown-menu pull-right">
                  <li> <a data-pmb-action="edit" href="#">Edit</a> </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="pmbb-body p-l-30">
            <div class="pmbb-view">
              <dl class="dl-horizontal">
                <dt>Full Name</dt>
                <dd>JISHNUMON PB</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>Gender</dt>
                <dd>Male</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>Birthday</dt>
                <dd>May 06, 1997</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>Martial Status</dt>
                <dd>Single</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>Country</dt>
                <dd>India</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>State</dt>
                <dd>Kerala</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>District</dt>
                <dd>Idukki</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>Place</dt>
                <dd>Peruvanthanam</dd>
              </dl>
            </div>
            <div class="pmbb-edit">
              <dl class="dl-horizontal">
                <dt class="p-t-10">Full Name</dt>
                <dd>
                  <div class="fg-line">
                    <input type="text" class="form-control" placeholder="eg. Admin Author">
                  </div>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt class="p-t-10">Gender</dt>
                <dd>
                  <div class="fg-line">
                    <select class="form-control">
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt class="p-t-10">Birthday</dt>
                <dd>
                  <div class="dtp-container dropdown fg-line">
                    <input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="Click here...">
                  </div>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt class="p-t-10">Martial Status</dt>
                <dd>
                  <div class="fg-line">
                    <select class="form-control">
                      <option>Single</option>
                      <option>Married</option>
                      <option>Other</option>
                    </select>
                  </div>
                </dd>
              </dl>
              <div class="m-t-30">
                <button class="btn btn-primary btn-sm">Save</button>
                <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <div class="pmb-block">
          <div class="pmbb-header">
            <h2><i class="jtv jtv-phone m-r-5"></i> Contact Information</h2>
            <ul class="actions">
              <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="jtv jtv-more-vert"></i> </a>
                <ul class="dropdown-menu pull-right">
                  <li> <a data-pmb-action="edit" href="#">Edit</a> </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="pmbb-body p-l-30">
            <div class="pmbb-view">
              <dl class="dl-horizontal">
                <dt>Mobile Phone</dt>
                <dd>+919747532817</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>Email Address</dt>
                <dd>jishnumonpb1997@gmail.com</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>Twitter</dt>
                <dd>@jishnutwitter</dd>
              </dl>
            </div>
            <div class="pmbb-edit">
              <dl class="dl-horizontal">
                <dt class="p-t-10">Mobile Phone</dt>
                <dd>
                  <div class="fg-line">
                    <input type="text" class="form-control" placeholder="eg. +01 123 456 78">
                  </div>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt class="p-t-10">Email Address</dt>
                <dd>
                  <div class="fg-line">
                    <input type="email" class="form-control" placeholder="eg. jishnumonpb1997@gmail.com">
                  </div>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt class="p-t-10">Twitter</dt>
                <dd>
                  <div class="fg-line">
                    <input type="text" class="form-control" placeholder="eg. @jdtwitter">
                  </div>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt class="p-t-10">Skype</dt>
                <dd>
                  <div class="fg-line">
                    <input type="text" class="form-control" placeholder="eg. johndoe@fb">
                  </div>
                </dd>
              </dl>
              <div class="m-t-30">
                <button class="btn btn-primary btn-sm">Save</button>
                <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer"> Copyright © AUTOSHOP 2019 
  <ul class="f-menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Reports</a></li>
    <li><a href="#">Support</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</footer>

<!-- Javascript Libraries --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/bootstrap-growl.min.js"></script> 
<script src="js/moment.min.js"></script> 
<script src="js/bootstrap-datetimepicker.min.js"></script> 
<script src="js/functions.js"></script> 
<script src="js/demo.js"></script>
</body>

<!--profile-about.html 18:00:20 GMT -->
</html>