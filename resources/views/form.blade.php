<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP requetes HTTP</title>
    
</head>
<body>
    <form action="/calculer" method="post">
        @csrf
        <p>
            <label for="number1">Numéro disponible 1</label>
            <select name="number1" id="number1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </p>
        <p>
            <label for="number2">Numéro disponible 2</label>
            <select name="number2" id="number2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </p>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>