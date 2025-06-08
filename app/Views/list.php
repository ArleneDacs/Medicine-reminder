<!DOCTYPE html>
<html>
<head>
    <title>Medicine Reminder</title>
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
        .btn-red { background-color: #e74c3c; }
        .btn-green { background-color: #2ecc71; }
        .btn-yellow { background-color: #f39c12; }
        .btn-check { background-color: #1abc9c; }
    </style>
</head>
<body>

<h2>Medicine Reminder List</h2>

<form method="get" action="/medicine/search" style="margin-bottom: 20px;">
    <input type="text" name="q" placeholder="Search by name, dosage, or schedule"
           value="<?= isset($search) ? esc($search) : '' ?>"
           style="padding: 8px; width: 300px; border-radius: 5px; border: 1px solid #ccc;">
    <button type="submit" class="btn">Search</button>
    
</form>

<a href="/medicine/add" class="btn btn-green">+ Add Medicine</a>
<a href="/medicine/history" class="btn">📜 Medicine History</a>


<table>
    <tr>
        <th>Name</th>
        <th>Dosage</th>
        <th>Schedule</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php if (!empty($medicines)): ?>
        <?php foreach ($medicines as $m): ?>
        <tr>
            <td><?= esc($m['name']) ?></td>
            <td><?= esc($m['dosage']) ?></td>
            <td><?= esc($m['schedule']) ?></td>
            <td><?= $m['taken'] ? 'Taken' : 'Not Taken' ?></td>
            <td>
                <a href="/medicine/view/<?= $m['id'] ?>" class="btn btn-yellow">View</a>
                <a href="/medicine/edit/<?= $m['id'] ?>" class="btn">Edit</a>
                <a href="/medicine/markTaken/<?= $m['id'] ?>" class="btn btn-check">Mark as Taken</a>
                <a href="/medicine/delete/<?= $m['id'] ?>" class="btn btn-red" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="5">No medicines found.</td></tr>
    <?php endif; ?>
</table>

</body>
</html>
