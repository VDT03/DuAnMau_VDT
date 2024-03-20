<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết người dùng</title>
</head>
<body>
    <h1>Chi tiết nguời dùng: <?= $user['last_name'] .' '. $user['first_name'] ?></h1>
    <table>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Action</th>
            <th>Role</th>
        </tr>
    </table>
</body>
</html>