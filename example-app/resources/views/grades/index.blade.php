<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        .button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            color: white;
            background-color: #007bff;
            cursor: pointer;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .form-container {
            margin-top: 20px;
            text-align: center;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 5px;
            width: 250px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            padding: 10px 15px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Grades Management</h1>


        <div class="form-container">
            <h3>Add a New Grade</h3>
            <form action="/grades" method="POST">
                <input type="text" name="grade_name" placeholder="Grade Name" required><br>
                <input type="number" name="grade_value" placeholder="Grade Value" required><br>
                <input type="submit" value="Add Grade">
            </form>
        </div>

      
        <table>
            <thead>
                <tr>
                    <th>Grade Name</th>
                    <th>Grade Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A+</td>
                    <td>90-100</td>
                    <td>
                        <button class="button" onclick="editGrade()">Edit</button>
                        <button class="button" onclick="deleteGrade()">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>A</td>
                    <td>80-89</td>
                    <td>
                        <button class="button" onclick="editGrade()">Edit</button>
                        <button class="button" onclick="deleteGrade()">Delete</button>
                    </td>
                </tr>
                
            </tbody>
        </table>

   
        <div class="form-container">
            <h3>Edit Grade</h3>
            <form action="/grades/update" method="POST">
                <input type="text" name="grade_name" placeholder="New Grade Name" required><br>
                <input type="number" name="grade_value" placeholder="New Grade Value" required><br>
                <input type="submit" value="Update Grade">
            </form>
        </div>

    </div>

    <script>
        
        function editGrade() {
            alert("Edit Grade functionality will go here.");
        }

        
        function deleteGrade() {
            if (confirm("Are you sure you want to delete this grade?")) {
                alert("Grade deleted.");
            }
        }
    </script>

</body>
</html>
                                    