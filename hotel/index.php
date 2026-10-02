<!DOCTYPE html>
<html lang="en">
<?php
include_once('connection.php');
include('head.php');

?>


<body>

  <?php   
   include('navbar.php');
   include('slidearea.php');
    ?>
 


<!-- ✅ Our Offers Section -->
<div style="display: flex; align-items: flex-start;">

    <!-- ✅ الشريط الجانبي -->
    <div style="
        width: 250px;
        background-color: #f8f9fa;
        padding: 20px;
        border-right: 1px solid #ddd;
        font-size: 16px;
        position: sticky;
        top: 90px;
        height: fit-content;
        max-height: calc(100vh - 100px);
        overflow-y: auto;
        direction: rtl;
        text-align: left;">
        <?php include('slidebar.php'); ?>
    </div>

    <div style="flex: 1; padding: 30px;">
	
<h2 id="rooms-section" class="text-center" style="margin: 60px 0 30px; font-size: 30px; font-weight: bold;">OUR ROOM </h2>

        <div style="width: 100%; max-width: 950px; height: 250px; margin: 0 auto 40px; overflow: hidden; border-radius: 10px;">
		<img src="img/rooms/room.jpg" alt="Rooms Banner" style="width: 100%; height: 100%; object-fit: cover;">

        </div>

      
                <?php include('roomsitem.php'); ?>


        <h2 class="text-center" style="margin: 60px 0 30px; font-size: 30px; font-weight: bold;">OUR SERVICES</h2>

        <div style="width: 100%; max-width: 950px; height: 250px; margin: 0 auto 40px; overflow: hidden; border-radius: 10px;">
          		<img src="img/rooms/44.jpg" alt="Rooms Banner" style="width: 100%; height: 100%; object-fit: cover;">

        </div>

        <!-- SERVICES -->
       
                <?php include('ourserviesitem.php'); ?>

            

     

    </div> <!-- نهاية المحتوى الرئيسي -->

</div> <!-- نهاية الـ Flex كامل -->


    

   

    <!-- forQuery-->
    <?php
	include('forQuery.php');
	?>
 

    <!-- instragram_area>
  
    <?php
	include('insta.php');
	?>

    <!-- footer -->
   
    <?php
	include('footer.php');
	?>

    <!-- link that opens popup -->

    <!-- form itself end-->
        <form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Check Availability</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input id="datepicker" placeholder="Check in date">
                                    </div>
                                    <div class="col-xl-6">
                                        <input id="datepicker2" placeholder="Check out date">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Adult">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Children">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Room type">Room type</option>
                                            <option value="1">Laxaries Rooms</option>
                                            <option value="2">Deluxe Room</option>
                                            <option value="3">Signature Room</option>
                                            <option value="4">Couple Room</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>



</body>

</html>