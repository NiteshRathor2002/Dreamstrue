<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top ">
    <div class="container-fluid ">
      <a class="navbar-brand  ms-5 fw-bold fs-3" href="#">DreamsTrue</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hotels.php">Hotels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">About us</a>
          </li>


      </div>
    </div>
  </nav>
  <!-------------------->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href="index.php #direct"><img src="images/upto.png" class="w-100"></a>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-primary" onclick="move()">Book Now</button>
        </div>
      </div>
    </div>
  </div>

  <!----------------Carousel------------->
  <div class="container-fluid">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/IMG_15372.png" class="w-100" />
        </div>
        <div class="swiper-slide">
          <img src="images/IMG_40905 (1).png" class="w-100" />
        </div>
        <div class="swiper-slide">
          <img src="images/IMG_40905.png" class="w-100" />
        </div>
        <div class="swiper-slide">
          <img src="images/IMG_62045.png" class="w-100" />
        </div>
        <div class="swiper-slide">
          <img src="images/IMG_93127.png" class="w-100" />
        </div>
      </div>
    </div>
    <!-------Check Availablity-form------>
    <div class="container check " id="direct">
      <div class="row mt-4 ">
        <div class="col-lg-15 bg-white shadow p-4 rounded">
          <p class="text-center  my-2">At [Your Company Name], we understand that finding the perfect hotel can make all
            the difference in your
            travel experience. Whether you're planning a relaxing vacation, a business trip, or a quick getaway, we have
            curated a selection of top-rated hotels to meet all your needs.</p>
          <h5 class="mb-4 text-center my-4"> Book now</h5>
          <form id="myForm" action="send.php" method="post">
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3 position-relative">
                <label class="form-label " style="font-weight:500;">Destination Place</label>
                <input type="text" id="search-input" class="form-control shadow-none"name="search" 
                  placeholder="Enter your destination" required>
                <ul id="suggestions-list" class="list-group suggestions-list mt-1"></ul>
              </div>
              <div class="col-lg-3 mb-3 position-relative">
                <label class="form-label " style="font-weight:500;"name="Checkin">Check-in</label>
                <input type="date" class="form-control shadow-none" required>
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label " style="font-weight:500;"name="checkout">Check-out</label>
                <input type="date" class="form-control shadow-none" required>
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label " style="font-weight:500;"name="adult">Adult</label>
                <select class="form-select shadow-none" required>
                  <option selected>Open this select menu</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                  <option value="3">5</option>
                  <option value="3">6</option>

                </select>
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label " style="font-weight:500;" name="children">children</label>
                <select class="form-select shadow-none" required>
                  <option selected>Open this select menu</option>
                  <option value="1">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>v
                  <option value="3">4</option>
                  <option value="3">5</option>
                </select>
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label " style="font-weight:500;"name="rooms">No.of rooms</label>
                <select class="form-select shadow-none" required>
                  <option selected>Open this select menu</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>


                </select>
              </div>

              <div class="col-lg-3 mb-3">
                <label class="form-label " style="font-weight:500;"name="Budget">Budget</label>
                <select class="form-select shadow-none" required>
                  <option selected>Open this select menu</option>
                  <option value="1">50$-100$</option>
                  <option value="1">100$-150$</option>
                  <option value="2">150$-250$</option>
                  <option value="3">250$-more</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button class="btn text-white shadow-none custom-bg" >Next</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="modal fade " id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Please fill Out Your Personal Information</h5>
            <!---
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>---->

          </div>
          <div class="modal-body">
            <form id="myFormm" action="send.php" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control"name="name" required>
              </div>
              <div class="form-group">
                <label for="number">Contact No.</label>
                <input type="tel" id="Number" class="form-control"name="Phone" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control"name="email" required>
              </div>
              <div class="form-group">
                <label for="location">Your Location</label>
                <input type="text" id="address" class="form-control"name="location" required>
              </div>

              <button type="submit" class="btn btn-primary my-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Thank You Modal -->
    <div class="modal fade backgr" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center">
          <div class="modal-body">
            <img src="images/Thank.png" alt="Thank You" class="thank-you-image w-100">

          </div>

        </div>
      </div>
    </div>
    <div class="container my-3 shadow-none bg-white">
      <div class="row ">
        <div class="col-12  offers mb-3 ">
          <img src="images/offers1.jpg" class="w-100">
        </div>
        <div class="col-12  offers mt-3">
          <img src="images/offers3.jpg" class="w-100">
        </div>
      </div>
    </div>
    <div class="container mt-3 bg-white shadow-none" id="contact">

      <div class="row p-3">
        <div class="col-12">
          <h1 class="text-center">Contact Us</h1>
        </div>
      </div>
      <div class="row d-flex ">
        <div class="col-lg-6 ">
          <img src="images/Web_Photo_Editor.jpg" class="w-100 h-100">
        </div>
        <div class="col-lg-6 ">
          <form id="myForm">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="message">Address</label>
              <textarea id="message" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-1">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <div class="container my-5">
      <h2 class="text-center my-2">
        See What Our clients Say about us
      </h2>
      <div class="swiper review">
        <div class="swiper-wrapper">
          <div class="swiper-slide text-center " width="50%">
            <div class="user-profile m-2">
              <img src="images/nitesh.webp" height="150px" width="150px" border-radius="50%" alt="user profile"
                class="rounded-circle my-2">
              <h2 class="">Sam</h2>
            </div>
            <p class="">We would like to express our sincere appreciation for the quality of service that your hotel
              provides. We are pleased with the hotel accommodations, as they are generally clean, tastefully furnished
              and well maintained.</p>
          </div>
          <div class="swiper-slide text-center">
            <div class="user-profile m-2">
              <img src="images/john.jpg" height="150px" width="150px" border-radius="50%" alt="user profile"
                class="rounded-circle my-2">
              <h2 class="">John Doe</h2>
            </div>
            <p class="">The staff was great. The receptionists were very helpful and answered all our questions. The
              room was clean and bright, and the room service was always on time. Will be coming back! Thank you so
              much for providing us Best hotel.”</p>
          </div>
          <div class="swiper-slide text-center">
            <div class="user-profile m-2">
              <img src="images/sinha.jpg" height="150px" width="150px" border-radius="50%" alt="user profile"
                class="rounded-circle my-2">
              <h2 class="">Raveena Sinha</h2>
            </div>
            <p class="">I recently had the pleasure of staying, and it was an unforgettable experience.
              From the moment I arrived, the staff went above and beyond to ensure my comfort and satisfaction. The
              luxurious accommodations, coupled with exceptional service, made my stay truly memorable. </p>
          </div>
        

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      </div>
    </div>

    <!------------Footer--------------->

    <footer class="bg-light  mt-5" id="footer">
      <div class="container pt-5">
        <div class="row text-center">
          <div class="col-md-4">
            <h5>About Us</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
          <div class="col-md-4">
            <h5>Contact Us</h5>
            <ul class="list-unstyled">
              <li>Email: example@example.com</li>
              <li>Phone: (123) 456-7890</li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>Follow Us</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-black "><i class="bi bi-facebook fs-3"></i></a></li>
              <li><a href="#" class="text-black"><i class="bi bi-twitter fs-3"></i></a></li>
              <li><a href="#" class="text-black"><i class="bi bi-instagram fs-3"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-12 text-center">
            <p>&copy; 2024 Your Company. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <?php require ('inc/script.php'); ?>
    <script>
      $(document).ready(function () {
        setTimeout(function () {
          $('#myModal').modal('show');
        }, 3000);
      });

      // Close the modal when the close button is clicked
      $(document).on('click', '.close', function () {
        $('#myModal').modal('hide');
      });
    </script>
</body>

</html>