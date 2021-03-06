<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unicoderbd.com/theme/html/homex/dashboard-massanger.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:01 GMT -->
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Homex template">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="assets/css/layerslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>

<style type="text/css">
  #formdiv {
  text-align: center;
}
#file {
  color: green;
  padding: 5px;
  border: 1px dashed #123456;
  background-color: #f9ffe5;
}
#img {
  width: 17px;
  border: none;
  height: 17px;
  margin-left: -20px;
  margin-bottom: 191px;
}
.upload {
  width: 100%;
  height: 30px;
}
.previewBox {
  text-align: center;
  position: relative;
  width: 150px;
  height: 150px;
  margin-right: 10px;
  margin-bottom: 20px;
  float: left;
}
.previewBox img {
  height: 150px;
  width: 150px;
  padding: 5px;
  border: 1px solid rgb(232, 222, 189);
}
.delete {
  color: red;
  font-weight: bold;
  position: absolute;
  top: 0;
  cursor: pointer;
  width: 20px;
  height:  20px;
  border-radius: 50%;
  background: #ccc;
}
</style>


<!--	Title
	=========================================================-->
<title>Homex - Real Estate Template</title>
</head>
<body>


<div id="page-wrapper">
    <div class="row">
        <div class="full-row top-bar py-2 bg-secondary">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="dashboard-top-left"> <a class="float-left dashboard-logo mr-4" href="index-8.html"><img src="assets/images/logo/logo-icon.png" alt=""></a>
                            <div class="dropdown float-left mr-4"> <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard Option </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                            </div>
                            <div class="d-flex"> <a class="text-primary hover-text-primary mr-4 font-18" href="#"><i class="fas fa-bell"></i><sup class="text-white">10</sup></a> <a class="text-primary hover-text-primary mr-4 font-18" href="#"><i class="fas fa-comments"></i><sup class="text-white">5</sup></a> <a class="text-white hover-text-primary d-none d-md-block" href="#">+ Submit Property</a> </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-top-right float-left float-lg-right mt-2 mt-lg-0">
                            <div class="text-white float-left mr-4">Balance: <span class="text-primary">$34580.00</span></div>
                            <div class="dropdown float-left"> <a class="dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="assets/images/team/p.jpeg" alt=""> Hi, Karan </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2"> <a class="dropdown-item" href="#">Profile</a> <a class="dropdown-item" href="#">sign out</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row dashboard py-0  bg-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1 col-xl-2 bg-secondary">
                        <div class="row">
                            <div class="dashboard-sidebar flat-small py-4 w-100">
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Gambaran</h6>
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-massanger.html"><i class="flaticon-dashboard mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Dashboard</span></a></li>
                                    <li><a href="dashboard-message.html"><i class="flaticon-email mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Pesan</span><sup class="text-primary">(05)</sup></a></li>
                                    <li><a href="dashboard-comment.html"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Komentar</span><sup class="text-primary">(12)</sup></a></li>
                                    
                                </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Kelola Properti</h6>
                                <ul class="mb-4 text-white">
                                    <!-- <li><a href="dashboard-listing.html"><i class="flaticon-house-1 mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Daftar Properti</span></a></li>
                                    <li><a href="dashboard-favorite.html"><i class="flaticon-star mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Favorite Properti</span></a></li> -->
                                    <li><a href="dashboard-booking.html"><i class="flaticon-calendar mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Booking</span></a></li>
                                    <li><a href="dashboard-purchase.html"><i class="flaticon-rent mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Kos yang Disewa</span></a></li>
                                    <li><a href="faktur-saya.html"><i class="flaticon-forward mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Faktur Saya</span></a></li>
                                    <!-- <li><a href="faktur.html"><i class="flaticon-rent mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Faktur</span></a></li>
                                     -->
                                   
                                    <!-- <li><a href="dashboard-invoice.html"><i class="flaticon-bill mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Pembayaran dan Pajak</span></a></li> -->
                                    <!-- <li><a href="dashboard-submit-property.html"><i class="flaticon-forward mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Submit Property</span></a></li> -->
                                </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Detail</h6>
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-personal-info.html"><i class="flaticon-seller mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Edit Profil</span></a></li>
                                    <li><a href="dashboard-cara-pembookingan.html"><i class="flaticon-rent mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Cara Pembookingan</span></a></li>
                                    <!-- <li><a href="dashboard-profile-setting.html"><i class="flaticon-resume mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Edit Profile</span></a></li> -->
                                    <!-- <li><a href="dashboard-change-password.html"><i class="flaticon-lock mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Ganti Password</span></a></li> -->
                                    <li><a href="index-1.html"><i class="flaticon-rent mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Log Out</span></a></li>
                                    <!-- <li><a href="dashboard-social-media.html"><i class="flaticon-share mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Social Media Settings</span></a></li> -->
                                </ul>
                                <!-- <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Items</h6>
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-tax-info.html"><i class="flaticon-tax mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Informasi Pajak Barang</span></a></li>
                                    <li><a href="dashboard-featured.html"><i class="flaticon-real-estate mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Tampilan Item</span></a></li>
                                    <li><a href="dashboard-offer.html"><i class="flaticon-percentage mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Penawaran</span></a></li>
                                </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Pengaturan</h6>
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-system-setting.html"><i class="flaticon-settings mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Pengaturan Sistem</span></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                                    <?php
                                         $this->load->view($namamodule .'/'.$namafileview);
                                    ?>
                                 
                            <div class="dashboard-copyright bg-white py-4 text-center w-100">© 2019 Homex All right reserved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="assets/js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="assets/js/greensock.js"></script> 
<script src="assets/js/layerslider.transitions.js"></script> 
<script src="assets/js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/tmpl.js"></script> 
<script src="assets/js/jquery.dependClass-0.1.js"></script> 
<script src="assets/js/draggable-0.1.js"></script> 
<script src="assets/js/jquery.slider.js"></script> 
<script src="assets/js/chart.min.js"></script> 
<script src="assets/js/wow.js"></script> 
<script src="assets/js/YouTubePopUchart.min.html"></script> 
<script src="assets/js/validate.js"></script> 
<script src="assets/js/jquery.cookie.js"></script> 
<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from unicoderbd.com/theme/html/homex/dashboard-massanger.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:19 GMT -->
</html>