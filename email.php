<?<php>

if (isset($_POST['name']) && !empty($_POST['email'])){
$nome = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])

$to = 'email.';
$subject = 'igoralmeidasucegan56@gmail.com';
$body = "nome".$nome "\r\n"
        "email".$email "\r\n";
$headar = "form : igoralmeidasucegan56@gmail.com"."\r\n".
        "Replay-to".$email."\r\n".
        "X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$body,$headar)){

    echo("email foi entregue!");

}else{

    echo("email não foi entregue");

}
}
</php>