<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDO OOP CRUD using Bootstrap</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  
  <style type="text/css">
/*.label {
  width:100px;
  text-align:right;
  float:left;
  padding-right:10px;
  font-weight:bold;
}
#form label.error {
  color:#FB3A3A;
  font-weight:bold;
}
h1 {
  font-family: Helvetica;
  font-weight: 100;
  color:#333;
  padding-bottom:20px;
}*/
</style>
  <!-- Load jQuery and the validate plugin -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#form").validate({
    
        // Specify the validation rules
        rules: {
            first_name: "required",
            last_name: "required",
            email_id: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            }
        },
        
        // Specify the validation error messages
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            mobile: "Please enter valid mobile number",
            email_id: "Please enter a valid email address"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script> 
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <!-- <div class="navbar-header">
            <a class="navbar-brand" href="http://cleartuts.blogspot.com" title='Programming Blog'>CLEARTUTS</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/CRUD">CRUD</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/PDO">PDO</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/jQuery">jQuery</a>
        </div> -->
 
    </div>
</div>