<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link href="{{url('assets/css/calendar.css')}}" rel="stylesheet">
  <title>Calendar</title>
</head>
<body>
  
    <nav>
        <ul>
            <li><a href="#" class="logo"> 
            <img src="assets/img/logo.jpg" alt="" >
            <span class="nav-item"><h4>Chat System</h4></span>
            </a></li>
            <li><a href="{{route('Home.index')}}">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="{{route('faculty.index')}}">
                <i class="fas fa-university"></i>
                <span class="nav-item">Faculty</span>
            </a></li>
            <li><a href="{{route('calendar.index')}}">
                <i class="fas fa-calendar-alt"></i>
                <span class="nav-item">Calender</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-history"></i>
                <span class="nav-item">History</span>
            </a></li>
            <li><a href="messages.html">
                <i class="fas fa-envelope"></i>
                <span class="nav-item">Message</span>
            </a></li>
            <li><a href="#">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
            </a></li>
        </ul>
    </nav>
    
  <div class="container">
    <div class="calendar light">
      <div class="calendar_header">
        <h1 class = "header_title">Welcome Back</h1>
        <p class="header_copy"> Calendar Plan</p>
      </div>
      <div class="calendar_plan">
        <div class="cl_plan">
          <div class="cl_title">Today</div>
          <div class="cl_copy">22nd  April  2018</div>
          <div class="cl_add">
            <i class="fas fa-plus"></i>
          </div>
        </div>
      </div>
      <div class="calendar_events">
        <p class="ce_title">Upcoming Events</p>
        <div class="event_item">
          <div class="ei_Dot dot_active"></div>
          <div class="ei_Title">10:30 am</div>
          <div class="ei_Copy">Monday briefing with the team</div>
        </div>
        <div class="event_item">
          <div class="ei_Dot"></div>
          <div class="ei_Title">12:00 pm</div>
          <div class="ei_Copy">Lunch for with the besties</div>
        </div>
        <div class="event_item">
          <div class="ei_Dot"></div>
          <div class="ei_Title">13:00 pm</div>
          <div class="ei_Copy">Meet with the client for final design <br> @foofinder</div>
        </div>
        <div class="event_item">
          <div class="ei_Dot"></div>
          <div class="ei_Title">14:30 am</div>
          <div class="ei_Copy">Plan event night to inspire students</div>
        </div>
        <div class="event_item">
          <div class="ei_Dot"></div>
          <div class="ei_Title">15:30 am</div>
          <div class="ei_Copy">Add some more events to the calendar</div>
        </div>
      </div>
    </div>
  
 
</body>
</html>