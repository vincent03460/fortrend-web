<?php
use_helper('I18N');
?>

<!-- Main Content start-->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" id="contact-form">
                <h3 class="title">Send Us an Email</h3>

                <div class="divider"></div>
                
                <form method="post" class="reply" id="contact_form" action="#">
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><?php echo __("Name") ?>: <span>*</span></label>
                                <input class="form-control" id="name" name="name" type="text" value="" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label><?php echo __("Email") ?>: <span>*</span></label>
                                <input class="form-control" type="email" id="email" name="email" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label><?php echo __("Subject") ?>: <span>*</span></label>
                                <input class="form-control" id="subject" name="subject" type="text" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label><?php echo __("Message") ?>: <span>*</span></label>
                                <textarea class="form-control" id="text" name="text" rows="3" cols="40" required></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <button id="submit_form" class="btn-normal btn-color submit bottom-pad" type="submit"><?php echo __("Send") ?></button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="address widget">
                    <h3 class="title">Keep In Touch</h3>
                    <p>
                        Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.
                    </p>

                    <p>
                        Please be patient while waiting for response. (24/7 Support!)
                    </p>
<!--                    <h3 class="title">Head Office</h3>-->
<!--                    <ul class="contact-us">-->
<!--                        <li>-->
<!--                            <i class="fa fa-map-marker"></i>-->
<!---->
<!--                            <p>-->
<!--                                <strong class="contact-pad">Address:</strong> House: 325, Road: 2,<br> Mirpur DOHS <br>-->
<!--                                Dhaka, Bangladesh-->
<!--                            </p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <i class="fa fa-phone"></i>-->
<!---->
<!--                            <p>-->
<!--                                <strong>Phone:</strong> +880 111-111-111-->
<!--                            </p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <i class="fa fa-envelope"></i>-->
<!---->
<!--                            <p>-->
<!--                                <strong>Email:</strong><a href="mailto:support@fifothemes.com">support@fifothemes.com</a>-->
<!--                            </p>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
<!--                <div class="contact-info widget">-->
<!--                    <h3 class="title">Business Hour</h3>-->
<!--                    <ul class="business-hour">-->
<!--                        <li><i class="fa fa-clock-o"> </i>Monday - Friday 9am to 5pm</li>-->
<!--                        <li><i class="fa fa-clock-o"> </i>Saturday - 9am to 2pm</li>-->
<!--                        <li><i class="fa fa-times-circle-o"> </i>Sunday - Closed</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="follow widget">-->
<!--                    <h3 class="title">Follow Us</h3>-->
<!---->
<!--                    <div class="member-social dark">-->
<!--                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>-->
<!--                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>-->
<!--                        <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>-->
<!--                        <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>-->
<!--                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                <h3 class="title">Our Location</h3>-->
<!---->
<!--                <div id="maps" class="google-maps">-->
<!--                </div>-->
<!--                <!-- Left Section End -->
<!--            </div>-->
<!--        </div>-->
        <div class="divider"></div>
    </div>
</div>
<!-- Main Content end-->

<?php slot("javascript") ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("form#contact_form button#submit_form").click(function() {
            if ($("#name").val() == "") {
                alert("Name cannot be blank.");
                return false;
            }

            if ($("#email").val() == "") {
                alert("Email cannot be blank.");
                return false;
            }

            if ($("#subject").val() == "") {
                alert("Subject cannot be blank.");
                return false;
            }

            if ($("#message").val() == "") {
                alert("Message cannot be blank.");
                return false;
            }

            alert("Your message was sent successfully. Thank you.");
            window.location.href = "<?php echo url_for("/keep_in_touch") ?>";
        });
    });
</script>

<?php end_slot() ?>