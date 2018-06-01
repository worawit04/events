<!DOCTYPE html>
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
         <link rel="stylesheet" href="css/calendar.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
         <script src="js/calendar.js"></script>

        <!-- Le styles -->
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<script>

  $(document).ready(function() {
      var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    /*  className colors
    
    className: default(transparent), important(red), chill(pink), success(green), info(blue)
    
    */    
    
      
    /* initialize the external events
    -----------------------------------------------------------------*/
  
    $('#external-events div.external-event').each(function() {
    
      // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
      // it doesn't need to have a start or end
      var eventObject = {
        title: $.trim($(this).text()) // use the element's text as the event title
      };
      
      // store the Event Object in the DOM element so we can get to it later
      $(this).data('eventObject', eventObject);
      
      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });
      
    });
  
  
    /* initialize the calendar
    -----------------------------------------------------------------*/
    
    var calendar =  $('#calendar').fullCalendar({
      header: {
        left: 'title',
        center: 'agendaDay,agendaWeek,month',
        right: 'prev,next today'
      },
      editable: true,
      firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
      selectable: true,
      defaultView: 'month',
      
      axisFormat: 'h:mm',
      columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
      allDaySlot: false,
      selectHelper: true,
      select: function(start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.fullCalendar('renderEvent',
            {
              title: title,
              start: start,
              end: end,
              allDay: allDay
            },
            true // make the event "stick"
          );
        }
        calendar.fullCalendar('unselect');
      },
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function(date, allDay) { // this function is called when something is dropped
      
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');
        
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);
        
        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        
        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
        
      },
      
      events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 1)
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d-3, 16, 0),
          allDay: false,
          className: 'info'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d+4, 16, 0),
          allDay: false,
          className: 'info'
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          className: 'important'
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          className: 'important'
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d+1, 19, 0),
          end: new Date(y, m, d+1, 22, 30),
          allDay: false,
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/',
          className: 'success'
        }
      ],      
    });
    
    
  });

</script>
<style>

  body {
   
    
    font-size: 14px;
    font-family: 'Roboto', sans-serif;
    background-color: #f2f2f2;
    }
    
  #wrap {
    width: 1100px;
    margin: 0 auto;
    }
    
  #external-events {
    float: left;
    width: 150px;
    padding: 0 10px;
    text-align: left;
    }
    
  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
    }
    
  .external-event { /* try to mimick the look of a real event */
    margin: 10px 0;
    padding: 2px 4px;
    background: #3366CC;
    color: #fff;
    font-size: .85em;
    cursor: pointer;
    }
    
  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
    }
    
  #external-events p input {
    margin: 0;
    vertical-align: middle;
    }

  #calendar {
/*    float: right; */
        margin: 0 auto;
    width: 900px;
    background-color: #FFFFFF;
      border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
    -webkit-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
    }

</style>
</head>
<body>
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
                            <p style="display: inline-block;color: #9dc3d0;padding-right: 16px; font-size: 16px;margin-top: 15px;    font-family: 'source_sans_probold';">TH/EN</p>
                             <a href="login.php" type="button" class="btn btn-danger" style="margin-top: 4px;background-color: white;padding: 7px 12px;color: #2d6e84;text-transform: uppercase;font-family: 'fjalla_oneregular';  border-color: snow; ">Create Event</a>
                    </div>
                   
                </div> <!-- Menu --> 
              
            </div> <!-- Container --> 
        </div> 
        <p><p><p><br>
<div id='wrap'>

<div id='calendar'></div>

<div style='clear:both'></div>
</div>




<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


        

        
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


<div id="wrap">

