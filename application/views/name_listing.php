<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İsim Listesi</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <td>İsim</td>
            <td>E-Mail</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($personnel_list as $list){ ?>
        <tr>
            <td>
                <?php echo $list['name']; ?>
            </td>
            <td>
                <?php echo $list['email']; ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>