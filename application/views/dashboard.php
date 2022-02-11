<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

		  <div class="container-fluid">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <a class="navbar-brand" href="#"> <img src="https://img.icons8.com/bubbles/64/000000/google-tag-manager.png"/> GOAL TRACKER </a>
            <form class="d-flex">
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="navbar- navbar-expand-lg"  href="<?=base_url('profile')?>">Profile</a>
				</li> &#160;  &#160;  &#160;  &#160; -->
                <li class="nav-item">
                <a class="navbar- navbar-expand-lg"  href="<?=base_url('welcome/logout')?>">Logout</a>
				</li>
			 </ul>		    	        
		      </form>
		    </div>
		  </div>
		</nav>


<br>
&#160; &#160; &#160; <img src="https://img.icons8.com/external-kmg-design-flat-kmg-design/32/000000/external-user-user-interface-kmg-design-flat-kmg-design-2.png"/>
<?php 
if($this->session->userdata('UserLoginSession'))
{
    $udata = $this->session->userdata('UserLoginSession');
        echo 'Welcome'.' '.$udata['username'];
}
else
{
    redirect(base_url('welcome/login'));
}

echo "<body style='background-color: white'>";

 ?>


<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	


    <title>GOAL TRACKER LOGIN</title>
	<link rel="stylesheet" href="styles.css">

    <title>Calendar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
    
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>fullcalendar/load",
            selectable:true,
            selectHelper:true,
            select:function(start, end, allDay)
            {
                var title = prompt("Enter Event Title");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"<?php echo base_url(); ?>fullcalendar/insert",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }
            },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                var title = event.title;

                var id = event.id;

                $.ajax({
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Update");
                    }
                })
            },
            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"<?php echo base_url(); ?>fullcalendar/delete",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Removed');
                        }
                    })
                }
            }
            
        });
        
        
    });
    </script> 
</head>
        <br>
        <h2 align ="center"><a href="#">CALENDAR TRACKER</a></h2>
        <br>
        <div class="container" align="right">
            <div id="calendar"></div>
        </div>

        <textarea>This is a sticky note you can type and edit.</textarea>
        <div id="create">+</div> 
        <style>
                @import url(https://fonts.googleapis.com/css?family=Gloria+Hallelujah);

                * { box-sizing:border-box; }


                #create, textarea  { 
                float:left; 
                padding:25px 25px 40px;
                margin:0 20px 20px 0;
                width:250px;
                height:250px; 
                }

                #create {
                user-select:none;
                padding:20px; 
                border-radius:20px;
                text-align:bottom; 
                border:15px solid rgba(0,0,0,0.1); 
                cursor:pointer;
                color:rgba(0,0,0,0.1);
                font:220px "Helvetica", sans-serif;
                line-height:185px;
                }

                #create:hover { border-color:rgba(0,0,0,0.2); color:rgba(0,0,0,0.2); }

                textarea {
                font:20px 'Gloria Hallelujah', cursive; 
                line-height:1.5;
                border:0;
                border-radius:3px;
                background: linear-gradient(#F9EFAF, #F7E98D);
                box-shadow:0 4px 6px rgba(0,0,0,0.1);
                overflow:hidden;
                transition:box-shadow 0.5s ease;
                font-smoothing:subpixel-antialiased;
                max-width:520px;
                max-height:250px;
                }
                textarea:hover { box-shadow:0 5px 8px rgba(0,0,0,0.15); }
                textarea:focus { box-shadow:0 5px 12px rgba(0,0,0,0.2); outline:none; }
            </style>
            </body>
</html>