<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classroom</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .status-active {
            color: green;
        }
        .status-inactive {
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>Classroom List</h1>
    </header>

    <table>
        <thead>
            <tr>
                <th>Classroom Name</th>
                <th>Teacher</th>
                <th>Number of Students</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mathematics 101</td>
                <td>Mr. John Smith</td>
                <td>25</td>
                <td class="status-active">Active</td>
            </tr>
            <tr>
                <td>Science 102</td>
                <td>Mrs. Jane Doe</td>
                <td>30</td>
                <td class="status-active">Active</td>
            </tr>
            <tr>
                <td>History 201</td>
                <td>Mr. Michael Brown</td>
                <td>20</td>
                <td class="status-inactive">Inactive</td>
            </tr>
            <tr>
                <td>English 303</td>
                <td>Ms. Emily White</td>
                <td>22</td>
                <td class="status-active">Active</td>
            </tr>
            <tr>
                <td>Physical Education</td>
                <td>Mr. Robert Green</td>
                <td>18</td>
                <td class="status-active">Active</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
