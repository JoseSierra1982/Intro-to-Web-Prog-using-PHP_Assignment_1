<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Georgian Bank Portal</title>
  <meta name="description" content="This week we will be using OOP PHP to create and read with our CRUD application">
  <meta name="robots" content="noindex, nofollow">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap"
    rel="stylesheet">
</head>

<body>
  <main>
    <?php
    // start by including our classes
    
    include ('validate.php');
    require_once ('bank_connect.php');
    // create our class objects
    $valid = new validate();

    if (!empty($_POST['Submit']))
    {
      // using our escape_string function
      $customer = $_POST['customer'];
      $email = $_POST['email'];
      $bank_id = $_POST['bank_id'];
      $bank_acct = $_POST['bank_acct'];
      $balance = $_POST['balance'];
      // using our functions found in our validate class 
      // (checkEmpty validAge validEmail)
      // $msg = $valid->checkEmpty($_POST, array('name', 'age', 'email'));
      $msg = $valid->checkEmpty($_POST);
      $checkCustomer = $valid->validCustomer($_POST['customer']);
      $checkEmail = $valid->validEmail($_POST['email']);
      $checkBank_id = $valid->validBank_id($_POST['bank_id']);
      $checkBank_Acct = $valid->validBank_acct($_POST['bank_acct']);
      $checkBalance = $valid->validBalance($_POST['balance']);



      // now handle any empty fields
      if ($msg != null) 
      {
        echo $msg;
        //link to the previous page
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      } 
      elseif (!$checkCustomer)
      {
        echo '<p>Please provide a valid Customer Name.</p>';
         //link to the previous page
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      }
      elseif (!$checkEmail) 
      {
        echo '<p>Please provide a valid Email.</p>';
         //link to the previous page
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      } 
      elseif (!$checkBank_id)
      {
        echo '<p>Please provide a valid Bank ID.</p>';
         //link to the previous page
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      } 
      elseif (!$checkBank_Acct)
      {
      echo '<p>Please provide a valid Bank Account.</p>';
      //link to the previous page
     echo "<a href='javascript:self.history.back();'>Go Back</a>";
      }
      elseif (!$checkBalance)
      {
        echo '<p>Please provide a valid Balance.</p>';
        //link to the previous page
       echo "<a href='javascript:self.history.back();'>Go Back</a>";
      }
      
      // if all the fields are valid
      $result = $bank_info->execute($customer,$email, $bank_id,$bank_acct,$balance);
      // let the user know that the record has been added
      if ($result)
      {
          echo "<p>Data added successfully.</p>";
          echo "<a href='view.php'>View Result</a>";
      }

      
    }
    ?>
  </main>
</body>

</html>