<!DOCTYPE html>
<html>

@if( app()->getLocale() == 'de' )
<head>
    <title>Anfrage WebPack</title>
   </head>
   <body>

Sehr geehrte Damen und Herren,<br/>


    bitte bestätigen Sie ihre E-Mail Adresse durch Klick auf den folgenden Link:<br/><br/> <a href="https://web-seo-it.de/bithome/verify/{{$filename}}/{{app()->getLocale()}}">Bitte klicken Sie hier um ihre E-Mail Adresse zu verifizieren</a>

    <br/><br/>
    Sollte dies nicht funktionieren kopieren Sie bitte den nachfolgenden Link in die Adressleiste ihres Browsers.<br/>
    <br/>
    https://web-seo-it.de/bithome/verify/{{$filename}}/{{app()->getLocale()}}<br/><br/>

    <br/>Mit freundlichen Grüßen<br/><br/>



@elseif( app()->getLocale() == 'sp' )
<head>
    <title>Solicitar WebPack</title>
   </head>
   <body>

Estimado Cliente,<br/>


Confirme su dirección de correo electrónico haciendo clic en el siguiente enlace:<br/><br/> <a href="https://web-seo-it.de/bithome/verify/{{$filename}}/{{app()->getLocale()}}">Haga clic aquí para verificar su dirección de correo electrónico</a>

    <br/><br/>
    Si esto no funciona, copie el siguiente enlace a la barra de direcciones de su navegador.
    <br/><br/>
    https://web-seo-it.de/bithome/verify/{{$filename}}/{{app()->getLocale()}} <br/><br/>

    Atentamente<br/><br/>


@elseif( app()->getLocale() == 'en' )
<head>
    <title>Request WebPack</title>
   </head>
   <body>

Dear Sirs,<br/>


Please confirm your e-mail address by clicking on the following link:<br/><br/> <a href="https://web-seo-it.de/bithome/verify/{{$filename}}/{{app()->getLocale()}}">Please click here to verify your e-mail address</a>

    <br/><br/>
    If this does not work, please copy the following link to the address bar of your browser.
    <br/><br/>
    https://web-seo-it.de/bithome/verify/{{$filename}}/{{app()->getLocale()}}<br/><br/>

    Yours sincerely<br/><br/>


@endif

B-IT Service<br/><br/>

tel.: ++(49)2235/697494<br/>
fax : ++(49)2235/697495<br/>
Im Spürkergarten 38-40<br/>
50374 Erftstadt<br/>

</body>
</html>
