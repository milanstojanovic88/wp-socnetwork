<?php get_header(); ?>
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 60px;">
<?php $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0; ?>
<?php if (isset($login) && !empty($login)) : ?>
<div class="alert alert-danger" role="alert">
    <?php
        if ($login === 'failed') : echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
        elseif ($login === 'empty') : echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
        elseif ($login === 'false') : echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';
        endif;
    ?>
</div>
<?php endif; ?>

<?php
$args = array(
    'redirect' => home_url('/'),
    'form_id' => 'login_form'
)
;?>
<?php wp_login_form( $args ); ?>
                </div> <!-- col-md-12 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- content-section -->
<?php get_footer(); ?>
<script>
    $(document).ready(function () {

        var formGroups = document.querySelectorAll('#login_form p');

        for(var i = 0; i < formGroups.length; i++) {
            $(formGroups[i]).replaceWith(function () {
                return $('<div />', {
                    html: $(this).html(),
                    class: 'form-group'
                });
            });
        }

        $('div.form-group input[type="text"]').addClass('form-control');
        $('div.form-group input[type="password"]').addClass('form-control');
        $('div.form-group label input[type="checkbox"]').addClass('checkbox')
            .parent('label').parent('div')
            .removeClass('form-group').addClass('checkbox');
        $('div.form-group input[type="submit"]').replaceWith(function () {
            return $('<button />', {
                html: 'Log In',
                class: 'btn btn-primary',
                type: 'submit',
                name: 'wp-submit',
                id: 'wp-submit'
            });
        });

        $('#login_form').append('<a href="#">Reset your password.</a>');

    });
</script>
<a href=""></a>