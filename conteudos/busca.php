<div class="container-fluid">
	<div class="container">
        <div class="row internas">
            <div class="col-md-12">
            	<h2>SEARCH RESULTS</h2>
				<?php
                    $pesq = (isset($_POST['pesquisa'])) ? trim($_POST['pesquisa']) : '';
                    
                    if(empty($pesq)){
                        echo 'Digite no campo de Busca';
                    }else{
                        $pasta = "conteudos";
                        $atual = "$pasta/busca.php";
                        $busca = glob("$pasta/*.php", GLOB_BRACE);
                        
                        foreach($busca as $item){
                                if($item !== $atual){
                                    $abrir = fopen($item, "r");
                                    while(!feof($abrir)){
                                        $lendo = fgets($abrir);
                                        $lendo = strip_tags($lendo);
                                        if(stristr($lendo, $pesq) == true){
                                            $dados = str_replace(".php", "", $item);
                                            $dados = basename($dados);
                                            $result[] = '<a href="?pagina='.$dados.'">'.$dados.'</a>';
                                            unset($dados);
                                        }
                                        unset($lendo);
                                    }
                                    fclose($abrir);
                                }
                        }
                        /*Imprimir o Resultado*/
                        if(isset($result) && count($result) > 0){
                            $result = array_unique($result);
                            echo '<ul>';
                            foreach($result as $link){
                                echo"<li><h3>$link</h3></li>";
                            }
                            echo '</ul>';
                        }else{
                            echo '<h3>Nenhum resultado na busca</h3>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>