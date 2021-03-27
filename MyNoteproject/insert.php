<?php
include 'database.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 

<!DOCTYPE html>
<html>
<head>
<style>
        <?php include "style.css" ?>
    </style>

<meta charset="UTF-8">
<title>Page Title</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;" >
<br><br>
<h1 class="text-center"> My Notes </h1>
  <form class="form-inline">
  </form>
</nav>

<div class="container">

  <div class="row">
  
    <div class="col">
    </div>
    <div class="col-10">
        <br><br>
        <form action="Confirm_insert.php" class="needs-validation" method="post" novalidate>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3 text-center">
                        <a href="index.php" class="btn btn-light fas fa-angle-double-left col-md-3 text-center" style="font-size: 2.5em; "></a>
                        </div>
                        <h5 class="col-md-6 text-center">
                            เพิ่ม
                        </h5>
                        <button class="btn btn-light far fa-save col-md-3 text-center" type="submit" style="font-size: 2.5em; "></button>
                        <?php 
                            
                        ?> 
                    </div>
                </div>

                <div class="card-body card border-primary">
                <div class="row">
                
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">เรื่อง</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="header"  maxlength="10" required>
                            <div class="invalid-feedback">
                                กรุณาใส่หัวข้อ
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">รายละเอียด</label>
                        <textarea class="form-control" rows="3" name="content" required></textarea>
                        <div class="invalid-feedback">
                                กรุณาใส่เนื้อหา
                        </div>
                    </div>        
            
                        <?php 
                        
                        ?>

                    </div>
                </div>
            
            </div>
        </form>
    </div>
    
    <div class="col"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script>
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html> 