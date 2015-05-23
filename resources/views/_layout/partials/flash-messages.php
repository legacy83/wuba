<?php if ( \Core\Helper\Flash::success()->has() ) : ?>

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul><?php foreach ( \Core\Helper\Flash::success()->get() as $message ) echo "<li>$message</li>"; ?></ul>
    </div>

<?php endif; ?>