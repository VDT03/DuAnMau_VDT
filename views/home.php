<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<body>
    <h1>Đây là trang chủ</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>

        <?php foreach($data_User as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>