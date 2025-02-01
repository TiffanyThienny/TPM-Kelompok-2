<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecnospace</title>
  </head>
  <body>
    <div class="contact-us" id="contact-us-id">
      <h1 class="contact-us-header">Contact Us</h1>
      <form action="{{ route('createMessage') }}" method="POST">
        @csrf
        <div class="contact-submission-wrapper">
          <div class="left-wrapper">
            <div class="full-name">
              <h1 class="contact-us-text">Full Name</h1>
              <input class="left-contact-us-box" type="text" name="Nama" placeholder="Your name" id="contact-us-name">
              @error('Nama')
                <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="e-mail">
              <h1 class="contact-us-text">E-mail</h1>
              <input class="left-contact-us-box" type="email" name="Email" placeholder="Your e-mail" id="contact-us-email">
              @error('Email')
                <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="subject">
              <h1 class="contact-us-text">Subject</h1>
              <input class="left-contact-us-box" type="text" name="Subject" placeholder="Your subject" id="contact-us-subject">
              @error('Subject')
                <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="right-wrapper">
            <div class="message">
              <h1 class="contact-us-text">Message</h1>
              <textarea class="right-contact-us-box" name="Message" rows="4" cols="50" placeholder="Your Message" id="contact-us-message"></textarea>
              @error('Message')
                <p>{{ $message }}</p>
              @enderror
            </div>
            <button class="submit-contact-us" type="submit" id="submit-contact">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
