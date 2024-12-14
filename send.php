<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $location = htmlspecialchars($_POST["location"]);
    $search = htmlspecialchars($_POST["search"]);
    $checkin = htmlspecialchars($_POST["checkin"]);
    $checkout = htmlspecialchars($_POST["checkout"]);
    $adult = htmlspecialchars($_POST["adult"]);
    $children = htmlspecialchars($_POST["children"]);
    $rooms = htmlspecialchars($_POST["rooms"]);
    $Budget = htmlspecialchars($_POST["Budget"]);

    $to = "skr7065603126@gmail.com";//enter your email address where you want to send your message 
    $subject = "New Enquiry received from Hotels website";

    $body = "
     <html>
     <head>
     <title>Enquiry</title>
     </head>
     <body>
     <div class='container'>
     <div class='header'>  <h2>New Enquiry Form Submission from Hotel Website</h2></div>
     <div class='content'>
     <p class='title'>You have received a new message from the contact form on your website. Here are the details:</p>
     <table>
     <tr>
     <th>Name</th>
     <td>$name</td>
     </tr>
     <tr>
     <th>Phone No.</th>
     <td>$phone</td>
     </tr>
     <tr>
     <th>email</th>
     <td><a href='mailto:$email'>$email</a></td>
     </tr>
     <tr>
     <th>Address</th>
     <td>$location</td>
     </tr>
     <tr>
     <th>Destination</th>
     <td>$search</td>
     </tr>
     <tr>
     <th>Check-in Date</th>
     <td>$checkin</td>
     </tr>
     <tr>
     <th>Check-out Date</th>
     <td>$checkout</td>
     </tr>
     <tr>
     <th>No. of Adult</th>
     <td>$adult</td>
     </tr>
     <tr>
     <th>No.of Children</th>
     <td>$children</td>
     </tr>
     <tr>
     <th>Require No.of rooms</th>
     <td>$rooms</td>
     </tr>
     <tr>
     <th>Budegt</th>
     <td>$Budget</td>
     </tr>
   <p>Please respond to this message as soon as possible.</p>
     </table>
     </div>
      <div class='footer'>
                &copy; " . date("Y") . " Hotel Website name. All rights reserved.
            </div>
     </div>
     </body>
     </html>";
    // Set content-type for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent!";
    } else {
        echo "Email sending failed.";
    }


}
?>