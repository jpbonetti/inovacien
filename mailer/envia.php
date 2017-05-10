<?php
  require 'PHPMailerAutoload.php';
  date_default_timezone_set('America/Sao_Paulo');
  setlocale (LC_ALL, 'pt_BR');
  $data = ''. date('d') .' de '. date('F') .' de '. date('Y') .' às '. date('g:ia') .'';
  $nome_cliente = $_POST['nome'];
  $assunto_cliente = $_POST['assunto'];
  $email_cliente = $_POST['email'];
  $telefone_cliente = $_POST['celular'];
  $empresa_cliente = $_POST['empresa'];
  $comoNosAchou_cliente = $_POST['comoNosAchou'];
  $motivacaoContato_cliente = $_POST['motivacaoContato'];
  $texto_mensagem = 'Nome: '. $nome_cliente .'<BR>'
  .'Assunto: ' .$assunto_cliente .'<BR>'
  .'Email: ' .$email_cliente .'<BR>'
  .'Celular: ' .$telefone_cliente .'<BR>'
  .'Empresa: ' .$empresa_cliente .'<BR>'
  .'Como nos achou: ' .$comoNosAchou_cliente .'<BR>'
  .'Motivação do Contato: ' .$motivacaoContato_cliente .'<BR>'
  .'Data: ' .$data;

  $mensagem = '' .$texto_mensagem. '';
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = 'smtp.umbler.com;smtp.umbler.com'; /* não pergunte... funciona assim :O */
  $mail->SMTPAuth = true;
  $mail->Username = 'contato@inovacien.com.br';
  $mail->Password = 'Enq-Fdp-Cxo-Ag2';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage = 'pt_br'  ;
  $mail->setFrom('contato@inovacien.com.br', 'Contato - Inovacien');
  $mail->addAddress('contato@inovacien.com.br', 'Contato - Inovacien');
  $mail->addAddress('jpbr.webdesigner@gmail.com', 'Contato - Inovacien');
  $mail->isHTML(true);
  $mail->Subject = 'Novo Contato';
  $mail->Body    = $mensagem;
  $mail->AltBody = 'Este é o e-mail sem html, para leitores que não tem suporte.';
  if(!$mail->send()) {
      echo 'Mensagem não enviada :(';
      echo 'Oxi, deu este erro guys: ' . $mail->ErrorInfo;
  } else {
      echo 'Mensagem enviada ;)';
  }
?>