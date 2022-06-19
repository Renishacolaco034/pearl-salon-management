<html>
<head>
<link rel="stylesheet"  href="includes/style.css">
<style type="text/css">
* {padding:0; margin:12;}
a {text-decoration:none;}
.sidebar{background:rgba{100,205,203,1,00};}
.sidebar-ul ul{display:none;}
.sidebar-ul li:hover ul{display:block;}
body {
  background-image:bg-1.jpg;
   font-size: 18px;
}
#sidebar {
  position:absolute;
  left:-200px;
  width:200px;
  height:100%;
  background:#151719;
  transition:all 500ms linear;
}
#sidebar.active {
  left:0px;
}
#sidebar ul li {
	color:white;
	text-decoration:none;
	padding: 15px 10px;
	border-bottom:1px solid rgba(100,100,100,0.3);
}
#sidebar ul li a {
	text-decoration:none;
	color:white;
}
#sidebar a:hover {
 color: pink;
}
#sidebar .toggle-btn {
  position:absolute;
  left:230px;
  top:20px;
}
#sidebar .toggle-btn span {
  display:block;
  width:30px;
  height:5px;
  background:#151719;
  margin:5px 0px;
}
</style>
</head>
<body>
<div id="sidebar" >
  <div class="toggle-btn" onclick="toggleSidebar()">
    <span></span>
    <span></span>
    <span></span>
  </div>  
  
  <ul>
  
  <div class="sidebar">
            
        
          <ul class="sidebar-ul">
            <li><br><br>
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
              <a href="services.php">Services /Products</a>
              <ul>
                <li>
                  <a href="add-services.php">Add Services</a>
                </li>
               
				<li>
                  <a href="add-products.php">Add Products</a>
                </li>
              </ul>
              <!-- /nav-second-level -->
            </li>
            
          
            <li>
              <a href="all-appointment.php">Appointment</a>
              <ul>
                <li>
                  <a href="all-appointment.php">All Appointment</a>
                </li>
                <li>
                  <a href="new-appointment.php">New Appointment</a>
                </li>
                <li>
                  <a href="accepted-appointment.php">Accepted Appointment</a>
                </li>
                <li>
                  <a href="rejected-appointment.php">Rejected Appointment</a>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>
           
        
           
             <li>
              <a href="customer-list.php">Stylish List</a>
			  <ul>
			   <li>
              <a href="add-customer.php">Add Stylish</a>
            </li>
			</ul>
            </li>
              
              <li>
              <a href="sales_invoices.php">Order List</a>
			  
            </li>
			
			  <li>
             <a href="#">Invoice</a>
              <ul>
              <li><a href="invoices.php">Customer Service Invoice </a></li>
			   <li><a href="sales_invoices.php">Product Sales Invoice</a></li>
			   </ul>
            </li>
            <li>
              <a href="search-appointment.php">Search Appointment</a>
            </li>
            <li>
              <a href="search-invoices.php">Search Invoice</a>
            </li>
          

          </ul></ul>
          <div> </div></div>
          <!-- //sidebar-collapse -->
     
    <script type="text/javascript">
function toggleSidebar(){
  document.getElementById("sidebar").classList.toggle('active');
}
</script>
 <div class="navbar"> 
  
  <nav >
      <ul>
	     
         <li><a href="dashboard.php">Admin Panel</a></li>
         <li><a href="change-password.php">Settings</a></li> 
         <li><a href="admin-profile.php">Profile</a></li> 
          <li><a href="index.php">Logout</a> </li>
          </ul>
  </nav>
  </div> 