<div id="calendar" class="fc fc-ltr"><table class="fc-header" style="width:100%"><tbody><tr><td class="fc-header-left"><span class="fc-header-title"><h2>March 2018</h2></span></td><td class="fc-header-center"><span class="fc-button fc-button-agendaDay fc-state-default fc-corner-left" unselectable="on">day</span><span class="fc-button fc-button-agendaWeek fc-state-default" unselectable="on">week</span><span class="fc-button fc-button-month fc-state-default fc-corner-right fc-state-active" unselectable="on">month</span></td><td class="fc-header-right"><span class="fc-button fc-button-prev fc-state-default fc-corner-left" unselectable="on"><span class="fc-text-arrow">‹</span></span><span class="fc-button fc-button-next fc-state-default fc-corner-right" unselectable="on"><span class="fc-text-arrow">›</span></span><span class="fc-header-space"></span><span class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled" unselectable="on">today</span></td></tr></tbody></table><div class="fc-content" style="position: relative;"><div class="fc-view fc-view-month fc-grid" style="position:relative" unselectable="on"><div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0"><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 386.319px; width: 122px; top: 67.1007px;"><div class="fc-event-inner"><span class="fc-event-title"><a href="detail.php" style="color:  white;">All Day Event</a> </span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end info" style="position: absolute; left: 514.097px; width: 122px; top: 173.646px;"><div class="fc-event-inner"><span class="fc-event-time">4p</span><span class="fc-event-title"><a href="detail.php" style="color:  white;">COOLSCULPTING EVENT</a> </span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end info" style="position: absolute; left: 514.097px; width: 122px; top: 35.9896px;"><div class="fc-event-inner"><span class="fc-event-time">4p</span><span class="fc-event-title">Repeating Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end important" style="position: absolute; left: 1.99655px; width: 123px; top: 35.9896px;"><div class="fc-event-inner"><span class="fc-event-time">10:30a</span><span class="fc-event-title">Meeting</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end important" style="position: absolute; left: 1.99655px; width: 123px; top: 63.9896px;"><div class="fc-event-inner"><span class="fc-event-time">12p</span><span class="fc-event-title">Lunch</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 130.764px; width: 122px; top: 35.9896px;"><div class="fc-event-inner"><span class="fc-event-time">7p</span> <span class="fc-event-title"><a href="detail.php" style="color:  white;">Supersports 10 Mile</a> </span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><a href="http://google.com/" class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end success" style="position: absolute; left: 258.542px; width: 249.778px; top: 490.313px;"><div class="fc-event-inner"><span class="fc-event-title">Click for Google</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></a></div><table class="fc-border-separate" style="width:100%" cellspacing="0"><thead><tr class="fc-first fc-last"><th class="fc-day-header fc-mon fc-widget-header fc-first" style="width: 128px;">Mon</th><th class="fc-day-header fc-tue fc-widget-header" style="width: 128px;">Tue</th><th class="fc-day-header fc-wed fc-widget-header" style="width: 128px;">Wed</th><th class="fc-day-header fc-thu fc-widget-header" style="width: 128px;">Thu</th><th class="fc-day-header fc-fri fc-widget-header" style="width: 128px;">Fri</th><th class="fc-day-header fc-sat fc-widget-header" style="width: 128px;">Sat</th><th class="fc-day-header fc-sun fc-widget-header fc-last">Sun</th></tr></thead><tbody><tr class="fc-week fc-first"><td class="fc-day fc-mon fc-widget-content fc-other-month fc-past fc-first" data-date="2018-02-26"><div style="min-height: 106px;"><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-past" data-date="2018-02-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-past" data-date="2018-02-28"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2018-03-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2018-03-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past" data-date="2018-03-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-sun fc-widget-content fc-past fc-last" data-date="2018-03-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-mon fc-widget-content fc-past fc-first" data-date="2018-03-05"><div style="min-height: 105.01px;"><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2018-03-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2018-03-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2018-03-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2018-03-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past" data-date="2018-03-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-sun fc-widget-content fc-past fc-last" data-date="2018-03-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-mon fc-widget-content fc-today fc-state-highlight fc-first" data-date="2018-03-12"><div style="min-height: 105.01px;"><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 56px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-future" data-date="2018-03-13"><div><div class="fc-day-number">13</div><div class="fc-day-content"><div style="position: relative; height: 56px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-future" data-date="2018-03-14"><div><div class="fc-day-number">14</div><div class="fc-day-content"><div style="position: relative; height: 56px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2018-03-15"><div><div class="fc-day-number">15</div><div class="fc-day-content"><div style="position: relative; height: 56px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2018-03-16"><div><div class="fc-day-number">16</div><div class="fc-day-content"><div style="position: relative; height: 56px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future" data-date="2018-03-17"><div><div class="fc-day-number">17</div><div class="fc-day-content"><div style="position: relative; height: 56px;">&nbsp;</div></div></div></td><td class="fc-day fc-sun fc-widget-content fc-future fc-last" data-date="2018-03-18"><div><div class="fc-day-number">18</div><div class="fc-day-content"><div style="position: relative; height: 56px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-mon fc-widget-content fc-future fc-first" data-date="2018-03-19"><div style="min-height: 105.01px;"><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-future" data-date="2018-03-20"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-future" data-date="2018-03-21"><div><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2018-03-22"><div><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2018-03-23"><div><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future" data-date="2018-03-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sun fc-widget-content fc-future fc-last" data-date="2018-03-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-mon fc-widget-content fc-future fc-first" data-date="2018-03-26"><div style="min-height: 105.01px;"><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-future" data-date="2018-03-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-future" data-date="2018-03-28"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-future" data-date="2018-03-29"><div><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-future" data-date="2018-03-30"><div><div class="fc-day-number">30</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-future" data-date="2018-03-31"><div><div class="fc-day-number">31</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td><td class="fc-day fc-sun fc-widget-content fc-other-month fc-future fc-last" data-date="2018-04-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 28px;">&nbsp;</div></div></div></td></tr><tr class="fc-week fc-last"><td class="fc-day fc-mon fc-widget-content fc-other-month fc-future fc-first" data-date="2018-04-02"><div style="min-height: 105.01px;"><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-future" data-date="2018-04-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-future" data-date="2018-04-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-future" data-date="2018-04-05"><div><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-future" data-date="2018-04-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-future" data-date="2018-04-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sun fc-widget-content fc-other-month fc-future fc-last" data-date="2018-04-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr></tbody></table></div></div></div>

<div style="clear:both"></div>
</div>
    </body>

    <br><br>
                 <div class="footer-wrapper " id="about" >
                    <div class="container" id="contact">
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
</html>