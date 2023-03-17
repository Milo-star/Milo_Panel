<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/dashboard.scss', 'resources/js/app.js'])
    <title>Milo'Panel | Dashboard</title>
</head>
<body>
    <div class="navbar">
        <a href="#">Milo'Panel</a>
        <a href="#" class="add">Ajouter un article</a>
        <a href="/logout" class="logout">Déconnexion</a>
    </div>
    <h1>Tableau de bord</h1>
    <table>
        <thead>
            <tr>
                <th>Client</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Status</th>
                <th>Adresse</th>
                <th>Site</th>
                <th>Modèle</th>
                <th>Date</th>
                <th>Moyen de paiement</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->client }}</td>
                    <td>{{ $order->description }}</td>
                    <td>{{ $order->prix }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->adresse }}</td>
                    <td>{{ $order->site }}</td>
                    <td>{{ $order->modele }}</td>
                    <td>{{ $order->date }}</td>
                    <td>{{ $order->moyen_paiement }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <footer>
        <img src="/img/Vector.png" alt="" class="vector">
    </footer>
</body>
</html>