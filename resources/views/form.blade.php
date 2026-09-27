<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi Laravel</title>
</head>
<body>

    <h1>Form Validasi Laravel</h1>

    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/submit" method="POST">
        @csrf

        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name">
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </div>

        <br>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>

        <br>

        <div>
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>