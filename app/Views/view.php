<!DOCTYPE html>
<html>
<head>
    <title>View Medicine</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td, th {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            margin-top: 20px;
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<h2>Medicine Details</h2>

<table>
    <tr><th>Medicine Name</th><td><?= esc($medicine['name']) ?></td></tr>
    <tr><th>Dosage</th><td><?= esc($medicine['dosage']) ?></td></tr>
    <tr><th>Schedule</th><td><?= esc($medicine['schedule']) ?></td></tr>
    <tr><th>Status</th><td><?= $medicine['taken'] ? 'Taken' : 'Not Taken' ?></td></tr>
</table>

<a href="/medicine" class="btn">← Back to List</a>

</body>
</html>
