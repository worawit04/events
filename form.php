<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Zip Phuket </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

         <link rel="stylesheet" href="css/form.css">


        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

<body style="
    background-color: #f2f2f2;
">


<div class="pp">
<div class="header-wrapper">
        
            <div class="container">
                <div class="logo">
                    <h1>ZipPhuket</h1>
                </div>
                <div class="menu">
                       <div class="navbar" style=" border: 0px solid transparent; ">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="">
                                <ul class="nav">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php">Events</a></li>
                                    <li><a href="calendar.php">Calendar</a></li>
                                    <li>
                                        <div class="site-name">
                                            <h1>Zip.Phuket</h1>
                                        </div> 
                                    </li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="index.php">Blog</a></li>
                                    <li><a href="#contact">Contact</a></li>                          
                                </ul>


                            </div><!--/.nav-collapse -->
                    </div>

                      <div class="create" style="display: inline-block;position: absolute;right: 45px">
                            <p style="display: inline-block;color: #9dc3d0; padding-right: 16px; font-size: 16px;margin-top: 15px;    font-family: 'source_sans_probold';">TH/EN</p>
                             <a href="form.php" type="button" class="btn btn-danger" style="margin-top: 4px;background-color: white;padding: 7px 12px;color: #2d6e84;text-transform: uppercase;font-family: 'fjalla_oneregular'; border-color: snow; ">Create Event</a>
                    </div>
                   
                </div> <!-- Menu --> 
              
            </div> <!-- Container --> 
        </div> 

        </div>  <!-- PP --> 
        <p><p><p><br>

<div class="container">
        <div class="row">
        <br>
<div class="panel panel-default">
  <div class="panel-heading" style=" background-color: #8eaeb9;border-color: #8eaeb9;">
      <center style="color: #f9feff;text-transform: uppercase;font-family: 'fjalla_oneregular';font-size: 20px;"> 
      Create Your Event</center>
  </div>
<div class="panel-body" style="
    background-color: #fbfbfb;;
">
  <div class="col-md-10 col-md-offset-1">
          <form role="form" method="POST" action="#">
<div class="panel panel-default">
<div class="panel-body">
              <fieldset>
                 <legend style="font-size: 18px; font-weight: 700; text-transform:uppercase">Events </legend>

                  <div class="form-group col-md-12">
                     <label for="" style="font-weight: 100;font-size: 16px;">Event Title</label>
                      <input type="email" class="form-control" name="" id="" placeholder="SUPERSPORTS 10 MILE INTERNATIONAL RUN PHUKET 2018" style="height: 33px;">
                  </div>

            
                  <div class="form-group col-md-12">
                      <label for="" style="font-weight: 100;font-size: 16px;">Event Details</label>
<div class="Dis">                     
<textarea class="form-control" id="dis" name="dis" rows="10" cols="40" placeholder="Thanyapura and Supersports are organizing the 4th edition of the Supersports 10-Mile Run. The Phuket race takes runners through Phuket’s beautiful lush settings, stunning sunrises, and backroads on the island’s northern side. The unique race is inspired by track and field’s earliest days in ancient Greece, when Olympians measured contested races in feet and miles (the original marathon race was 26 miles and 385 yards). 

RACE INFORMATION
Event Date: 24-25 March 2018-
Entry Deadline: 17 March 2018
Early Bird Prices validate until: 10 January 2018" ></textarea>
</div>
                  </div>
 
                  <div class="form-group col-md-6">
                      <label for="confirm_password"  style="font-weight: 100;font-size: 16px;" >Upload Image</label>
                         <div class="input-group image-preview">
                         <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                          <span class="input-group-btn">
                            <!-- image-preview-clear button -->
                          <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                             <span class="glyphicon glyphicon-remove"></span> Clear
                         </button>
                     <!-- image-preview-input -->
                     <div class="btn btn-default image-preview-input">
                      <span class="glyphicon glyphicon-folder-open"></span>
                       <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                        </div>
                      </span>
                          </div><!-- /input-group image-preview [TO HERE]--> 
                  </div>

                    <div class="form-group col-md-6">
                            <label for="found_site"  style="font-weight: 100;font-size: 16px;">Category Event</label>
                            <select class="form-control" name="" id="found_site">
                                <option>Business</option>
                                <option>Food&Drink</option>
                                <option>Health</option>
                                <option>Music</option>
                                <option>Sport&fitness</option>
                                <option value="other" >Other</option>
                            </select>
                    </div>

