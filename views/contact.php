<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/MVC/css/headfoot.css" /> 
</head>
<body>
    <header>
        <?php require 'header.php'; ?>
</header>
    <section class="ContainerContact">
        <h1>CONTACT</h1>

        <h3>Le Magasin</h3>
        <p>Le magasin est ouvert le samedi matin de 10h00 à 12h30 ou sur rendez-vous.</p>
    
        <div class="motte">
            <p>Didier Motte</p>
            <!--<a type="button" href="mailto:dmotte@skynet.be">dmotte@skynet.be</a>-->
            <a href="dmotte@skynet.be" target="blank" rel="noopener">dmotte@skynet.be</a>
        </div>

        <div class="phone">
            <p>+32 495 20.59.34</p>
        </div>

        <div class="street">
            <p>Rue Saint Georges 35 B-1400 Nivelles Belgique</p>
        </div>

        <div class="net">
            <p class="jour" >Retrouvez nos mises à jour en vous </p>
            <a href="https://www.facebook.com/antiquites.decoration" target="blank" rel="noopener">abonnant
            à notre page Facebook</a>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.589024118154!2d4.324949051566765!3d50.59759157939534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47b28871169%3A0xd0fca6aa6f9f5da2!2sDidier+Motte+-+Interior+Design%2C+Antiquit%C3%A9s%2C+D%C3%A9coration%2C+Agencement!5e0!3m2!1snl!2sbe!4v1521019867915" 
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="itineris">
            <form>
                <p>Lieu de départ:
                    <input type="text" name="form">
                    <input type="submit" name="Itinéraire" value="Itinéraire">
                </p>
            </form>
        </div>
    </section>
    <footer>
        <?php require 'footer.php'; ?>
    </footer>

</body>
</html>