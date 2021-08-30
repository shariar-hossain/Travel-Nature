<?php  
session_start();
include "../control/db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ---------------------- link boostrap ------------------------------ -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Booked Packages</title>
    


</head>
<body>


<!-- ---------------------- table----------------------------------- -->

<section class="container py-4 table-responsive">

<table class="table table-striped text-center" id="myTable">
  <thead class="table-dark">
      <tr>
        <th scope="col">Booking Id</th>
        <th scope="col">User Id</th>
        <th scope="col">Booking Date</th>
        <th scope="col">Location</th>
        <th scope="col">Schedule</th>
        <th scope="col">Status</th>
        <th scope="col"> </th>
      </tr>
  </thead>
  <tbody>
    <?php
     $i=0;
        $session_id = $_SESSION['id'];
        $sql = "Select 	id , user_id, dateTime, package, schedule, status from booking where user_id = '$session_id' ORDER BY schedule";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = $result->fetch_assoc()){
                echo "<tr id='{$i}'> <td class='row-data'> {$row["id"]} </td> <td class='row-data'> {$row["user_id"]} </td> <td> {$row["dateTime"]} </td> <td class='row-data'> {$row["package"]} </td> <td> {$row["schedule"]}   </td><td> {$row["status"]}   </td> <td><button type='button' class='btn btn-danger rounded-1 cancel-btn' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='cancleBooking()' ><i class='far fa-times-circle me-1'></i>Cancel</button>  </td> </tr>";
              $i++;
            }
        }
    
    ?>
  </tbody>
</table>

<!-- ------------------------- modal------------------------------------ -->
<form method="POST" action="../control/booking_cancel_controller.php" class="text-light">
    <div class="modal fade text-secondary" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Are you sure you want to cancel this Booking?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="model-body container mb-3">
                  <label for="disabledTextInput" class="form-label">Booking Id</label>
                  <input type="text" name="bookingId"  readonly="readonly" id="bookingId" class="form-control" value="1">
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-light me-3" data-bs-dismiss="modal"><i class="far fa-times-circle me-1"></i>Close</button>
                    <button type="submit" class="btn btn-success text-light"><i class="far fa-check-circle me-1"></i>Confirm</button>
                  </div>
              </div>
          </div>
    </div>
</form>


</section>



 <!-- ------------------------ strip ------------------------------- -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



 <script>

function cancleBooking(){
  var rowId =event.target.parentNode.parentNode.id;

  var data = document.getElementById(rowId).querySelectorAll(".row-data"); 

   var id = data[0].innerHTML;
   document.getElementById("bookingId").value = id;

}

</script>
</body>
</html>



<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold fs-3" href="#">
                              <img src="" alt="" width="40" height="40" class="d-inline-block align-text-top me-2" /> <span>Travel Nature</span>
                          </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item mx-2 fs-5">
                        <a class="nav-link active  navbar-shortcutlink current-page" aria-current="page" href="welcome.php">Home</a>
                      </li>
                      <li class="nav-item mx-2 fs-5">
                        <a class="nav-link active navbar-shortcutlink" aria-current="page" href="#">Schedule</a>
                      </li>
                      <li class="nav-item mx-2 fs-5 ">
                        <a class="nav-link active navbar-shortcutlink" aria-current="page" href="gallery.php">Booking</a>
                      </li>
                      <li class="nav-item mx-2 fs-5 ">
                        <a class="nav-link active navbar-shortcutlink" aria-current="page" href="#">Logout</a>
                      </li>           
                  </ul>
            </div>
      </div>
</nav> -->
