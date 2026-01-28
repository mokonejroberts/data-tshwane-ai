<?php
require_once 'src/db.php'; // Correct path


// Fetch last 10 login attempts
$stmt = $pdo->query("SELECT l.id, u.email, l.login_time, l.ip_address, l.success 
                     FROM login_logs l 
                     LEFT JOIN users u ON l.user_id = u.id 
                     ORDER BY l.id DESC LIMIT 10");
$logs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Logs</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: center; }
        th { background: #007bff; color: #fff; }
        .success { color: green; font-weight: bold; }
        .failure { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Recent Login Attempts</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Login Time</th>
                <th>IP Address</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= htmlspecialchars($log['id']) ?></td>
                    <td><?= htmlspecialchars($log['email'] ?: 'Unknown') ?></td>
                    <td><?= htmlspecialchars($log['login_time']) ?></td>
                    <td><?= htmlspecialchars($log['ip_address']) ?></td>
                    <td class="<?= $log['success'] ? 'success' : 'failure' ?>">
                        <?= $log['success'] ? 'Success' : 'Failed' ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
