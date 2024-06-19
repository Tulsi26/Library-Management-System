<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css/">
    <link rel="stylesheet" type="text/css" href="Boot/responsive.css/">
</head>
<body class="bg-secondary">
  
    <div class="container-fluid  navbar navbar-expand-lg navbar-light">
        <div class="col-12 row g-2">
            <div class="bg-secondary">Libarary Management System
            </div>  
        </div>
    </div>




    
      
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">              </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            <!-- This is Slide Bar -->
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
          <style>
            /* Sidebar Styles */
            .sidebar {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
            }
            .sidebar a {
              padding: 10px 15px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
            }
            .sidebar a:hover {
              color: #f1f1f1;
            }
            .sidebar .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
            }
            .openbtn {
              font-size: 20px;
              cursor: pointer;
              background-color: #111;
              color: white;
              padding: 10px 15px;
              border: none;
            }
            .openbtn:hover {
              background-color: #444;
            }
          </style>
        </head>
        <body>
        
        <div class="container">
          <button class="openbtn" onclick="openNav()">&#9776;</button>
        </div>
        
        <!-- The Sidebar -->
        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       
         <ul type="disc">
          <li> <a href="#">Books</a></li>
          <li> <a href="stauthor.php">Author</a></li>
          <li> <a href="stpublisher.php">Publisher</a></li>
          <li> <a href="feedback.php">Feedback</a></li>
          </ul>
        </div>
        
        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script>
          function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
          }
        
          function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
          }
        </script>
        
        </body>
        </html>
        

<!-- 
          This is Nav-Bar  -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
              <li><a class="dropdown-item" href="editprofile.php">Edit Profile</a></li>
              <li><a class="dropdown-item" href="changepass2.php">Change Password</a></li>
            </ul>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </li>
         
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>



  



    
    

<!-- 
       These are Cards -->
       <div class="card" style="width: 18rem; margin-top:150px; float:right;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Category</h5>
          <p class="card-text">Category of Books</p>
          <a href="viewcat.php" class="btn btn-success">View Category Books</a>
        </div>
      </div>


       <div class="card" style="width: 18rem; margin-top:150px; float:right;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Issued Books</h5>
          <p class="card-text">Total no. of Books Issued.</p>
          <a href="" class="btn btn-danger">View issued Books</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; margin-top:150px; float:right;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Total Books</h5>
          <p class="card-text">No. of Books Available.</p>
          <a href="totalbook.php" class="btn btn-success">View Total Books</a>
        </div>
      </div>

      
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
</body>
</html>