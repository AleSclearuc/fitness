<div class="container-fluid">
	<div class="container">
        <div class="row internas">
            <div class="col-md-12">
            	<h2>CONTACT</h2>
                <form id="form-fale" name="f2" action="enviar_contato.php" method="POST" onSubmit="return checkrequired(this)">
                    <h4>Nome</h4>
                    <input type="text" id="nome" name="requirednome" class="field" />
                    <h4>E-mail</h4>
                    <input type="text" id="email" name="requiredemail" class="field" onblur="validacaoEmail(f2.email)" />
                    <div id="msgemail"></div>        
                    <h4>Telefone</h4>
                    <input type="text" id="fone" name="requiredfone" class="field" maxlength="14" onkeypress="fw_mascara(this,'## #.####.####')" />
                    <h4>Mensagem</h4>
                    <textarea id="mensagem" name="requiredmensagem" class="field"></textarea><br /><br />
                    <input type="submit" class="btn-send" value="SEND" title="Send" />
                </form>
            </div>
        </div>
    </div>
</div>