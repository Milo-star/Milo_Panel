@vite(['resources/scss/login.scss', 'resources/js/app.js'])
<form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Se connecter</button>
</form>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
