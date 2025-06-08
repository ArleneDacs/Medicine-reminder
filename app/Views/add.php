<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { max-width: 400px; }
        label { display: block; margin: 15px 0 5px; }
        input[type="text"] {
            width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;
        }
        .btn {
            margin-top: 20px;
            padding: 8px 16px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<h2>Add New Medicine</h2>

<form method="post" action="/medicine/save">
    <label>Medicine Name:</label>
    <input type="text" name="name" required>

    <label>Dosage:</label>
    <input type="text" name="dosage" required>

    <label>Schedule:</label>
    <input type="text" name="schedule" required>

    <button type="submit" class="btn">Save</button>
</form>

</body>
</html>
