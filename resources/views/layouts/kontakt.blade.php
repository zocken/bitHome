<div style="backdrop-filter:blur(3px)" class="mb-5 center-block col-12">
    <div class="container">
        <div  class="blured row seitenAbschnitt py-5">
            <div class="col-sm-4 ">
                <h3 class="bg-white p-1">Kontaktanfrage</h3>
                <p class="bg-white p-1">Über dieses Formular kannst du deinen Bestellwunsch an uns übermitteln.</p>
                <p class="bg-white p-1">Wir treten innerhalb der nächsten 24 Stunden mit ihnen in Kontakt.</p>
            </div>
            <div class="col-sm-8">
                <form id="orderform" action="{{ route ('sendOrderMail') }}" method = "POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Bitte geben Sie ihren Namen ein.">
                    </div>
                    <div class="form-group">
                        <label for="inputMail">E-Mail-Adresse</label>
                        <input type="email" class="form-control" id="inputMail" name="inputMail" placeholder="E-Mail-Adresse eingeben" aria-describedby="emailHilfe">
                        
                    </div>
                    <div class="form-group">
                        <label for="textareaNachricht">Ihre Nachricht</label>
                        <textarea class="form-control" id="textareaNachricht" rows="5" name="textareaNachricht"></textarea>
                    </div>
                     
                    <div class="row">
                        <div class="col-1 pr-4">
                            <button class="btn btn-dark" type="submit">Senden</button>
                        </div>
                        <div class="d-none d-sm-block col-lg-10 mx-auto">
                            <span> Mit dem absenden der Mail versichere ich das ich die Datenschutzerklärung zur Kenntnis genommen und akzeptiert habe . Ich stimme zu, dass meine Angaben zur Kontaktaufnahme gespeichert werden.</span></div>
                        </div>
                    </div>   
                </form>
            </div>
            
        </div>
    </div>
</div>
