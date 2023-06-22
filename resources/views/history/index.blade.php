<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>History</title>
</head>
<body>
  <div class="container">
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
</body>
</html>