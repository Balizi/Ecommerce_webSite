<template>
    <div class="footer pt-5 pb-5 text-white-50 text-center text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="info mb-5">
                        <img src="./../assets/img/logo1.png" style="width: 100px;" alt="" class="mb-4">
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, odio!</p>
                        <div class="copyright">
                            Created By <span>Graphberry</span>
                            <div>&copy; 2022 - <span>Bondi Inc</span></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2">
                    <div class="links">
                        <h5 class="text-light">Links</h5>
                        <ul class="list-unstyled lh-lg">
                            <li>Home</li>
                            <li>Our Services</li>
                            <li>Portfolio</li>
                            <li>Testimonials</li>
                            <li>Support</li>
                            <li>Terms and Condition</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2">
                    <div class="links">
                        <h5 class="text-light">About Us</h5>
                        <ul class="list-unstyled lh-lg">
                            <li>Sign In</li>
                            <li>Register</li>
                            <li>About Us</li>
                            <li>Blog</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>

                <div class="col col-md-6 col-lg-4">
                    <div class="contact">
                        <h5 class="text-light">Install App</h5>
                        <p class="mh-lg mt-3 mb-5">
                            From App Store or google Play
                        </p>
                        <div class="row">
                            <img src="./../assets/img/pay/app.jpg" alt="">
                            <img src="./../assets/img/pay/play.jpg" alt="">
                        </div>
                        <p class="mh-lg mt-3 mb-5">
                            Secured Payment Gateways
                        </p>
                            <img src="./../assets/img/pay/pay.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "FooterVue"
}
</script>
<style>
    /* Start Footer */
.footer {
    background-color: #228896;
    width: 100%;
}

.footer .copyright>span {
    color: #33d1cc;
}

.footer .copyright div span {
    color: #ffc400;
}

.footer .contact ul svg {
    width: 20px;
    height: 20px;
}

.footer .container .row .col .contact .row img {
    width: 200px;
}

.footer .container .row .col .contact .row {
    /* background-color: red; */
    display: flex;
    justify-content: flex-start;

}

.contact .row img{
    margin: auto;
    margin-bottom: 5px;
}

/* End Footer */
</style>