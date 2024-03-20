<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<body>
    <h1>Đây là trang chủ</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php foreach($data_User as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['first_name'] ?></td>
            <td><?= $user['last_name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['phone_number'] ?></td>
            <td><?= $user['address'] ?></td>
            <td>
                <a href="<?= BASE_URL . '?act=user-detail&id=' . $user['id'] ?>">Xem chi tiết</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>