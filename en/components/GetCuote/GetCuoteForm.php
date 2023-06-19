<section id="get-a-quote" class="get-a-quote">
    <div class="container" data-aos="fade-up">

        <div class="row g-0">

            <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

            <div class="col-lg-7">
                <form action="forms/quote.php" method="post" class="php-email-form">
                    <h3>Get a quote</h3>
                    <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="departure" class="form-control" placeholder="City of Departure" required>
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="delivery" class="form-control" placeholder="Delivery City" required>
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)" required>
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)" required>
                        </div>

                        <div class="col-lg-12">
                            <h4>Your Personal Details</h4>
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="col-md-12 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                            <button type="submit">Get a quote</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>