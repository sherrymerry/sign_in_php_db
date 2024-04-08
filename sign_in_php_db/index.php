<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-....">
</head>
<style>

.error-message{
    color:red;
   }

#form3Example2c{
    margin-left: 24px;
    width: 95%;
     
}   
.form-label2{
    margin-left: 24px;
}

</style>

<body>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                
                <form class="mx-1 mx-md-4" id="my_form" action="function.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="name" />
                      <label class="form-label1" for="form3Example1c">Your Name</label>
                      <div id="nameError" class="error-message"></div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fa-solid fa-phone"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example2c" class="form-control" name="number" />
                      <label class="form-label2" for="form3Example1c">Your Number</label>
                      <div id="numberError" class="error-message"></div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="email" />
                      <label class="form-label3" for="form3Example3c">Your Email</label>
                      <div id="emailError" class="error-message"></div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" name="password" />
                      <label class="form-label4" for="form3Example4c">Password</label>
                      <div id="passError" class="error-message"></div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label5" for="form3Example4cd">Repeat your password</label>
                      <div id="reppassError" class="error-message"></div>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" onclick="validateForm()" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhNbsi2hUxRe4vd95iK_25mQszLmSuOn1Y6QDLvMKSaq6ovWbaqitR5v9E0AybPSZag0E2YfMgLKsCYTauiaILNAXRCmeBsr8dVCAuJ31ypSpgv0tRZesP7OmuJhYT26xHdfwmkAMN9HnteDEgke3o9kVVc2ITeiHyLhJhZAK5EOk1qB052vGZSrAe6zg/s1280/How-to-Create-a-Contact-Page-in-Your-Blogger-Website.png"
                  class="img-fluid" alt="Sample image">

                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

                  <script>
    // Create a script element
    var script = document.createElement('script');
    
    // Set the source attribute to the Font Awesome CDN URL
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js';
    
    // Append the script element to the head of the document
    document.head.appendChild(script);

    // $#{form3Example4cd }

  </script>


<script>
function validateForm(){

const name = document.getElementById('form3Example1c').value;
const number = document.getElementById('form3Example2c').value;
const email = document.getElementById('form3Example3c').value;
const pass = document.getElementById('form3Example4c').value;
const rep_pass = document.getElementById('form3Example4cd').value;



// if(pass !== rep_pass){
//     Swal.fire({
//   position: "top-end",
//   icon: "success",
//   title: "Your work has been saved",
//   showConfirmButton: false,
//   timer: 1500
// });

// }

// else{
//     Swal.fire({
//   icon: "error",
//   title: "Oops...",
//   text: "passwords didn't match!",

// })
// }

if(name.trim() === "" ){
    document.getElementById('nameError').innerHTML = "Please enter your name";
    
}


else if(number.trim() === "" ){
    document.getElementById('numberError').innerHTML = "Please enter your number";
}


else if(email.trim() === "" ){
    document.getElementById('emailError').innerHTML = "Please enter your email";
}

else if(pass.trim() === "" ){
    document.getElementById('passError').innerHTML = "Please enter your password";
}

else if(rep_pass.trim() === "" ){
    document.getElementById('reppassError').innerHTML = "Please enter repeat password";
}

else if(pass !== rep_pass){

  Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "passwords didn't match!",

});

}

else{

    document.getElementById('reppassError').innerHTML = "";
    document.getElementById("my_form").submit();

}

}


</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 

</body>
</html>
