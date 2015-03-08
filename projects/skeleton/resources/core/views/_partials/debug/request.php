<div class="row marketing well">

    <div class="col-lg-4">

        <h4>debug :: @request</h4>

        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

    </div>

    <div class="col-lg-8">

        <?php if ( !empty( $_GET ) ) : ?>

            <h4>debug :: @get</h4>
            <pre><?php var_dump( $_GET ); ?></pre>

        <?php endif; ?>

        <?php if ( !empty( $_POST ) ) : ?>

            <h4>debug :: @post</h4>
            <pre><?php var_dump( $_POST ); ?></pre>

        <?php endif; ?>

    </div>

</div>