<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
  </head>
  <body>
    <p>Send Email</p>
    <form class="contact-form" action="contactform.php" method="post">
      <input type="text" name="name" placeholder="Full name" value="">
      <input type="text" name="mail" placeholder="Your e-mail" value="">
      <input type="text" name="subject" placeholder="Subject" value="">
      <textarea name="message" placeholder="Message" value=""></textarea>
      <button type="submit" name="submit">Submit</button>

    </form>

  </body>
</html>
