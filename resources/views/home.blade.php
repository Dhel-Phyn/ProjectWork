<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatSystem</title>
    <link href="{{url('assets/css/home.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/nav.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>

        <nav>
            <ul>
                <li><a href="#" class="logo"> 
                <img src="assets/img/logo.jpg" alt="" >
                <span class="nav-item"><h4>Message System</h4></span>
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
                <li><a href="{{route('message.index')}}">
                    <i class="fas fa-envelope"></i>
                    <span class="nav-item">Message</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
            </ul>
        </nav>
        
        <!-- cards -->
        <div class="cardBox">
            <div class="card">
              <div>
                <div class="name">Today</div>
                <div class="cardname">HOD's meeting with the 300</div>
              </div>
              <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
              </div>
            </div>
  
            <div class="card">
              <div>
                <div class="name">2000</div>
                <div class="cardname">Traineers So Far</div>
              </div>
              <div class="iconBx">
                <ion-icon name="person"></ion-icon>
              </div>
            </div>
  
            <div class="card">
              <div>
                <div class="name">250</div>
                <div class="cardname">Events</div>
              </div>
              <div class="iconBx">
                <ion-icon name="ribbon"></ion-icon>
              </div>
            </div>
  
            <div class="card">
              <div>
                <div class="name">20</div>
                <div class="cardname">Staffs</div>
              </div>
              <div class="iconBx">
                <ion-icon name="star"></ion-icon>
              </div>
            </div>
          </div>

          <!-- Daily Activities/Todo list -->
          <div class="dailyActive">
            <div class="cardHeader">
              <h2>Daily Activities</h2>
              <div class="row">
                <input type="text" id="inputbox" placeholder="Add to do"> 
                <button onclick="addTask()">Add</button>
              </div>
              <ul id="list-container">
                {{-- <li class="checked">Task 1</li>
                <li>Task 2</li>
                <li>task 3</li> --}}
              </ul>
            </div>

        </div>
      </div>
    </div>
    <script src="assets/js/home.js"></script>
</body>
</html>