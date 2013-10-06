<script src="<?php echo JS_DIR; ?>jquery.validationEngine-en.js" type="text/javascript" language="javascript" charset="utf-8"></script>
<script src="<?php echo JS_DIR; ?>jquery.validationEngine.js" type="text/javascript" language="javascript" charset="utf-8"></script>
<script type="text/javascript">
    $( document ).ready( function(){
        $( "#frm_login" ).validationEngine();
    });
</script>
<div class="dialog">
    <div class="block">
        <p class="block-heading">Sign In</p>
        <div class="block-body">
            <form method="post" action="" name="frm_login" id="frm_login">
                <?php if( $this->session->flashdata('msg') ) { ?>
                <div id="msg" class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Notice:</strong>&nbsp;<div id="msg-alert" style="display: inline-block;">asd</div>
                </div>
                <?php } ?>
                <label>Username</label>
                <input type="text" id="username" name="username" class="span12 text validate[required]" style="width:96%" data-errormessage-value-missing="Username is required!">
                <label>Password</label>
                <input type="password" id="password" name="password" class="span12 text validate[required]" style="width:96%" data-errormessage-value-missing="Password is required!">
                <div id="buttons">
                    <button id="member_submit_btn" class="btn btn-primary pull-right">Sign In</button>
                </div>
                <div id="loading" class="pull-right" style="display:none;">
                    Signing in <img src="<?php echo base_url();?>assets/img/login-loader.gif" >
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>