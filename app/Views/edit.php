<!DOCTYPE html>
<html>
<head>
    <title>Edit Medicine</title>
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
            background-color: #f39c12;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>

<h2>Edit Medicine</h2>

<form method="post" action="/medicine/update/<?= $medicine['id'] ?>">
    <label>Medicine Name:</label>
    <input type="text" name="name" value="<?= esc($medicine['name']) ?>" required>

    <label>Dosage:</label>
    <input type="text" name="dosage" value="<?= esc($medicine['dosage']) ?>" required>

    <label>Schedule:</label>
    <input type="text" name="schedule" value="<?= esc($medicine['schedule']) ?>" required>

    <button type="submit" class="btn">Update</button>
</form>

</body>
</html>
