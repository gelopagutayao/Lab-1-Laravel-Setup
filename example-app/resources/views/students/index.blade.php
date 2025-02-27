<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }
        h1 {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }
        button {
            padding: 8px 16px;
            margin: 4px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
        }
        .container {
            width: 90%;
            margin: 20px auto;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .create-btn {
            background-color: #2196F3;
        }
        .create-btn:hover {
            background-color: #0b7dda;
        }
        form {
            display: inline;
        }
        .status {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Student List</h1>

    <div class="container">
        <!-- Button to trigger the 'Create' form -->
        <a href="{{ route('students.create') }}">
            <button class="create-btn">Create New Student</button>
        </a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>Parent</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->fname }}</td>
                        <td>{{ $student->lname }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>{{ $student->parent_id ? 'Has Parent' : 'No Parent' }}</td>
                        <td><span class="status">{{ $student->status ? 'Active' : 'Inactive' }}</span></td>
                        <td class="actions">
                            <!-- Edit Button -->
                            <a href="{{ route('students.edit', $student->id) }}">
                                <button>Edit</button>
                            </a>
                            <!-- Delete Button -->
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
