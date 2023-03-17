<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/edit.scss', 'resources/js/app.js'])
    <title>Milo'Panel | Modifier une commande</title>
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Milo'Panel</a>
        <a href="#" class="add">Ajouter un article</a>
        <a href="{{ route('logout') }}" class="logout">Déconnexion</a>
    </div>
    <form method="POST" action="{{ route('edit', $order->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="client">Client</label>
            <input type="text" name="client" id="client" value="{{ $order->client }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{ $order->description }}">
        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="text" name="prix" id="prix" value="{{ $order->prix }}">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" value="{{ $order->status }}">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" value="{{ $order->adresse }}">
        </div>

        <div class="form-group">
            <label for="site">Site</label>
            <input type="text" name="site" id="site" value="{{ $order->site }}">
        </div>

        <div class="form-group">
            <label for="modele">Modèle</label>
            <input type="text" name="modele" id="modele" value="{{ $order->modele }}">
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" name="date" id="date" value="{{ $order->date }}">
        </div>

        <div class="form-group">
            <label for="moyen_paiement">Moyen de paiement</label>
            <input type="text" name="moyen_paiement" id="moyen_paiement" value="{{ $order->moyen_paiement }}">
        </div>

        <button type="submit">Enregistrer</button>
    </form>

            
    <footer>
        <img src="/img/Vector.png" alt="" class="vector">
    </footer>

</body>
</html>