<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #343a40;
            color: white;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            font-size: 16px;
        }
        .navbar a:hover {
            background-color: #007bff;
            border-radius: 5px;
        }
        .container {
            margin-top: 30px;
        }
        .course-card {
            margin: 10px;
        }
        .course-card .card-header {
            background-color: #007bff;
            color: white;
        }
        .course-card .card-body {
            text-align: center;
        }
    </style>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Course Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

 
    <div class="container">
        <h2 class="text-center">Courses List</h2>
        
        
        <div class="row">
           
            <div class="col-md-4">
                <div class="card course-card">
                    <div class="card-header">
                        <h4>Introduction to Programming</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Instructor:</strong> John Doe</p>
                        <p><strong>Duration:</strong> 6 Weeks</p>
                        <p><strong>Price:</strong> $299</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="card course-card">
                    <div class="card-header">
                        <h4>Web Development Bootcamp</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Instructor:</strong> Jane Smith</p>
                        <p><strong>Duration:</strong> 12 Weeks</p>
                        <p><strong>Price:</strong> $499</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
         
            <div class="col-md-4">
                <div class="card course-card">
                    <div class="card-header">
                        <h4>Data Science for Beginners</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Instructor:</strong> Sarah Lee</p>
                        <p><strong>Duration:</strong> 8 Weeks</p>
                        <p><strong>Price:</strong> $399</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="text-center mt-5">
            <button class="btn btn-success">Add New Course</button>
        </div>
    </div>

  
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p>&copy; 2025 Course Management System. All Rights Reserved.</p>
    </footer>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
