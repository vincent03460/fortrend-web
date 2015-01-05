<?php
use_helper('I18N');
?>
<section class="property-banner" id="page-banner">
    <img src="/images/page-contact-banner.jpg" alt="" class="img-responsive">
</section>

<section id="content">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar-menu">
                <div class="sidebar-title">
                    <h2><?php echo __("Contact") ?></h2>
                </div>
                <?php include_component('component', 'leftmenu', array("module" => $sf_context->getModuleName(), "action" => $sf_context->getActionName())) ?>
            </div>
        </div>

        <div class="col-md-9" id="page-content">
            <h2><?php echo __("Keep in Touch") ?></h2>

            <div class="divider"></div>
            <form class="form-horizontal" id="contact-us-form" action="#" method="post" class="">
                <input type="hidden" name="__req" value="1">
                <input type="hidden" name="__nonce" value="f72e22cc0058b8f5cdca89fffb50830902a7476afd20004787f5500e3fd4c07b">
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="name"><?php echo __("Name") ?><span class="required">*</span></label>

                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" value="" placeholder="Name" aria-required="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email"><?php echo __("Email") ?><span class="required" title="required">*</span></label>

                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" value="" placeholder="Email" aria-required="true" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="subject"><?php echo __("Subject") ?><span class="required" title="required">*</span></label>

                        <div class="col-sm-10">
                            <input type="text" name="subject" id="subject" value="" placeholder="Subject" aria-required="true" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="message"><?php echo __("Message") ?><span class="required" title="required">*</span></label>

                        <div class="col-sm-10">
                            <textarea name="message" id="message" cols="40" rows="7" placeholder="Message" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input value="<?php echo __("Submit") ?>" class="btn btn-primary" type="submit" id="submit_form">
                        </div>
                    </div>
                </fieldset>
            </form>

            <script type="text/javascript" src="/js/jquery-1.9.2.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("input#submit_form").click(function() {
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
        </div>
    </div>
</section>