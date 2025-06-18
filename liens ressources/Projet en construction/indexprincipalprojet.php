

<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-moi !</title>
        <meta charset="utf8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="CSS/style.css">
        <script src="JS\script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom<span style="color:rgb(208, 105, 25)">*</span></label>
                                <input type="text" id= "firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Nom<span style="color:rgb(208, 105, 25)"> *</span></label>
                                <input type="text" id= "lastname" name="lastname" class="form-control" placeholder="Votre nom" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email<span style="color:rgb(208, 105, 25)"> *</span></label>
                                <input type="email" id= "email" name="email" class="form-control" placeholder="Votre Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input type="tel" id= "phone" name="phone" class="form-control" placeholder="Votre téléphone">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message<span style="color:rgb(208, 105, 25)"> *</span></label>
                                <textarea id= "message" name="message" class="form-control" placeholder="Votre message" rows=4></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p class="orange"><strong>* Ces informations sont requises</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                            </div>
                        </div>
                </form>
                </div>
            </div>


        </div>

    </body>


</html>