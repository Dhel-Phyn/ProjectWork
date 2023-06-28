<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{url('assets/css/message.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/nav.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <title>Message</title>
</head>
<body>
  {{-- NavBar --}}
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

  {{-- Message Container --}}
    <div class="container">
      <h1>Send Messages</h1>
      <div class="contact-box">
        <div class="contact-left">
          <h3>Message</h3>
          {{-- Senders Details --}}
            <form>
              <div class="input-row">
                {{-- <div class="input-group">
                  
                  <select name="department" id="department">
                    <option value=""> --Select a sender Id-- </option>
                    <option value="">FAST</option>
                    <option value="">FASS</option>
                    <option value="">FNBE</option>
                    <option value="">FOE</option>
                    <option value="">BUS</option>
                    <option value="">FAD</option>
                  </select>
                </div> --}}
                {{-- Name,Phone --}}
                <div class="input-group">
                  <input type="hidden" name="senderId">
                  <label for="username">Name</label>
                  <input type="text" name="username" id="username" placeholder="Jane">
                </div>
                <div class="input-group">
                  <label>Phone</label>
                  <input type="text" placeholder="+233">
                </div>

              </div>
              {{-- Recipient --}}
              <div class="input-row">
                <div class="input-group">
                  <label>Email</label>
                  <input type="email" placeholder="gmail.com">
                </div>
                <div class="input-group">
                  <label>Recipient</label>
                  {{-- <input type="email" placeholder="gmail.com"> --}}
                  <select name="" id="">
                    <option value="">Select a year</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                  </select>
                </div>

              </div>

              <label>Message</label>
              <textarea rows="5" placeholder="Your Message"></textarea>

              <div class="container-b">
                <input type="file" class="upload-box">
              </div>

              <button type="submit">Send</button>
            </form>
            
        </div>  

        {{-- Right Side --}}
        <div class="contact-right">
          <h3>Recent Message</h3>
          <div class="messageContainer">
            <div class="messageCard">
              <div class="head">
                <span class="from">FAST</span> - <span class="to">Year 1</span>
              </div>
              <div class="message"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In assumenda quasi perspiciatis porro nisi, tempore, numquam sit odit vel dolore mollitia, recusandae ullam architecto?</p>
              </div>
            </div>
            <div class="messageCard">
              <div class="head">
                <span class="from">FAST</span> - <span class="to">Year 1</span>
              </div>
              <div class="message"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In assumenda quasi perspiciatis porro nisi, tempore, numquam sit odit vel dolore mollitia, recusandae ullam architecto?</p>
              </div>
            </div>
            <div class="messageCard">
              <div class="head">
                <span class="from">FAST</span> - <span class="to">Year 1</span>
              </div>
              <div class="message"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In assumenda quasi perspiciatis porro nisi, tempore, numquam sit odit vel dolore mollitia, recusandae ullam architecto?</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
</body>
</html>