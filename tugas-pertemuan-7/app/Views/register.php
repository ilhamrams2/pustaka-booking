<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Registration Form</h1>

    <form method="post" action="<?= site_url('register/process') ?>">
        <input type="text" name="name" placeholder="Name" value="<?= old('name') ?>">
        <div><?= \Config\Services::validation()->getError('name') ?></div>

        <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>">
        <div><?= \Config\Services::validation()->getError('email') ?></div>

        <input type="password" name="password" placeholder="Password">
        <div><?= \Config\Services::validation()->getError('password') ?></div>

        <input type="submit" value="Register">
    </form>
</body>
</html>