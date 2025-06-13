<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        form {
            max-width: 500px;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #27ae60;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #3498db;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Add New Medicine</h2>

<form method="post" action="/medicine/save">
    <label for="name">Medicine Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="dosage">Dosage:</label>
    <input type="text" name="dosage" id="dosage" required>

    <label for="schedule">Schedule:</label>
    <input type="text" name="schedule" id="schedule" required>

    <button type="submit" class="btn">Save</button>
</form>

<a href="/medicine" class="back-link">← Back to Medicine List</a>

</body>
</html>
