<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revisão PHP</title>
</head>
<body>
    <h1>Revisando alguns conceitos de programação</h1>
    <main class="container">
        <section id="condicionais">
            <h1>Condicionais</h1>
            <p>Crie utilizando IF uma função que verifique se uma pessoa tem voto facultativo ou obrigatório</p>
            <pre>
                function podeVotar($idade){
                    if($idade &gt;= 18 && $idade &lt; 60 ){
                        echo "Seu voto é obrigatório";
                    } 
                    else if($idade &gt;= 16 && $idade &gt; 18 || $idade &lt;= 60){
                        echo "Seu voto é facultativo";
                    }
                    else {
                        echo "Seu voto ainda não é obrigatório";
                    }  
                }
            </pre>
            <?php 
                function podeVotarIf($idade){
                    if($idade >= 18 && $idade < 60 ){
                        echo "Seu voto é obrigatório";
                    } 
                    else if($idade >= 16 && $idade < 18 || $idade >= 60){
                        echo "Seu voto é facultativo";
                    }
                    else {
                        echo "Seu voto ainda não é obrigatório";
                    }  
                }
            ?>
            <p>Resposta : <?php podeVotarIf(17); ?></p>

            <hr>

            <p>Crie utilizando SWITCH uma função que verifique se uma pessoa tem voto facultativo ou obrigatório</p>
            <pre>
                function podeVotarSwitch($idade){
                    
                }
            </pre>
            <?php 
                function podeVotarSwitch($idade){
                    switch ($idade) {
                        case $idade >= 18 && $idade < 60:
                        echo "Devido voce possuir $idade anos. Seu voto é obrigatório";
                            break;
                        
                        case $idade >= 16 && $idade < 18 || $idade >= 60:
                        echo "Devido voce possuir $idade anos. Seu voto é Facultativo";
                            break;
                        
                        default:
                        echo "Devido voce possuir $idade anos. Seu voto ainda não é obrigatório";
                            break;
                    }
                   
                }
            ?>
            <p>Resposta : <?php podeVotarSwitch(59); ?></p>
        </section>
        <section id="estruturas-de-repeticao">
            <h1>Estruturas de Repetição</h1>
            <p> Crie uma funcao que implemete a tabuada do 2 utilizando FOR</p>

            <pre>
            function tabuadaDo2(){

            }
            </pre>
            <?php
                function tabuadaDo2(){
                    $resultado = 0;
                    for ($i=1; $i <= 10; $i++) {
                        $resultado = $i * 2;
                        echo "$i x 2 = $resultado<br>";

                    }
                }
            ?>
            <p> Resposta: <br> <br>
                <?php tabuadaDo2(); ?>
            </p>
        </section>
        <section id="arrays">
            <h1>Arrays</h1>
        </section>
    </main>
</body>
</html>