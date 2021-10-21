<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <link rel="icon"  type="image/png"  href="./images/favicon.png" />
</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img
                      src="./images/register_img.jpg"
                      alt="Sample photo"
                      class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                    />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Student registration</h3>
              
                      <div class="form-outline mb-4 right-div">
                        <div class="login hidden">
                            <h4>Hello! Already registered? <a href="home.php">
                            <button class="sign-btn btn">Sign In!</button></a></h4>
                        </div>


                      <form method="post" id="signin" class="visible" action="register.php">
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" name="firstname"/>
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lastname"/>
                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="fathersname" />
                            <label class="form-label" for="form3Example1m1">Father's name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="username" required/>
                            <label class="form-label" for="form3Example1n1">User Name</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example8" class="form-control form-control-lg" name="password1" required/>
                        <label class="form-label" for="form3Example8">Password</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example8" class="form-control form-control-lg" name="password2" required/>
                        <label class="form-label" for="form3Example8">Confirm Password</label>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1m1" name="rollno" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m1">Roll No.</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="form3Example1n1" name="state" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">State</label>
                          </div>
                        </div>
                      </div>
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="f" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender" value="m" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="gender" id="otherGender" value="o"/>
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="date" id="form3Example1m1" class="form-control form-control-lg" name="dob" />
                            <label class="form-label" for="form3Example1m1">DOB</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="number" id="form3Example1n1" class="form-control form-control-lg" name="mobile" required/>
                            <label class="form-label" for="form3Example1n1">Mobile</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="email" id="form3Example97" class="form-control form-control-lg" name="email" />
                        <label class="form-label" for="form3Example97">Email ID</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <button type="button" class="btn btn-light btn-lg">Reset all</button>
                        <button type="submit" class="btn btn-warning btn-lg ms-2" name="reg_user">Submit form</button>
                      </div>
                    </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>