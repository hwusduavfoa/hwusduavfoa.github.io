  <?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailheader = "From: ".name." <".$email.">\r\n";

  $recipient ="zirolmfao@gmail.com";

  mail($recipient, $subject, $message, $mailheader)
  or die("Error!")

  echo'
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Martian+Mono&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Thank you for contacting me I will get back to you as soon as possible!</h1>
      <p class="back">Go back to the <a href="index.html">contact homepage</a>.</p>
    
    </div>
  </body>
  </html>
  ';





  ?>