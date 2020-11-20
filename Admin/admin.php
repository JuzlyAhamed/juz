<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Dashboard</title>
  <!--<style type="text/css">
  #clock {
    width: 1100px;
    margin: 10px;
    margin-right: 50px;
    font-size: 100px;
    display: inline-block;
    float: left;
    box-shadow: 10px 10px 5px grey;
    background-color: #AC545C;
    color: #dbbcac;
    border-radius: 30px;
    border-style: none; 
  }-->
  </style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/adminstyle2.css">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
  <link href="css/adminstyle.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/to-do.css">
  <link href="css/adminstyle-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <section id="container">
   
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <a href="#"><img src="images/logo.png" width="80" height="40" style="margin: 10px; margin-bottom: 0px;"></a>
           
      <div class="capsule">
          <div class="profilenav">
              <div class="right">
                  <ul>
                    <li>
                      <a href="#">
                        <p style="color:#414141;">Kamu.lk<br> <span>Admin</span></p><img src="images/Profile.png" alt="Admin" width="40"><i class="fa fa-angle-down"></i>
                      </a>
                       
                      <div class="dropdown">
                          <ul>
                            <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                            <li><a href="../logout.php"><i class="fa fa-sign-out"></i>Signout</a></li>
                        </ul>
                      </div>
                      
                    </li>
                </ul>
              </div>
          </div>
      </div>

      <script>
        document.querySelector(".right ul li").addEventListener("click", function(){
            this.classList.toggle("active");
        });
      </script>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <li class="mt">
            <a class="active" href="admin.php">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="sub-menu">
            <a  href="manageusers.php">
              <i class="fa fa-desktop"></i>
              <span>User Management</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="manageposts.php">
              <i class="fa fa-cogs"></i>
              <span>Post Management</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="income.php">
              <i class="fa fa-book"></i>
              <span>Income</span>
              </a>
          <li>
            <a href="admininbox.php">
              <i class="fa fa-envelope"></i>
              <span>Inbox </span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="adminreport.php">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Reports</span>
              </a>
          </li>
          <!--<li class="sub-menu">
            <a href="adminchat.php">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
          </li>-->
          <li>
            <a href="map.php">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <section id="main-content">
      <section class="wrapper">
        <!--<button id="clock">10:10:01</button>
        <script type="text/javascript">
          setInterval(displayclock, 500);
          function displayclock(){
            var time = new Date();
            var hrs = time.getHours();
            var min = time.getMinutes();
            var sec = time.getSeconds();
            var en = 'AM';

            if (hrs > 12){
              en = 'PM';
            }
            if (hrs > 12) {
              hrs = hrs - 12;
            }

            if (hrs == 0){
              hrs = 12 ;
            }

            if (hrs < 10){
              hrs = '0' + hrs;
            }
            if (min < 10){
              min = '0' + min;
            }
            if (sec < 10){
              sec = '0' + sec;
            }

            document.getElementById('clock').innerHTML = hrs + ':' + min + ':' + sec + ' ' + en; 
          }

        </script>-->
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> To do List</h5>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">
                  <ul class="task-list">
                    <li>
                      <div class="task-checkbox">
                        <input type="checkbox" class="list-child" value="" />
                      </div>
                      <div class="task-title">
                        <span class="task-title-sp">Accounts and Invoice Check</span>
                        <div class="pull-right hidden-phone">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="task-checkbox">
                        <input type="checkbox" class="list-child" value="" />
                      </div>
                      <div class="task-title">
                        <span class="task-title-sp">Remind Nutritionist to check his Appointments</span>
                        <div class="pull-right hidden-phone">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="task-checkbox">
                        <input type="checkbox" class="list-child" value="" />
                      </div>
                      <div class="task-title">
                        <span class="task-title-sp">Check Your Email Inbox</span>
                        <div class="pull-right hidden-phone">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="task-checkbox">
                        <input type="checkbox" class="list-child" value="" />
                      </div>
                      <div class="task-title">
                        <span class="task-title-sp">Need To Pay Nutritionist Salary</span>
                        <div class="pull-right hidden-phone">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="task-checkbox">
                        <input type="checkbox" class="list-child" value="" />
                      </div>
                      <div class="task-title">
                        <span class="task-title-sp">Need To check User engagement today</span>
                        <div class="pull-right">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class=" add-task-row">
                  <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>
                  <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
                </div>
              </div>
            </section>
          </div>
        </div>
        <br><br><br>
         <h2 style="color: black; margin-top: 10px;">Social Media Stats</h2>
        <div class="tableview">
               <table class="mediastats" class="table" border="0" style="background-color: #3b5998;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <a href="https://www.facebook.com/"><h3 style="color: #fff;">Facebook</h3></a>
                  <br>
                  <i class="fa fa-facebook fa-3x"></i><br>
                  <h3>Page Likes<h3><br><b><h5><i class="fa fa-thumbs-o-up"></i> 11,326</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
               <table class="mediastats" class="table" border="0" style="background-color: #00acee;">
               <tr> 
                <td colspan="2" rowspan="5">
                  <a href="https://www.twitter.com/"><h3 style="color: #fff;">Twitter</h3></a>
                  <br>
                  <i class="fa fa-twitter fa-3x"></i><br>
                  <h3>Followers<h3><br><b><h5><i class="fa fa-users"></i> 7,238</h5><br>
                </td>
              </tr>
              </table>
            </div>
            <div class="tableview">
               <table class="mediastats" class="table" border="0" style=" background-image: linear-gradient(to right, #8134AF , #DD2A7B);">
               <tr> 
                <td colspan="2" rowspan="5">
                  <a href="https://www.instagram.com/"><h3 style="color: #fff;">Instagram<h3></a>
                  <br><i class="fa fa-instagram fa-3x"></i><br>
                  <p>Follwers</p>
                  <br><b><h5><i class="fa fa-heart"></i> 3,638</h5><br>
                </td>
              </tr>
              </table>
            </div>
        <div class="kamucalendar">
          <iframe src="https://calendar.google.com/calendar/embed?src=h0rvvlhv436fso337b45180ons%40group.calendar.google.com&ctz=Asia%2FColombo" style="border:0" width="1100" height="650" border="0" scrolling="no";></iframe>
        </div>

      </section>
    </section>
</body>

</html>

