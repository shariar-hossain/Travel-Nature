<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Saint Martin</title>
  <!-- ---------------------- link boostrap ------------------------------ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">



	<link rel="stylesheet" type="text/css" href="../css/style(packages).css">

</head>

<body>

  <header id="main">

    <nav>

      <div class="heading">
        <h2>Travel Nature</h2>
      </div>

      <ul class="menu">
        <li><a href="#booked">Booked</a></li> 
        <li><a href="gallery.php">Back</a></li> 
      </ul>

    </nav>

  </header>

  <div class="content">

    <div class="image"></div>

    <div class="main-text">
      <h1>Bandarban</h1>
      <h3>Details</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <a href="#" class="book-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</a>

    </div>

  </div>


  <form action="../control/travel_booking_controller.php" method="POST">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Package Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="mb-3">
                       <input
                        name="travelPackageName"
                        type="text"
                        class="form-control"
                        
                        readonly="readonly"
                        value="Bandarban"
                        />
                      <label
                      for="exampleInputDate"
                      class="form-label"
                      >Date</label
                        >
                        <input
                        name="travelDate"
                        type="date"
                        class="form-control"
                        id="travelDate"
                        />
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
</form>

 <!-- ------------------------ strip ------------------------------- -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>