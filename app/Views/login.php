<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
<header>
    <h1>BioTech</h1>
</header>
<main>
    <section>
        <h2>Log In</h2>
        <img src="<?= base_url('images/fingerprint.svg') ?>" alt="Fingerprint Icon">
        <p>Press scan and place thumb on the scanner to log in</p>
        <form action="<?= route_to('login') ?>">
            <button type="submit">Scan</button>
        </form>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('js/scripts.js') ?>"></script>
</body>
</html>