<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hehehehehhehehe</h1>
    <table border="1">
        <thead>
            <th>id</th>
            <th>name</th>
        </thead>
        <tbody>

            <?php foreach($users as $value):?>
            <tr>
                <td> <?= $value['id']?> </td>
                <td> <?= $value['name']?> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>