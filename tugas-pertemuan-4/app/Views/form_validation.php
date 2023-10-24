<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <form method="post" action="<?= site_url('form/submit') ?>">
        <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>">
        <div><?= \Config\Services::validation()->getError('username') ?></div>

        <input type="password" name="password" placeholder="Password">
        <div><?= \Config\Services::validation()->getError('password') ?></div>

        <input type="submit" value="Submit">
    </form>

</body>

</html>