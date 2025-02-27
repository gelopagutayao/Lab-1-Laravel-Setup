<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>

    <h1>Create New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" value="{{ old('fname') }}" required><br><br>

        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" value="{{ old('lname') }}" required><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" value="{{ old('dob') }}" required><br><br>

        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"><br><br>

        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{ old('mobile') }}"><br><br>

        <label for="parent_id">Parent ID (Optional)</label>
        <input type="number" name="parent_id" id="parent_id" value="{{ old('parent_id') }}"><br><br>

        <label for="status">Status</label>
        <input type="checkbox" name="status" id="status" {{ old('status') ? 'checked' : '' }}><br><br>

        <button type="submit">Create Student</button>
    </form>

    <a href="{{ route('students.index') }}">
        <button>Back to Student List</button>
    </a>

</body>
</html>
