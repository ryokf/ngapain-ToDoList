<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    p {
        font-size: 11px;
        text-align: center;
    }

    .link-register {
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;
    }
    </style>

</head>

<body>
    <h1 class="text-center mt-5">Buat password Anda</h1>

    <p class="text-center mt-3">Usahakan Password anda sulit ditebak orang lain, jangan gunakan informasi pribadi
        sebagai password</p>

    <div class="container my-5">
        <form action="<?= base_url('register/proses') ?>" method="post">
            <div class="mb-3">
                <input type="hidden" class="form-control" id="password" name="username"
                    value="<?= $_POST['username'] ?>">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 text-center">
                <label for="username" class="form-label">konfirmasi password anda</label>
                <input type="text" class="form-control" id="username" name="password2">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="submit">login sekarang</button>
            </div>
        </form>
        <p class="my-3 link-register">sudah punya akun?, silahkan masuk melalui link ini <a class="my-3"
                href="<?= base_url('login') ?>">login</a></p>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>

<!-- <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">konfirmasi password</label>
                <input type="password" class="form-control" id="password2" name="password2">
            </div> -->