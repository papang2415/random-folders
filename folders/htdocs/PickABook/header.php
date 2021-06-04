
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div id="nav">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <nav class="navbar navbar-expand-lg text-light navbar-dark">
        <div>
        <a class="navbar-brand" href="#">Navbar</a>
        <button id="right" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
       <div id="right">
       <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a id="btn" class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a id="btn" class="nav-link"href="categories.php">Categories</a>
            </li>
            <li class="nav-item">
                <a id="btn" class="nav-link"  href="books.php">Books</a>
            </li>    
            <li class="nav-item">
                <a id="btn" class="nav-link"href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a id="btn" class="nav-link"href="contacts.php">Contacts</a>
            </li>   
            </ul>
        </div>
       </div>
    </nav>
</div>

</body>