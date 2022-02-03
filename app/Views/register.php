<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <script>var base_url = "<?= base_url(); ?>";</script>
</head>
<body>
<header>
    <h1>BioTech</h1>
</header>
<main>
    <section>
        <div id="contFrmRegister">
            <h2>Create account</h2>
            <img src="<?= base_url('images/fingerprint.svg') ?>" alt="Fingerprint Icon">
            <p>Enter your name, press scan and place thumb on the scanner to register</p>
            <form id="frmRegister" method="post">
                <label for="fullname">Full name</label>
                <input type="text" name="fullname" id="fullname">
                <button type="submit" id="btnRegister">Scan</button>
            </form>
        </div>
        <div id="result"></div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('js/scripts.js') ?>"></script>
</body>
</html>
