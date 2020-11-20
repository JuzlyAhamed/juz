<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Posts</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle2.css">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle-responsive.css">
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
                            <li><a href="logout.php"><i class="fa fa-sign-out"></i>Signout</a></li>
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
       
        <ul class="sidebar-menu" id="nav-accordion">
          <li class="mt">
            <a href="admin.php">
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
            <a  class="active" href="manageposts.php">
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
        </li>
      </ul>
       
      </div>
    </aside>
   
    <section id="main-content">
      <section class="wrapper">
     <div class="tableview">
          <table class="posttable" border="0" style="background-color: #fff; color: #080000;">
            <tr>
              <td rowspan="6"><img style="height:300px; width:450px; border-radius:20px;"  src="images/Food1.jpg"></td>
              <td><h3>Chorizo & mozzarella gnocchi bake <span style="font-size: 11px">  &#8287 &#8287 &#8287  &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 Date:- 15th Nov</span></h3><p style="font-size: 11px"> Author: Pramuka Senaviratna</p></td>
              <td><button style="background-color: #4CAF50; border-radius:10px;" onclick="myFunction()" id="myBtn">More</button></td>
              <td><button style="background-color:  #f44336; border-radius:10px;">Delete</button></td>
            </tr>
            <tr>
              <td rowspan="5" colspan="3"><p>Step 1 Heat the oil in a medium pan over a medium heat. Fry the onion and garlic for 8-10 mins until soft. Add the chorizo and fry for 5 mins more. Tip in the tomatoes and sugar, and season. Bring to a
              simmer, then add the gnocchi and cook for 8 mins, stirring often,
              until soft. Heat the grill to high.<span id="dots">...</span><span id="more"><br><br>Step 2 Stir ¾ of the mozzarella and most of the basil through the
              gnocchi. Divide the mixture between six ovenproof ramekins, or
              put in one baking dish. Top with the remaining mozzarella, then
              grill for 3 mins, or until the cheese is melted and golden. Season,
              scatter over the remaining basil and serve with green salad.</span></p></div></td>
            </tr>
          </table>
          <table class="posttable" border="0" style="background-color: #fff; color: #080000;">
          <tr>
              <td rowspan="6"><img style="height:300px; width:450px; border-radius:20px;"  src="images/Food2.jpg"></td>
              <td><h3>Lasagna <span style="font-size: 11px">  &#8287 &#8287 &#8287  &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 Date:- 12th Nov</span></h3>
              <p style="font-size: 11px"> Author: Shifna Shafeek</p></td>
               <td><button style="background-color: #4CAF50; border-radius:10px;" onclick="myFunction()" id="myBtn">More</button></td>
              <td><button style="background-color:  #f44336; border-radius:10px;">Delete</button></td>
            </tr>
            <tr>
              <td rowspan="5" colspan="3"><p>For this recipe, we are essentially making a thick, meaty tomato sauce and layering that with noodles and cheese into a casserole. Here’s the run-down:<br>
              Start by making the sauce with ground beef, bell peppers, onions, and a combo of tomato sauce, tomato paste, and crushed tomatoes. The three kinds of tomatoes gives the sauce great depth of flavor.
              <span id="dots">...</span><span id="more">Let this simmer while you boil the noodles and get the cheeses ready. We’re using ricotta, shredded mozzarella, and parmesan — like the mix of tomatoes, this 3-cheese blend gives the lasagna great flavor!<br>
              From there, it’s just an assembly job. A cup of meat sauce, a layer of noodles, more sauce, followed by a layer of cheese. Repeat until you have three layers and have used up all the ingredients. <br> <br>
              <br></span></p></td>
            </tr>
          </table>
          <table class="posttable" border="0" style="background-color: #fff; color: #080000;">
          <tr>
              <td rowspan="6"><img style="height:300px; width:450px; border-radius:20px;"  src="images/Food3.jpg"></td>
              <td><h3>Butter garlic crab <span style="font-size: 11px">  &#8287 &#8287 &#8287  &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 Date:- 07th Nov</span></h3> <p style="font-size: 11px"> Author: Pathika Weererathna</p></td>
              <td><button style="background-color: #4CAF50; border-radius:10px;" onclick="myFunction()" id="myBtn">More</button></td>
              <td><button style="background-color:  #f44336; border-radius:10px;">Delete</button></td>
            </tr>
            <tr>
              <td rowspan="5" colspan="3"><p>For this recipe, we are essentially making a thick, meaty tomato sauce and layering that with noodles and cheese into a casserole. Here’s the run-down:<br>
              Start by making the sauce with ground beef, bell peppers, onions, and a combo of tomato sauce, tomato paste, and crushed tomatoes. The three kinds of tomatoes gives the sauce great depth of flavor.
              <span id="dots">...</span><span id="more">Let this simmer while you boil the noodles and get the cheeses ready. We’re using ricotta, shredded mozzarella, and parmesan — like the mix of tomatoes, this 3-cheese blend gives the lasagna great flavor!<br>
              From there, it’s just an assembly job. A cup of meat sauce, a layer of noodles, more sauce, followed by a layer of cheese. Repeat until you have three layers and have used up all the ingredients. <br> <br>
              </span></p></td>
            </tr>
          </table>
          <table class="posttable" border="0" style="background-color: #fff; color: #080000;">
          <tr>
              <td rowspan="6"><img style="height:300px; width:450px; border-radius:20px;"  src="images/Food4.jpg"></td>
              <td><h3>Laksa<span style="font-size: 11px">  &#8287 &#8287 &#8287  &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 Date:- 04th Nov</span></h3>
             <p style="font-size: 11px"> Author: Juzly Ahamed</p></td>
               <td><button style="background-color: #4CAF50; border-radius:10px;" onclick="myFunction()" id="myBtn">More</button></td>
              <td><button style="background-color:  #f44336; border-radius:10px;">Delete</button></td>
            </tr>
            <tr>
              <td rowspan="5" colspan="3"><p>Dishes don’t get much more typically French than boeuf bourguignon. The dish hails from the same region as coq au vin – that’s Burgundy in eastern France – and there are similarities between the two dishes. Boeuf bourguignon is essentially a stew made from beef braised in red wine, beef broth, and seasoned vegetables including pearl onions and mushrooms. Originally a peasant dish, this recipe is now a staple in French restaurants around the world. Traditionally, the cheap cuts of meat would be tenderized in wine for two days to intensify the flavors, although some shortcuts can be taken. Every August in Burgundy, the Fête du Charolais celebrates the dish, along with plenty of music and wine
              <span id="dots">...</span><span id="more">Let this simmer while you boil the noodles and get the cheeses ready. We’re using ricotta, shredded mozzarella, and parmesan — like the mix of tomatoes, this 3-cheese blend gives the lasagna great flavor!<br>
              From there, it’s just an assembly job. A cup of meat sauce, a layer of noodles, more sauce, followed by a layer of cheese. Repeat until you have three layers and have used up all the ingredients.
              </span></p></td>
            </tr>
          </table>
          <table class="posttable" border="0" style="background-color: #fff; color: #080000;">
          <tr>
              <td rowspan="6"><img style="height:300px; width:450px; border-radius:20px;"  src="images/Food5.jpg"></td>
              <td><h3>Confit de canard<span style="font-size: 11px">  &#8287 &#8287 &#8287  &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 Date:- 04th Nov</span></h3>
              <p style="font-size: 11px"> Author: Juzly Ahamed</p></td>
             <td><button style="background-color: #4CAF50; border-radius:10px;" onclick="myFunction()" id="myBtn">More</button></td>
              <td><button style="background-color:  #f44336; border-radius:10px;">Delete</button></td>
            </tr>
            <tr>
            <td rowspan="5" colspan="3"><p>For this recipe, we are essentially making a thick, meaty tomato sauce and layering that with noodles and cheese into a casserole. Here’s the run-down:<br>
            Start by making the sauce with ground beef, bell peppers, onions, and a combo of tomato sauce, tomato paste, and crushed tomatoes. The three kinds of tomatoes gives the sauce great depth of flavor.
            <span id="dots">...</span><span id="more">Let this simmer while you boil the noodles and get the cheeses ready. We’re using ricotta, shredded mozzarella, and parmesan — like the mix of tomatoes, this 3-cheese blend gives the lasagna great flavor!<br>
            From there, it’s just an assembly job. A cup of meat sauce, a layer of noodles, more sauce, followed by a layer of cheese. Repeat until you have three layers and have used up all the ingredients. <br> <br>
            To freeze an unbaked lasagna: Line the pan with foil before assembling, then assemble the lasagna as directly. Let cool completely, and then freeze until solid. Once frozen, lift the frozen lasagna block from the casserole dish, wrap it in more foil, then freeze for up to a month.<br>
              </span></p></td>
            </tr>
          </table>
          <table class="posttable" border="0" style="background-color: #fff; color: #080000;">
          <tr>
              <td rowspan="6"><img style="height:300px; width:450px; border-radius:20px;"  src="images/Food6.jpg"></td>
              <td><h3>Confit de canard<span style="font-size: 11px">  &#8287 &#8287 &#8287  &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 Date:- 04th Nov</span></h3>
              <p style="font-size: 11px"> Author: Juzly Ahamed</p></td>
              <td><button style="background-color: #4CAF50; border-radius:10px;" onclick="myFunction()" id="myBtn">More</button></td>
              <td><button style="background-color:  #f44336; border-radius:10px;">Delete</button></td>
            </tr>
            <tr>
            <td rowspan="5" colspan="3"><p>Dishes don’t get much more typically French than boeuf bourguignon. The dish hails from the same region as coq au vin – that’s Burgundy in eastern France – and there are similarities between the two dishes. Boeuf bourguignon is essentially a stew made from beef braised in red wine, beef broth, and seasoned vegetables including pearl onions and mushrooms. Originally a peasant dish, this recipe is now a staple in French restaurants around the world. Traditionally, the cheap cuts of meat would be tenderized in wine for two days to intensify the flavors, although some shortcuts can be taken. Every August in Burgundy, the Fête du Charolais celebrates the dish, along with plenty of music and wine
              <span id="dots">...</span><span id="more">Let this simmer while you boil the noodles and get the cheeses ready. We’re using ricotta, shredded mozzarella, and parmesan — like the mix of tomatoes, this 3-cheese blend gives the lasagna great flavor!<br>
              From there, it’s just an assembly job. A cup of meat sauce, a layer of noodles, more sauce, followed by a layer of cheese. Repeat until you have three layers and have used up all the ingredients. <br> <br>
            </tr>
          </table>
          
        </div>
      </section>
    </section>
    <script>function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "More";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Less";
    moreText.style.display = "inline";
  }
}</script>

</body>

</html>