</div>
</div>


          </fieldset>

<div class="panel panel-default">
<div class="panel-body">
          <fieldset>
              <legend style="font-size: 18px; font-weight: 700;  text-transform:uppercase " >Date & Time</legend>
                      <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="first_name"  style="font-weight: 100;font-size: 16px;">Year-Month-Day</label>
                          <input type="text" class="form-control" name="" id="first_name" placeholder="2018-03-19" style="width: 100px;">
                        </div>

                        <div class="col-md-3">
                            <label for="last_name"  style="font-weight: 100;font-size: 16px;">Time Start</label>
                            <input type="text" class="form-control" name="last_name" id="" placeholder="08:00 AM" style="width: 100px;">
                        </div> 
                        <div class="col-md-3">
                            <label for="first_name"  style="font-weight: 100;font-size: 16px;">Year-Month-Day</label>
                            <input type="text" class="form-control" name="" id="first_name" placeholder="2018-03-20" style="width: 100px;">
                        </div>

                        <div class="col-md-3">
                            <label for="last_name"  style="font-weight: 100;font-size: 16px;" >Time End</label>
                            <input type="text" class="form-control" name="last_name" id="" placeholder="17.00 PM" style="width: 100px;">
                        </div>
                      </div>
                      <div class="col-md-12">
                      <p style="padding-left: 17px;" > This event is from 08:00 AM to 17.00 PM on 2018-03-19 </p>
                        
                      </div>


                </fieldset>
</div>
</div>

<div class="panel panel-default">
<div class="panel-body">
          <fieldset>
        <legend style="font-size: 18px; font-weight: 700; text-transform:uppercase "> Location </legend>
            <div class="col-md-12">
                

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;" >Venue Name:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="Thanyapura" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;" >Address:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="120/1" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group1">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;" >City:</label>  
  <div class="col-md-6" style=" margin-top: 14px; margin-bottom: 25px;">
    <select class="form-control" name="" id="found_site" style="    width: 84%;">
                                <option>Kathu</option>
                                <option>Muang</option>
                                <option>Thalang</option>
                           
                            </select>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;" >Province:</label>  
  <div class="col-md-6">
  <input id="requestid" disabled="disabled" name="reqid" placeholder="Phuket" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;">Postal Code:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="83110" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-6 control-label" for="requestid">Country:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="Thailand" class="form-control input-md" required="" type="text">
    
  </div>
</div>
 -->



<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;">Phone:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="076-251664" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-6 control-label" for="dis"  style="font-weight: 100;font-size: 16px;">Descriptions</label>
  <div class="col-md-6">                     
   <!--  <textarea class="form-control" id="dis" placeholder="Opposite airport" name="dis"> </textarea> -->

      <div class="Dis1">                     
              <textarea class="form-control" id="dis" name="dis1" rows="2" cols="10" placeholder="Opposite airport" style="
    width: 84%;
"></textarea>
      </div>
  </div>
</div>



</fieldset><!-- Location -->

</div>
</div>


