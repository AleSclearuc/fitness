<?php
$date = date("d/m/Y H:i");

include("PHPMailer/class.phpmailer.php");

//#########################################
// Recebe as informa��es do formul�rio
//#########################################

$nome = $_POST["requirednome"];
$email = $_POST["requiredemail"];

$assunto = "Cadastro de News";

$PHPMailer = new PHPMailer();
 
// define que ser� usado SMTP
$PHPMailer->IsSMTP();
 
// envia email HTML
$PHPMailer->isHTML( true );
 
// codifica��o UTF-8, a codifica��o mais usada recentemente
$PHPMailer->Charset = 'UTF-8';
 
// Configura��es do SMTP
$PHPMailer->SMTPAuth = true;
$PHPMailer->SMTPSecure = 'tls';
$PHPMailer->Host = 'smtp.live.com';
$PHPMailer->Port = 587;
$PHPMailer->Username = 'contato@ajudadivina.com.br';
$PHPMailer->Password = 'con54321';
 
// E-Mail do remetente (deve ser o mesmo de quem fez a autentica��o
// nesse caso seu_login@gmail.com)
$PHPMailer->From = 'ale@alesclearuc.com.br';
 
// Nome do rementente
$PHPMailer->FromName = 'Fitness';
//Enderecos que devem ser enviadas as mensagens (Pode haver mais de 1)
$PHPMailer->AddAddress("ale@alesclearuc.com.br","Fitness");

//Endere�o de resposta
$PHPMailer->AddReplyTo($email);
$PHPMailer->WordWrap = 50; // set word wrap
$PHPMailer->IsHTML(true); // send as HTML
$PHPMailer->Subject = $assunto;
$PHPMailer->Body = "
$assunto<br /><br />

Nome: $nome<br />
Email: $email<br />

===================================== ENVIADO EM: $date =====================================
";
$PHPMailer->AltBody = "";

if(!$PHPMailer->Send())

{
	echo "<script type='text/javascript'> alert('A Mensagem N�O pode ser enviada!');</script>";
	echo "Erro: " . $PHPMailer->ErrorInfo;
	echo "<meta http-equiv='refresh' content='1;url=http://127.0.0.1/fitness/?pagina=home'>";
	exit;
}
	echo "<script type='text/javascript'> alert('Mensagem Enviada com Sucesso!');</script>";
	echo "<meta http-equiv='refresh' content='1;url=http://127.0.0.1/fitness/?pagina=home'>";
	
//CONFIGURA��ES DA MENSAGEM DE RESPOSTA
$assunto="Confirma��o";
$nome_do_site="Fitness";
$email_de_envio = "ale@alesclearuc.com.br";
$nome_de_quem_recebe_a_mensagem = "Fitness";
$assunto_da_mensagem_de_resposta = "Confirma��o";
$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_de_envio>\n";
$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nAgradecemos o seu interesse.\nEm breve um de nossos atendentes retornar� sua solicita��o.\n\nAtenciosamente,\n".$nome_do_site;
//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA
$headers = "$cabecalho_da_mensagem_de_resposta";
if ($assunto_digitado_pelo_usuario=="Contato")
{
$assunto = "$assunto_da_mensagem_de_resposta";
}
	else
{
$assunto = "Re: $assunto";
};
$mensagem = "$configuracao_da_mensagem_de_resposta";
mail($email,$assunto,$mensagem,$headers);	
	
?> 
