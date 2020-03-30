<!DOCTYPE html>
<html>
    <head>
      <link href='https://fonts.googleapis.com/css?family=Metal Mania' rel='stylesheet'>
  <link href='index.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <title>Anna University</title>
      <link rel = "icon" href ="https://upload.wikimedia.org/wikipedia/en/thumb/4/49/Anna_University_Logo.svg/1200px-Anna_University_Logo.svg.png"   type = "image/x-icon" > 
  <style>
   
   
  </style>
</head>
<body id="div">
  <div>
    <img src="http://www.aucek.in/images/banner_new.JPG" alt="Anna University" width="100%" height="100%">

<ul class="topnav">
        <li><a class="active" href="index.php"><i class="fa fa-fw fa-home"></i><b>Home</b></a></li>
        <li><a href="#news"><i class="fa fa-fw fa-newspaper-o"></i><b>News</b></a></li>
        <li><a href="#"><i class="fa fa-fw fa-phone"></i><b>Contact Us</b></a></li>
        <li><a href="feespay.php"><i class="fa fa-cc-visa" ></i><b>Fees Payment</b></a></li> 
        <li><a href="https://www.google.com/maps/place/University+College+of+Engineering+Kancheepuram+(Constituent+College+of+Anna+University,+Chennai)/@12.8746194,79.7019649,1104m/data=!3m2!1e3!4b1!4m5!3m4!1s0x3a52c223887eb70b:0x2f22e723d1e0d06c!8m2!3d12.8746194!4d79.7041536"><i class="fa fa-map-marker"></i><b>Location</b></a> 
       
              <li><a href="file:///opt/lampp/htdocs/php1/gallery.html"><i class="fa fa-file-image-o"></i><b>Gallery</b></a></li>
              <li><span onclick="openNav()"><b>More Info</b/span></li>
            </div>  
            </div>
        </li>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Dean Desk</a>
  <a href="#">Administration</a>
  <a href="#">Placement</a>
  <a href="#">Anti Ragging</a>
  <a href="#">About</a>
  <a href="#" >Results</a>
</div>

</ul>
<div>
 
<div class="slideshow-container">
  <div class="mySlides fade">
    <img id="img" src="http://www.aucek.in/images/slider/bg1b.jpg" >  
  </div> 
  <div class="mySlides fade">  
  <img id="img" src="http://www.aucek.in/images/slider/bg1b.jpg" >

  </div>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div> 
  <div>
      <h1><u>ABOUT OUR INSTITUTION</u></h1>
  <p>University College of Engineering kancheepuram, popularly known as UCEK, is a constituent college of Anna university, located in the temple city, kancheepuram, Tamil Nadu, India. The college was established in 2010 and affiliated with "Anna University". It is one among the fast-growing engineering institutions in the region.</p>
 <p>  The college has flourished by leaps and bounds, its excellence with distinct Infra structure which expedite a substantial growth in the progress of Academic and drawn towards placement activities, Extra-curricular & co-curricular activities. In addition to this value based education is imparted to emphasize their personality development and triumphing towards the goal.</p>
  </div>
  <div>
    <div>
        <h1><u>History</u></h1>
   <p>This college was established in 2010 as one of the constituent college of Anna University, through a policy decision made by the government of Tamil Nadu at that time. But during 2011 a permanent site for the college was identified and allotted
    by the Government of Tamil Nadu, on the Chennai-Bangalore Highway, Karaipettai village. The new site consists of a total land area of about 10.4 acres. As of June 2012 constructions are nearing completion for the initial plan of 4 laboratories,
    4 class rooms, office and Dean's cabin. On 5 April 2013, Dean's office and 4 class rooms were shifted to the new campus. On 27 November 2013, the girls' hostel was shifted to a nearby building on the Paranthur Road, This building is a new
    building in which all the girl students are accommodated instead of the 3 different buildings in the Kanchipuram town 10 km from the college. The work for the construction of academic and administrative blocks along with hostels for girls
    and boys was completed in academic year 2014-15. So far there have been four batches of students from the academic year 2010-2011 who are currently pursuing their degree program in this engineering institution.</p>
    </div>
    </div>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
      </script>
</body>
</body>
<footer>

  <div class="grid-container" >
    <div class="grid-item" >
      <p ><b style="color: crimson;">Address</b><br>
        University College of Engineering,kancheepuram
        NH-4, Chennai-Bangalore Highway
        kancheepuram-631552<br>
        <b style="color: red;">Phone:</b> (044) 27277220
        <b style="color: red;">Phone:</b> (044) 27277230
       <b style="color: red;">Office:</b> (044) 27277250,
        </p></div>
    <div class="grid-item" style="padding-top: 50px;" >
      <p style="color: red">   2020 Designed, Developed by Web & Software Development Team | UCEK(parthiban)   </p>
    </div>
  </footer>
</html> 
