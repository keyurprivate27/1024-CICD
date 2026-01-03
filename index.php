<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
        }
        .container {
            width: 900px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 6px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        input {
            flex: 1;
            padding: 10px;
        }
        button {
            padding: 10px 20px;
            background: #007bff;
            border: none;
            color: white;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Management System (Static)</h2>

    <!-- Student Form -->
    <div class="form-group">
        <input type="text" placeholder="Student Name">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="Course">
        <button>Add</button>
    </div>

    <!-- Student Table -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Rahul Sharma</td>
            <td>rahul@gmail.com</td>
            <td>Java</td>
            <td>Edit | Delete</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Anjali Patel</td>
            <td>anjali@gmail.com</td>
            <td>Angular</td>
            <td>Edit | Delete</td>
        </tr>
    </table>
</div>

</body>
</html>
