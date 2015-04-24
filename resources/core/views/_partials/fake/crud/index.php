<h1 class="jumbotron">crud :: @todo</h1>

<div class="row crud">

    <div class="col-lg-12">

        <table class="table table-bordered">

            <thead>
            <tr>
                <th>ID</th>
                <th>@todo</th>
                <th>@todo</th>
                <th>@todo</th>
                <th></th>
            </tr>
            </thead>

            <tbody>

            <?php foreach ( range( 1, 4 ) as $modelId ) : ?>

                <tr>
                    <td><?php echo $modelId; ?></td>
                    <td>@todo</td>
                    <td>@todo</td>
                    <td>@todo</td>
                    <td>
                        <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                        <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

        <a href="<?php echo htmlspecialchars( $_SERVER[ "REQUEST_URI" ] ); ?>" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus"></span> New @todo
        </a>

    </div>

</div>