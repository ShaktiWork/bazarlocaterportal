



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/loaddropdown.js"></script>


<?php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
	echo $_SESSION["email"];
	if (empty($_SESSION["email"])) {
		
		?>
	<script>alert("Please login first")
	window.location.href = 'login';
	</script>
	<?php
		
	}
	else{
		$email=$_SESSION["email"];
	    $userid=$_SESSION["userid"];
	    $role=$_SESSION["role"];
	    $roleid= $_SESSION["roleid"];
	    $userid=$_SESSION['userid'];
		?>
		 <script>
		
	 $( document ).ready(function() {
          $("#logout").css("display","block");
		   $("#regis").css("display","none");
		    $("#login").css("display","none");
       });
	 </script>
		
		<?php
	}
}
?>
<script>
$( document ).ready(function() {
        loadAllCategory();
		loadBaners();
		 var userroleid=$("#userroleid").val('<?php echo $roleid  ?>');
	     var userroleid=$("#user_id").val('<?php echo $userid  ?>');
		
 });
	   
function loadAllCategory(){
	 
	 $.post('BLloadropdownAction', {type:'loadCategoryAll'}, function (data){
	 $("#categoryload").html(data);
   });
}

    
	  function loaddetails(categoty){
	      
	      var userId=$("#user_id").val();
		  var roleId=$("#userroleid").val();
		  var url = 'listing?categoty='+categoty+"&type="+'home';
          window.location.href = url;
	 }
	 function loadBaners(){
		
		  $.post('BLloadBannerAction', {type:'bannermain'}, function (data){
	      $("#banners").html(data);
   });
	 }
</script>
 
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
   
   
</head>

<body>
			<div class="container-fluid">
            <div class="container">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="top_stle"><img src="img/logo.png" class="img-responsive" /></div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" menu_padding>
        

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse menu_set" id="myNavbar">
      <ul class="nav navbar-nav top_stle">
        <li><a href="#" class="menu_style">Home</a></li>
        <li><a href="#" class="menu_style">About us</a></li>
        <li><a href="#" class="menu_style">Contact us</a></li>
        <li><a href="#" class="menu_style">Advartise</a></li>
        <li><a href="#" class="menu_style">Career</a></li>
        <li><a href="#" class="menu_style">Testimonial</a></li>
        <li><a href="#" class="menu_style">feedback</a></li>
      </ul>
   
      </div>
      </div>
      <div class="col-lg-2">
      <ul class="right_stle navbar-right">
        <li class="float"><a href="login" class="sign" id="login" style="display:block;margin-top: -8px;"  >Sign in</a></li>
        <li class="float"><a href="#" class="ragister" id="regis" style="display:block;" >Ragister</a></li>
			<li class="float"><a href="logout"class="ragister" id="logout" style="display:none">Logout</a></li>
     
		
      </ul>
    </div>
  </div>
  			</div>
            	</div>
                
               			<div class="container-fluid">
                        
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner top_stle" role="listbox" id="banners">
    <!--  <div class="item active slider">
        <img src="img/banner/header-2.jpg" class="img-responsive" height="357px">
      </div>

      <div class="item slider">
        <img src="img/banner/header-2.jpg" class="img-responsive" height="357px">
      </div>
    
      <div class="item slider">
        <img src="img/banner/header-2.jpg" class="img-responsive" height="357px">
      </div>

      <div class="item slider">
        <img src="img/banner/header-2.jpg" class="img-responsive" height="357px">
      </div>-->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
			<div class="container-fluid">
            <div class="container">
            <div class="row">
           
    	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mrg_top_bottom">
			<div class="mrg_f form-inline">
  <form>
    <div class="form-group padding2px pa-lef col-lg-2 col-sm-3 col-md-3 col-xs-6">
     <div class="select-style">
 <select class="form-control select_bar" id="state" onchange="loadCity();" style="width:100%;">
   
  </select>
</div>
    </div>
    <div class="form-group padding2px col-lg-2 col-sm-3 col-md-3 col-xs-6">
      <div class="select-style">
  <select class="form-control select_bar" id="city"  onchange="loadRegion();" style="width:100%;">
    
  </select>
</div>
    </div>
    <div class="form-group padding2px col-lg-2 col-sm-3 col-md-3 col-xs-6">
      <div class="select-style">
  <select class="form-control select_bar"  id="region" style="width:100%;">
    
  </select>
</div>
    </div>
    
    <div class="form-group padding2px col-lg-2 col-sm-3 col-md-3 col-xs-6">
      <div class="select-style">
  <select class="form-control select_bar" id="category" onchange="loadSubCategory();" style="width:100%;">
    
  </select>
</div>
    </div>
   
    
    <div class="form-group padding2px col-lg-2 col-sm-3 col-md-3 col-xs-6">
      <div class="select-style">
  <select class="form-control select_bar"  id= "subcategory"style="width:100%;">
    
  </select>
