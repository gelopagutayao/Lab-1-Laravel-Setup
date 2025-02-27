<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Attendance</title>
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
        .status-present {
            color: green;
        }
        .status-absent {
            color: red;
        }
        .status-excused {
            color: orange;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Attendance List</h1>
    </header>

    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Attendance Status</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td class="status-present">Present</td>
                <td>On time</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td class="status-absent">Absent</td>
                <td>Not feeling well</td>
            </tr>
            <tr>
                <td>Mark Johnson</td>
                <td class="status-excused">Excused</td>
                <td>Family emergency</td>
            </tr>
            <tr>
                <td>Alice Brown</td>
                <td class="status-present">Present</td>
                <td>On time</td>
            </tr>
            <tr>
                <td>Bob Lee</td>
                <td class="status-absent">Absent</td>
                <td>Missed the bus</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
