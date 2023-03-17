<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/login.scss', 'resources/js/app.js'])
    <title>Milo Panel | Login</title>
</head>
<body>
    <div class="navbar">
        <a href="#">Milo'Panel</a>
    </div>
    <div class="container">
        <div class="top-container">
            <h2>Connexion au panel</h2>
            <hr>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Votre email"required>

            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>

            <button type="submit">Se connecter</button>
        </form>
    </div>

@if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<footer>
    <img src="/img/Vector.png" alt="" class="vector">
</footer>
</body>
</html>