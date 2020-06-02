
<html>
<head>
    <link rel="stylesheet" href="email.css">
    <title></title>
</head>

<body>

    <div class="contact-title">
        <h1>Neem gerust contact met ons op!</h1>
        <h2> Wij staan klaar om u verder te helpen!</h2>
    </div>

    <div class="contact-form">
        <form id="contact-form" method="post" action="sendEmail.php">
            <input name="name" type="text" class="form-control" placeholder="Uw naam" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Uw E-mailadres" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Uw vraag" row="4" required></textarea>
            <br>

            <input type="submit" class="form-control submit" value="Verstuur bericht">

        </form>
    </div>