<div class="panel panel-default">
<div class="panel-body">
<fieldset>
        <legend style="font-size: 18px; font-weight: 700; text-transform:uppercase "> Organizer </legend>
            <div class="col-md-12">
                

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;">Organizer Name:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="Thanyapura" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;">Phone:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="076-389-355 " class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;">Facebook:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="https://www.facebook.com/Thanyapura/" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;">Instagram :</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="https://www.instagram.com/thanyapuraphuket/" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="requestid" style="font-weight: 100;font-size: 16px;">Website:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="www.thanyapura.com/" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="requestid"  style="font-weight: 100;font-size: 16px;">E-mail:</label>  
  <div class="col-md-6">
  <input id="requestid" name="reqid" placeholder="info@Thanyapura.com" class="form-control input-md" required="" type="text">
    
  </div>
</div>
  <div class="form-group col-md-6">
                      <label for="confirm_password"  style="font-weight: 100;font-size: 16px;">Upload Logo</label>
                         <div class="input-group image-preview">
                         <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                          <span class="input-group-btn">
                            <!-- image-preview-clear button -->
                          <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                             <span class="glyphicon glyphicon-remove"></span> Clear
                         </button>
                     <!-- image-preview-input -->
                     <div class="btn btn-default image-preview-input">
                      <span class="glyphicon glyphicon-folder-open"></span>
                       <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                        </div>
                      </span>
                          </div><!-- /input-group image-preview [TO HERE]--> 
                  </div>

</fieldset><!-- Organizer  -->

</div>
</div>



<!--  <fieldset>
                  <legend>category event </legend>

                  <div class="form-group col-md-6">
                      <label for="country"><strong>Category event </strong></label>
                      <select class="form-control" name="" id="country">
                          <option>Heath</option>
                          <option>Country 2</option>
                          <option>Country 3</option>
                      </select>
                  </div>

                  <div class="form-group col-md-12">
                      <label for="found_site">How did you find out about the site?</label>
                      <select class="form-control" name="" id="found_site">
                          <option>Health</option>
                          <option>Friend</option>
                          <option>Colleague</option>
                          <option>Advertisement</option>
                          <option>Google Search</option>
                          <option>Online Article</option>
                          <option value="other" >Other</option>
                      </select>
                  </div>

                  <div class="form-group col-md-12 hidden">
                      <label for="specify">Please Specify</label>
                      <textarea class="form-control" id="specify" name=""></textarea>
                  </div>

</fieldset> 
 -->
                <!--         <fieldset>
                        <legend>Optional Details</legend>

                        <div class="form-group col-md-6">
                            <label for="country">Country of Residence</label>
                            <select class="form-control" name="" id="country">
                                <option>Country 1</option>
                                <option>Country 2</option>
                                <option>Country 3</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="found_site">How did you find out about the site?</label>
                            <select class="form-control" name="" id="found_site">
                                <option>Health</option>
                                <option>Friend</option>
                                <option>Colleague</option>
                                <option>Advertisement</option>
                                <option>Google Search</option>
                                <option>Online Article</option>
                                <option value="other" >Other</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12 hidden">
                            <label for="specify">Please Specify</label>
                            <textarea class="form-control" id="specify" name=""></textarea>
                        </div>

                    </fieldset>  -->

          <div class="form-group">
              <div class="col-md-12">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" value="" id="">
                          I accept the <a href="#">terms and conditions</a>.
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-12">
                 <!--  <button type="submit" class="btn btn-primary">
                    CREAT EVENT
                  </button> -->

                    <a href="detail.php" type="button" class="btn btn-danger" onclick="myFunction()" style=" margin-top: 4px;background-color: #428bca;    padding: 7px 12px; border-color: snow;  " >Create Event</a>
                  <a href="#">Already have an account?</a>
              </div>
          </div>

      </form>
  </div> <!-- col-md-8 col-md-offset-2 -->

</div>
</div>


 </div> <!--row -->
