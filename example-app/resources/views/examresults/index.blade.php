<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Results</title>
    
    <!-- Link to external CSS for styling -->
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
        .exam-result-card {
            margin: 10px;
        }
        .exam-result-card .card-header {
            background-color: #007bff;
            color: white;
        }
        .exam-result-card .card-body {
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Exam Results Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exam Results</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2 class="text-center">Exam Results</h2>
        
        <!-- Example Result Cards -->
        <div class="row">
            <!-- Example Exam Result 1 -->
            <div class="col-md-4">
                <div class="card exam-result-card">
                    <div class="card-header">
                        <h4>Math Exam - Semester 1</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Student:</strong> John Doe</p>
                        <p><strong>Score:</strong> 85%</p>
                        <p><strong>Grade:</strong> A</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
            <!-- Example Exam Result 2 -->
            <div class="col-md-4">
                <div class="card exam-result-card">
                    <div class="card-header">
                        <h4>History Exam - Semester 1</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Student:</strong> Jane Smith</p>
                        <p><strong>Score:</strong> 78%</p>
                        <p><strong>Grade:</strong> B+</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
            <!-- Example Exam Result 3 -->
            <div class="col-md-4">
                <div class="card exam-result-card">
                    <div class="card-header">
                        <h4>Science Exam - Semester 1</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Student:</strong> Sarah Lee</p>
                        <p><strong>Score:</strong> 92%</p>
                        <p><strong>Grade:</strong> A+</p>
                        <button class="btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button to Add a New Exam Result -->
        <div class="text-center mt-5">
            <button class="btn btn-success">Add New Result</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p>&copy; 2025 Exam Results Management. All Rights Reserved.</p>
    </footer>

    <!-- Script Includes -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
