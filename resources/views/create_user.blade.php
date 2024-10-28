<!-- resources/views/create_user.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Form Create User</h1>
    <form action="/user/store" method="POST">
        @csrf <!-- Token untuk keamanan -->
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required>
        </div>
        <div>
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
