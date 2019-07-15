<?php
  $conn = mysqli_connect('localhost', 'root', '', 'demof');  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>


<body>
<section class="main-container">
    <h2 class="heading_s">Get your API id</h2>
</section>

<div class="container header">
    <div class="row">
        <div class="col-md-6 header-left">
            <i class="fab fa-canadian-maple-leaf fa-3x"></i>
        </div>
        <div class="col-md-6 header-right">
            <h4 style="text-transform: uppercase">Fill Your Details</h4>
        </div>
    </div>		
</div>
<div class="container content" id="mainform">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-content">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Mechent Id <span style="color: red">*</span>
              </div>
              <input type="text" placeholder="Mechent Id..." class="form-control" id="merchent_id" aria-label="Username" aria-describedby="basic-addon1" value = 'pspl123' required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">Email Id <span style="color: red">*</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              </div>
              <input type="text" placeholder="Email Id..." class="form-control" id="email_id" aria-label="Password" aria-describedby="basic-addon2" required>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">Mobile No. <span style="color: red">*</span> &nbsp;
                </div>
                <input type="text" placeholder="Mobile No...." class="form-control" id="mobile_no" aria-label="Password" aria-describedby="basic-addon2" required>
              </div>

            <div class="input-group mb-3">
                <button type="submit" class="btn btn-default" id = "submit" >Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready( function() {
    $('body').on( 'click', '#submit', function(e){
      e.preventDefault();
      var merchent_id = $("#merchent_id").val();
      var email_id = $("#email_id").val();
      var mobile_no = $("#mobile_no").val();
          
      if(merchent_id == '' || email_id == '' || mobile_no == ''){
        alert('Please fill the required fiels');
      }else{
        $.ajax({
            type : "POST",
            url : 'ajaxPage.php',
            data : { merchent_id : merchent_id, email_id : email_id, mobile_no : mobile_no  },
            success : function(){
             alert('success');   
            }
        });
      }

      
    });
  });

  // $(document).ready(function() {
  //   $('body').on('click', '#submit', function(e) {
  //     e.preventDefault();

  //     getApiKey();
  //   })
  // })
  
</script>