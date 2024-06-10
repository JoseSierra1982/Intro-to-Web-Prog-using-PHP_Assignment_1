<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Portal</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./img/lionbank.png" alt="header logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">Customer Data</a></li>
          </ul>
        </div>
      </div>
    </nav>
</header>
  <section class="masthead">
    <div>
      <h1>Georgian Bank Portal</h1>
    </div>
  </section>
  <main class="container">
    <section class="form-row row justify-content-center">
  
        <form method="post" action="insert_data.php" class="form-horizontal col-md-6 col-md-offset-3">
      
        <label class="insert" for="customer">Customer:</label><br>
        <p><input type="text" name="customer" placeholder="Please type your Name"></p>
        <label class="insert" for="email">Contact email:</label><br>
        <p><input type="text" name="email" placeholder="Please type your Email"></p>
        <label class="insert" for="bank_id">Branch ID:</label><br>
        <p><input type="number" name="bank_id" placeholder="Please type your Bank ID"></p>
        <label class="insert" for="bank_acct">Account Number:</label><br>
        <p><input type="number" name="bank_acct" placeholder="Please type your Bank Account"></p>
        <label class="insert" for="balance">Your Balance:</label><br>
        <p><input type="number" name="balance" placeholder="Please type yourYour Balance"></p>

        <input class="btn btn-primary order" type="submit" name="Submit" value="Register">
        <input class="btn btn-dark reset" type="reset" value="Clear">
      </form>
    </section>
  </main>
  <footer class="footer">
        <div class="container">
            <!-- About Us Section -->
            <div class="section">
                <h4>About Us</h4>                
            </div>            
            <!-- Contact Us Section -->
            <div class="section">
                <h4>Contact Us</h4>              
            </div>            
            <!-- Services Section -->
            <div class="section">
                <h4>Services</h4>
            </div>            
            <!-- Follow Us Section -->
            <div class="section">
                <h4>Follow Us</h4>                
            </div>        
        <!-- Legal Section -->
            <div class="legal">
              <p>&copy; 2024 Georgian Bank. All rights reserved. | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-service">Terms of Service</a></p>
        </div>
      </footer>
</body>
</html> 