</div>
    </div>
     <div class="form-group padding2px col-lg-2 col-sm-3 col-md-3 col-xs-6">
    <button class="btn btn-custom font_search" onclick="loadListing()" value="SEARCH" type="button">SEARCH</button>
    </div>
  </form>
  </div>
		</div>
  	
  
 

</div>
		</div>
        	</div>
            	

		<div class="container-fluid">
        <div class="container">
        <div class="row">
 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 categy border">
            <div class="category_name">Category</div>
			<input type="hidden"id="userroleid" value="">
			<input type="hidden" id="user_id" value="">
            <div id="categoryload"></div>
              
			  </div>
                                               
                                            	
                                            
                                                    	                                                                                                                                                                                                                                           
			


	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="add_img  box_shodow">
			<img src="img/add/add1.png" class="img-responsive" alt="reebok">
			</div>

           	<div class="add_img  box_shodow">
			<img src="img/add/download.jpg" class="img-responsive" alt="reebok">
			</div>
            
           	<div class="add_img  box_shodow">
			<img src="img/add/Just-be-fastrack-bag-banner.jpg" class="img-responsive" alt="reebok">
			</div>
            
    </div>
            </div>
                	</div>
                    </div>
                    <br />
                   
                    
         <div class="container-fluid footer1">
<div class="container">
<div class="row mrg_top_bottom">
<div class="col-lg-9 col-md-8 col-sm-9 col-xs-12">
<div class="footer_contact">
<div class="footer_contact_link"><a href="">About us</a></div>
<div class="footer_contact_link"><a href="">Contact us</a></div>
<div class="footer_contact_link"><a href="">Advertise</a></div>
<div class="footer_contact_link"><a href="">Career</a></div>
<div class="footer_contact_link"><a href="">Testimonials</a></div>
<div class="footer_contact_link"> <a href="">Feedback</a></div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-xs-12 icon_top">
<div class="main_footer_social">
<div class="social_footer facebook"><a href="#"><img src="img/social/facebook.jpg" class="img-responsive social_icon" alt="facebook"></a></div>
<div class="social_footer twitter"><a href="#"><img src="img/social/googleplas.jpg" class="img-responsive social_icon" alt="twitter"></a></div>
<div class="social_footer pintrest"><a href="#"><img src="img/social/pinterst.jpg" class="img-responsive social_icon" alt="pinterest"></a></div>
<div class="social_footer googleplas"><a href="#"><img src="img/social/twitter.jpg" class="img-responsive social_icon" alt="googleplas"></a></div>
</div>

</div>
</div>
	</div>
    	</div>
		<div class="container-fluid footer1">
        <div class="container">
		<div class="row footer-top"> 
<div class="col-lg-9 col-md-8 col-sm-9 col-xs-12 footer-top">
<div class="city">
<div class="city_name"><a href="">Ahmedabad /</a></div> 
<div class="city_name"><a href="">Bangalore /</a></div>
<div class="city_name"><a href=""> Chandigarh /</a></div>
<div class="city_name"><a href=""> Chennai /</a></div>
<div class="city_name"><a href=""> Coimbatore / </a></div>
<div class="city_name"><a href="">Delhi /</a></div>
<div class="city_name"><a href=""> Delhi-NCR /</a></div>
<div class="city_name"><a href=""> Ernakulam /</a></div> 
<div class="city_name"><a href="">Goa / </a></div>
<div class="city_name"><a href="">Hyderabad / </a></div>
<div class="city_name"><a href="">Indore /</a></div>
<div class="city_name"><a href=""> Jaipur /</a></div>
<div class="city_name"><a href=""> Kolkata /</a></div>
<div class="city_name"><a href="">Mumbai / </a></div>
<div class="city_name"><a href="">Mysore / </a></div>
<div class="city_name"><a href="">Nagpur /</a></div>
<div class="city_name"><a href=""> Nashik / </a></div> 
<div class="city_name"><a href="">Surat / </a></div>
<div class="city_name"><a href="">Vadodara /</a></div>
<div class="city_name"><a href=""> Vizag</a></div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
<div class="main_app">
<div class="main_app_image google_play"><a href="#"><img src="img/social/2000px-Get_it_on_Google_play.jpg" class="img-responsive footer_img_height google_img" alt="google_play"></a></div>
<div class="main_app_image app_store"><a href="#"><img src="img/social/Available-on-the-app-store-badge.jpg" class="img-responsive image_border footer_img_height1" alt="app_store"></a></div>
</div>
</div>
</div>
	
        
        
       
        
        <div class="row footer2">
        <div class="copy_right">Copyrights 2008-2015. All Rights Reserved. <span class="text"><a href="#">Privacy</a></span> | <span class="text">
        <a href="#">Terms</span></a></div>
        	</div>
            	</div>
                </div>
               	 
                
                    
				

</body>
</html>
