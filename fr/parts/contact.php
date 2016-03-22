<link rel="stylesheet" href="../css/contact.css">

<!-- Contact Section -->
<div id="contact" class="page">
<div class="map">
    <div class="overlay" onClick="style.pointerEvents='none'"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10542.98499225121!2d-2.008738575272134!3d48.65296938429269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e817981c0aa29%3A0x973e5ef60675f7cc!2s3+Avenue+Victor+Hugo%2C+35400+Saint-Malo!5e0!3m2!1sfr!2sfr!4v1435140954780" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Envoyez-nous un message</h2>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="col-sm-9">
        
        	<form id="contact-form" class="contact-form" action="#" method="post">
            	<div class="input-group">
            		<input class="form-control" id="contact_name" type="text" placeholder="Votre Nom" value="" name="name" />
                </div>
                <div class="input-group">
                    <input class="form-control" id="contact_tel" type="text" placeholder="Votre numero de telephone" value="" name="tel" />
                </div>
                <div class="input-group">
                	<input class="form-control" id="contact_email" type="text" placeholder="Votre Adresse e-mail" value="" name="email" />
                </div>
                <div class="input-group">
                	<textarea id="contact_message" placeholder="Votre Message" name="message" rows="15" cols="40"></textarea>
                </div>
                <div class="input-group">
                	<input class="form-control" id="contact-submit" class="submit" type="submit" value="Envoyer"/>
                </div>
                
                <div id="response">
                
                </div>
            </form>
         
        </div>
        
        <div class="col-sm-3">
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->