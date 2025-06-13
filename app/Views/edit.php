<!DOCTYPE html>
<html>
<head>
    <title>Edit Medicine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        form {
            max-width: 500px;
            background: #fffdf5;
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
            background-color: #f39c12;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #e67e22;
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

<h2>Edit Medicine</h2>

<form method="post" action="/medicine/update/<?= $medicine['id'] ?>">
    <label for="name">Medicine Name:</label>
    <input type="text" name="name" id="name" value="<?= esc($medicine['name']) ?>" required>

    <label for="dosage">Dosage:</label>
    <input type="text" name="dosage" id="dosage" value="<?= esc($medicine['dosage']) ?>" required>

    <label for="schedule">Schedule:</label>
    <input type="text" name="schedule" id="schedule" value="<?= esc($medicine['schedule']) ?>" required>

    <button type="submit" class="btn"> Update</button>
</form>

<a href="/medicine" class="back-link">← Back to Medicine List</a>

</body>
</html>
