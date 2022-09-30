<?php

include_once("dbh.php");

class Produto{

    public $nome;
    public $thumb;
    public $preco;

    public function __construct($nome, $thumb, $preco) {
        $this->nome  = $nome;
        $this->thumb = $thumb;
        $this->preco = $preco;
    }
}

$produtos = array();
$prods = $conn->query("SELECT * FROM produtos");

while($row = $prods->fetch_assoc()){
    $nome  = $row['nome'];
    $thumb = $row['enderecoThumb'];
    $preco = $row['preco'];
    array_push($produtos, new Produto($nome, $thumb, $preco));

}


function inicializacao(){
    global $produtos;
    
    for ($i=0; $i < 8; $i++) { 
        echo"
        <a href='produto.php'>
        <section class = 'produto'>

        <div>
            <img src='".  $produtos[$i]->thumb ."'>
        </div>

        <div>
            <span>
                ".  $produtos[$i]->nome ."
            </span>
        </div>

        <div>
            <span>
                R$: ".  $produtos[$i]->preco ."
            </span>
        </div>

        </section>
        </a>
        ";
    }

    echo '<input type="button" class="BTN_verMais" id="BTN_verMais" value="Ver mais..." onclick="verMais()"> ';
}

function iniPromo(){
    global $produtos;
    for ($i=0; $i < sizeof($produtos); $i++) { 
        if($produtos[$i]->preco <= 90){    
            echo"
            <a href='produto.php'>
            <section class = 'produto' id = '" . $produtos[$i]->nome . "'>

            <div>
                <img src='".  $produtos[$i]->thumb ."'>
            </div>

            <div>
                <span>
                    ".  $produtos[$i]->nome ."
                </span>
            </div>

            <div>
                <span>
                    R$: ".  $produtos[$i]->preco ."
                </span>
            </div>

            </section>
            </a>
            ";
        }
    }
}
