<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Example</title>
</head>
<body>
    <h1>Form Validation Example</h1>

    <form method="post" action="<?= base_url('/form/submit') ?>">
        <input type="text" name="username" placeholder="Username" value="<?= old('username') ?>">
        <div><?= \Config\Services::validation()->getError('username') ?></div>

        <input type="password" name="password" placeholder="Password">
        <div><?= \Config\Services::validation()->getError('password') ?></div>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
