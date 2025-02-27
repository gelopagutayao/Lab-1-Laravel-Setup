<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parents</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
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
            margin-top: 30px;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="tel"] {
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
        <h1>Parents Management</h1>

       
        <div class="form-container">
            <h3>Add a New Parent</h3>
            <form action="/parents" method="POST">
                <input type="text" name="parent_name" placeholder="Parent's Name" required><br>
                <input type="email" name="parent_email" placeholder="Parent's Email" required><br>
                <input type="tel" name="parent_phone" placeholder="Parent's Phone Number" required><br>
                <input type="submit" value="Add Parent">
            </form>
        </div>

        
        <table>
            <thead>
                <tr>
                    <th>Parent's Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>(555) 123-4567</td>
                    <td>
                        <button class="button" onclick="editParent()">Edit</button>
                        <button class="button" onclick="deleteParent()">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>janesmith@example.com</td>
                    <td>(555) 987-6543</td>
                    <td>
                        <button class="button" onclick="editParent()">Edit</button>
                        <button class="button" onclick="deleteParent()">Delete</button>
                    </td>
                </tr>
               
            </tbody>
        </table>

        <!-- Update Form -->
        <div class="form-container">
            <h3>Edit Parent</h3>
            <form action="/parents/update" method="POST">
                <input type="text" name="parent_name" placeholder="New Parent's Name" required><br>
                <input type="email" name="parent_email" placeholder="New Parent's Email" required><br>
                <input type="tel" name="parent_phone" placeholder="New Parent's Phone Number" required><br>
                <input type="submit" value="Update Parent">
            </form>
        </div>

    </div>

    <script>
        
        function editParent() {
            alert("Edit Parent functionality will go here.");
        }

        
        function deleteParent() {
            if (confirm("Are you sure you want to delete this parent?")) {
                alert("Parent deleted.");
            }
        }
    </script>

</body>
</html>
