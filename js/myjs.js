function validateForm()
  {
      var name = document.getElementById("name").value;
      var cusid = document.getElementById("cusid").value;
      var email = document.getElementById("email").value;
      var pass = document.getElementById("pass").value;
      var gender = document.getElementById("gender").value;
      var blood = document.getElementById("blood").value;
      var loca = document.getElementById("loca").value;
      var number = document.getElementById("number").value;
      var dob = document.getElementById("dob").value;
      if(name == "" || cusid == "" || email == "" || pass == "" || gender == "" || blood == "" || loca == "" || number == "" || dob == "")
      {
        alert("Must Fillup This Form ")
        return false;
      }
  }
// function frontvalidateForm() 
//   {
//    var cusid = document.getElementById("cusid").value;
//    var password = document.getElementById("password").value;

//     if( cusid == "" || pass == "")
//       {
//         alert("Must Fillup Id and Password ")
//         return false;
//       }
//   }
  function showelement() 
  {
    $(document).ready(function(){var myElement = $("#wel");
      myElement.show();

  });
  }

  


    function getValues(searchInput) {
        var id = document.getElementById("getvalue").value;
        //console.log(id);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.status == 200 && this.readyState == 4) {
                document.getElementById("value").innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "../view/update_profile.php" , true);
        xhr.send();
    }

  function showmyfood() 
  {
  var fname=  document.getElementById("fname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("myfood").innerHTML = this.responseText;
    }
  else
  {
     document.getElementById("myfood").innerHTML = this.status;
  }
  };
  xhttp.open("POST", "../control/getfood.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname="+fname);


}