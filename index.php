<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compara a Idade</title>
</head>
<body>
    <main>
        <h1>Compara Idade</h1>

        <p>Informe o nome e as idades de duas pessoas</p>

        <form action="calcula.php" method="post">
            <div>
                <label for="pessoa1">Nome da pessoa 1</label>
                <input type="text" name="pessoa1" id="pessoa1">

                <label for="idade1">Idade da pessoa 1</label>
                <input type="text" name="idade1" id="idade1">
            </div>
            <div>
                <label for="pessoa2">Nome da pessoa 2</label>
                <input type="text" name="pessoa2" id="pessoa2">

                <label for="idade2">Idade da pessoa 2</label>
                <input type="text" name="idade2" id="idade2">
            </div>

            <div>
                <label for="calculo">Operção</label>
                <select name="calculo" id="calculo">
                    <option value="compara">Comparar idades</option>
                    <option value="maioridade">Verificar Maioridade</option>
                </select>
            </div>

            <button type="submit">Prosseguir</button>
        </form>

    </main>
</body>
</html>