<?php echo do_shortcode('[contact-form-7 id="416" title="Minimal Contact"]'); ?>

<div id="contactForm">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                [text* your-name id:name class:form-control placeholder "Name"]
                <div class="help-block with-errors"></div>
            </div>                                 
        </div>
        <div class="col-md-6">
            <div class="form-group">
                [email* email id:email class:form-control placeholder "Email"]
                <div class="help-block with-errors"></div>
            </div> 
        </div>
        <div class="col-md-12">
            <div class="form-group">
                [text* subject id:msg_subject class:form-control placeholder "Subject"]
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                [textarea* message id:message class:form-control placeholder "Your Message"]
                <div class="help-block with-errors"></div>
            </div>
            <div class="submit-button">
                [submit id:form-submit class:btn class:btn-common "Send Message"]
                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                <div class="clearfix"></div> 
            </div>
        </div>
    </div>            
</div>

