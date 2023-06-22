<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('assets/css/falculty.css')}}" rel="stylesheet">
    <title>Faculty</title>
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
    <div  class="container">
        <div class="box">
            <div class="icon">FAST</div>
            <div class="content">
                <h3>FAST</h3>
                <p>Faculty of Applied Sciencees and Technology</p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="icon">FAD</div>
            <div class="content">
                <h3>FAD</h3>
                <p>Faculty of Arts and Design</p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="icon">FOE</div>
            <div class="content">
                <h3>FOE</h3>
                <p>Faulty of Engineering</p>
                <a href="#">read more</a>
            </div>

        </div>

        <div class="box">
            <div class="icon">FNBE</div>
            <div class="content">
                <h3>FNBE</h3>
                <p>Faculty of Built and Natural Enivronment </p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="icon">FASS</div>
            <div class="content">
                <h3>FASS</h3>
                <p>Faculty of Applied Soical Sciences</p>
                <a href="#">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="icon">School of Business</div>
            <div class="content">
                <h3>HTU BUS SCH</h3>
                <p>HTU School of Business</p>
                <a href="#">read more</a>
            </div>

        </div>
    </div>
</body>
</html>