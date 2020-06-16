<div class="container">

<!--Section heading-->
<h2 class=" font-weight-bold text-center my-4">Contact</h2>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="./content/mail/sendEmail.php" method="POST">
            <input type="hidden" name="MailName" value="ContactForm">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-2">
                        <label for="name" class="font-weight-bold">Naam:</label>
                        <input id="name" type="text" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-2">
                        <label for="email" class="font-weight-bold">Email:</label>
                        <input id="email" type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-2">
                        <label for="subject" class="font-weight-bold">Onderwerp:</label>
                        <input id="subject" type="text" id="subject" name="subject" class="form-control"
                            required>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-2">
                    <label for="message" class="font-weight-bold">Bericht:</label>
                    <input id="message" type="text" id="message" name="message" rows="2"
                        class="form-control md-textarea" style="max-height: 150px; min-height: 50px;"
                        required></textarea>
                </div>
            </div>
            <!--Grid row-->

            <div class="text-center text-md-left">
            <input type="submit" value="Send" class="btn btn-primary font-weight-bold text-white">
        </div>
        <div id="status"></div>
    </div>

        </form>


    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 col-12 text-center my-auto">
        <ul class="list-unstyled mb-0">
            <li>
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <p>1e Middellandstraat 10-A, 3014 BD Rotterdam</p>
            </li>

            <li>
                <i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>carmeetproject2020@gmail.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->
</div>
</div>