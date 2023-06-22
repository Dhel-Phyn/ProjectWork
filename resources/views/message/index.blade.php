<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{url('assets/css/message.css')}}" rel="stylesheet">
  <title>Message</title>
</head>
<body>
  {{-- Message Container --}}
    <div class="container">
      <h1>Send Messages</h1>
      <div class="contact-box">
        <div class="contact-left">
          <h3>Message</h3>
          {{-- Senders Details --}}
            <form>
              <div class="input-row">
                <div class="input-group">
                  <label>Sender Id</label>
                  <select name="department" id="department">
                    <option value=""> --Select a sender Id-- </option>
                    <option value="">FAST</option>
                    <option value="">FASS</option>
                    <option value="">FNBE</option>
                    <option value="">FOE</option>
                    <option value="">BUS</option>
                    <option value="">FAD</option>
                  </select>
                </div>
                {{-- Name,Phone --}}
                <div class="input-group">
                  <label>Name</label>
                  <input type="text" placeholder="Jane">
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
                  <input type="email" placeholder="gmail.com">
                </div>

              </div>

              <label>Message</label>
              <textarea rows="5" placeholder="Your Message"></textarea>

              <button type="submit">Send</button>
            </form>
        </div>  
        {{-- Right Side --}}
        <div class="contact-right">
          <h3>Recent Message</h3>
        </div>
      </div>
    </div>
</body>
</html>