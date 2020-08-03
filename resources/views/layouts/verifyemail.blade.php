<!DOCTYPE html>
<html>

@if( app()->getLocale() == 'de' )
<head>
    <title>Anfrage WebPack</title>
   </head>
   <body>

Sehr geehrte Damen und Herren,


    bitte bestätigen Sie ihre E-Mail Adresse durch Klick auf den folgenden Link: <a href="https://192.168.178.24/bithome/verify/{{$filename}}/{{app()->getLocale()}}/'welcome'">Bitte klicken Sie hier um ihre E-Mail Adresse zu verifizieren</a>

    <br/>
    Sollte dies nicht funktionieren kopieren Sie bitte den nachfolgenden Link in die Adressleiste ihres Browsers.
    <br/>
    https://192.168.178.24/bithome/verify/{{$filename}}/{{app()->getLocale()}}/'welcome'

Mit freundlichen Grüßen



@elseif( app()->getLocale() == 'sp' )
<head>
    <title>Solicitar WebPack</title>
   </head>
   <body>

Estimado Cliente,


Confirme su dirección de correo electrónico haciendo clic en el siguiente enlace: <a href="https://192.168.178.24/bithome/verify/{{$filename}}/{{app()->getLocale()}}/'welcome'">Haga clic aquí para verificar su dirección de correo electrónico</a>

    <br/>
    Si esto no funciona, copie el siguiente enlace a la barra de direcciones de su navegador.
    <br/>
    https://192.168.178.24/bithome/verify/{{$filename}}/{{app()->getLocale()}}/'welcome'

    Atentamente


@elseif( app()->getLocale() == 'en' )
<head>
    <title>Request WebPack</title>
   </head>
   <body>

Dear Sirs,


Please confirm your e-mail address by clicking on the following link: <a href="https://192.168.178.24/bithome/verify/{{$filename}}/{{app()->getLocale()}}/'welcome'">Please click here to verify your e-mail address</a>

    <br/>
    If this does not work, please copy the following link to the address bar of your browser.
    <br/>
    https://192.168.178.24/bithome/verify/{{$filename}}/{{app()->getLocale()}}/'welcome'

    Yours sincerely


@endif

B-IT Service

tel.: ++(49)2235/697494
fax : ++(49)2235/697495
Im Spürkergarten 38-40
50374 Erftstadt

</body>
</html>
