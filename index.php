<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Enhanced Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="jumbotron text-center fade-in">
  <h1>ยินดีต้อนรับเข้าสู่หน้าเว็บไซต์</p>
</div>

<nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="#">MySite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" target="_blank">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
         
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Your Image Here</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Quick Links</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Latest Blog</h2>
      <h5>Posted on Dec 7, 2017</h5>
      <div class="fakeimg">Sample Image</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      <br>
      <h2>Another Post</h2>
      <h5>Posted on Sep 2, 2017</h5>
      <div class="fakeimg">Sample Image</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>
  </div>
</div>

<div class="footer text-center">
  <p>© 2024 MySite | Designed with ❤️</p>
</div>

</body>
</html>
