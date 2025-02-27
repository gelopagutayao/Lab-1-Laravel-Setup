<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
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
        .container {
            width: 80%;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        input[type="number"],
        input[type="checkbox"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            width: auto;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-btn {
            background-color: #2196F3;
        }
        .back-btn:hover {
            background-color: #0b7dda;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .form-group input {
            width: 50%;
        }
    </style>
</head>
<body>

    <h1>Create New Student</h1>

    <div class="container">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
        
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="{{ old('fname') }}" required>
            </div>
        
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="{{ old('lname') }}" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
        
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" value="{{ old('dob') }}" required>
            </div>
        
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
            </div>
        
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile" value="{{ old('mobile') }}">
            </div>
        
            <div class="form-group">
                <label for="parent_id">Parent ID (Optional)</label>
                <input type="number" name="parent_id" id="parent_id" value="{{ old('parent_id') }}">
            </div>
        
            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" name="status" id="status" {{ old('status') ? 'checked' : '' }}>
            </div>
        
            <button type="submit">Create Student</button>
        </form>
        

        <a href="{{ route('students.index') }}">
            <button class="back-btn">Back to Student List</button>
        </a>
    </div>

</body>
</html>