</div> <!-- Container --> 
<br><br>

   <div class="footer-wrapper " id="about" >
                    <div class="container" id="contact"  >
                        <div class="site-footer">
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="block">
                                        <h1>About Me</h1>
                                        <ul>
                                            <li><a href="#">ZipPhuket is an event community built around passionate event goers, amicable exhibitors and professional organizers. Over a million people, from every part of Thailand and neighboring countries, have joined ZipPhuket.</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="block">
                                        <h1>SUBSCRIBE</h1>
                                        <ul>
                                         <!--    <li><a href="#"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d433868.0837064906!2d35.66744174160663!3d31.836036762053016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5fb85d7981af%3A0x631c30c0f8dc65e8!2sAmman!5e0!3m2!1sen!2sjo!4v1499168051085" sytle="" frameborder="0" style="border:0" allowfullscreen></iframe></a></li> -->
                                            <li><a href="#">Sign up for updates on </a></li>
                                            <li><a href="#">all our future events</a></li>
                                            <li><a href="http://youtube.com"><button type="submit" class="btn btn-default" style="background: #d81212;color: #ffffff;box-shadow: none;text-shadow: none;border: none;padding: 8px;text-transform: uppercase;font-family: 'fjalla_oneregular';">Subscribe</button></a></li>
                                         
                                        </ul>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="block">
                                        <h1>contact Us</h1>
                                        <ul>
                                            <li><a href="#">Working : Monday-Friday 10:00-18:00</a></li>
                                            <li><a href="#">Email : support@zipphuket.com </a></li>
                                            <li><a href="#">Call Center : 02 058 5150, 098 047 5657</a></li>
                                            <li><a href="#"> Address : Prince of Songkla University Phuket Campus, 80 Moo 1 Vichitphong Road, Kathu, Phuket 83120 Thailand </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="block">
                                        <h1>Follow Us</h1>
                                        <ul>
                                          <li>
                                               <img src="img/facebook1.png" alt="" style="width: 36px;border: 1px solid #f9b701;">
                                                <div class="info">
                                                 <a href="https://www.facebook.com/">zip@companyname.com</a>
                                                </div>
                                            </li>
                                            
                                            <li> 
                                                <img src="img/instagram1.png" alt="" style="width: 36px;border: 1px solid #f9b701;">
                                                
                                                <div class="info">
                                                 <a href="https://www.instagram.com/"> www.instagram.com/zip</a>
                                                </div>
                                            </li>


                                             <li>
                                               <img src="img/Twitter-icon.png" alt="" style="width: 36px;border: 1px solid #f9b701;">
                                                <div class="info">
                                                 <a href="https://twitter.com/">twitter.com/zip</a>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copy-rights">
                        Copyright © The Zipphuket Co, Ld. Travelinphuket 2018. All right reserved:
                            <strong><a href="http://stdproject.te.psu.ac.th/stdgrp40/events/">  www.zipphuket.com</a></strong>
                        </div>
                    </div>
                </div>

        








<script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>


<script>
    
    $('#openBtn').click(function(){
    $('#myModal').modal({show:true})
});$('#myTab a').click(function (e) {
     e.preventDefault();
     $(this).tab('show');
});

$(function () {
$('#myTab a:last').tab('show');
})
$("[data-toggle=tooltip]").tooltip();
$("[data-toggle=popover]").popover();
$(".alert").delay(200).addClass("in").fadeOut(3500);

$(".alert").addClass("in").fadeOut(3500);

$('.typeahead').typeahead({
    source: function (typeahead, query) {
     /* put your ajax call here..
     return $.get('/typeahead', { query: query }, function (data) {
        return typeahead.process(data);
     });
     */
     return ['alpha','beta','bravo','delta','epsilon','gamma','zulu'];
    }
});
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
</script>

<script>
  $(document).ready(function() {
    $('#found_site').on('change', function() {
       $(this).val() == "other" ? $('#specify').closest('.form-group').show() : $('#specify').closest('.form-group').hide();
    })
})
</script>

<script>
  $(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>

<script>
function myFunction() {
    alert("We will send an email to confirm  your event!");
}
</script>

    </body>
</html>
