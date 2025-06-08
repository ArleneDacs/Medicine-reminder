<!DOCTYPE html>
<html>
<head>
    <title>Medicine History</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background-color: #f4f4f4; }
        .btn {
            padding: 6px 12px;
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

<h2>Medicine History (Taken Medicines)</h2>

<a href="/medicine" class="btn">← Back to Current List</a>

<table>
    <tr>
        <th>Name</th>
        <th>Dosage</th>
        <th>Schedule</th>
        <th>Status</th>
    </tr>
    <?php if (!empty($medicines)): ?>
        <?php foreach ($medicines as $m): ?>
        <tr>
            <td><?= esc($m['name']) ?></td>
            <td><?= esc($m['dosage']) ?></td>
            <td><?= esc($m['schedule']) ?></td>
            <td>Taken</td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="4">No taken medicines yet.</td></tr>
    <?php endif; ?>
</table>

</body>
</html>
