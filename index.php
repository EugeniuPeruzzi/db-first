<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome della quale la colonna sara composta</th>
                            <th scope="col">Tipo di proprieta che andremo ad atribuire</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Id della riga</td>
                            <td>PRIMARY_KEY</td>
                        </tr>
                        <tr>
                            <td>Tipologia veicolo</td>
                            <td>varchar(25) , NOT NULL, INDEX</td>
                        </tr>
                        <tr>
                            <td>Marca</td>
                            <td>varchar(30), NOT NULL, INDEX</td>
                        </tr>
                        <tr>
                            <td>Prima Immatricolazione</td>
                            <td>DATE, NOT NULL, INDEX</td>
                        </tr>
                        <tr>
                            <td>Modello</td>
                            <td>varchar(30), NOT NULL, INDEX</td>
                        </tr>
                        <tr>
                            <td>Targa</td>
                            <td>varchar(7), NULL</td>
                        </tr>
                        <tr>
                            <td>Motorizzazione /  Cilindrata motore</td>
                            <td>varchar(10), NOT NULL</td>
                        </tr>
                        <tr>
                            <td>Tipo di alimentazione</td>
                            <td>varchar(10), NOT NULL, INDEX</td>
                        </tr>
                        <tr>
                            <td>Potenza motore</td>
                            <td>TINYINT, NULL, INDEX</td>
                        </tr>
                        <tr>
                            <td>Tipologia di trazione</td>
                            <td>varchar(15), NULL,</td>
                        </tr>
                        <tr>
                            <td>Posti a sedere</td>
                            <td>TINYINT, NULL, DEFAULT(0)</td>
                        </tr>
                        <tr>
                            <td>Kilometri percorsi</td>
                            <td>MEDIUMINT,NOT NULL, DEFAULT(0)</td>
                        </tr>
                        <tr>
                            <td>Tipo di cambio</td>
                            <td>varchar(15),NULL, INDEX</td>
                        </tr>
                        <tr>
                            <td>Proprietari precedenti</td>
                            <td>TINYINT,NULL, DEFAULT(0)</td>
                        </tr>
                        <tr>
                            <td>Colore</td>
                            <td>varchat(20),NULL</td>
                        </tr>
                        <tr>
                            <td>Emissioni</td>
                            <td>varchar(10), NOT NULL, INDEX</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>