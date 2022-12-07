<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title>Hello OO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Livro.php';
                $p[0] = new Pessoa("Maxson", 22, "M");
                $p[1] = new Pessoa("Mayara", 20, "F");
                $p[2] = new Pessoa("Théo", 3, "M");
                $p[3] = new Pessoa("João Pedro", 1, "M");

                $l[0] = new Livro("Use a Cabeça Java", "Bil Gates", 300, $p[0]);
                $l[1] = new Livro("Aprendendo Finanças de Verdade", "Celso Russumano", 500, $p[1]);

                $l[0]->abrir();
                $l[0]->folhear(80);
                $l[0]->avancarPag();

                $l[0]->detalhes();

                $l[1]->detalhes();

            ?>
        </pre>
    </body>
</html>