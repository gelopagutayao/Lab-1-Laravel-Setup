<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
</head>
<body>

    <h1>Student List</h1>

    <!-- Button to trigger the 'Create' form -->
    <a href="{{ route('students.create') }}">
        <button>Create New Student</button>
    </a>

    <table border="1" cellpadding="5" cellspacing="0">
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
                    <td>{{ $student->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('students.edit', $student->id) }}">
                            <button>Edit</button>
                        </a>
                        <!-- Delete Button -->
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
