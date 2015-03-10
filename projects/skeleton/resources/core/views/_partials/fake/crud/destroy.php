<h2 class="jumbotron">Destroy @todo</h2>

<div class="row crud">

    <div class="col-lg-12">

        <table class="table table-bordered">

            <tbody>
            <tr>
                <th class="col-lg-3">ID</th>
                <td class="col-lg-9"><?php echo $_GET[ 'id' ]; ?></td>
            </tr>
            <tr>
                <th>@todo</th>
                <td>@todo</td>
            </tr>
            <tr>
                <th>@todo</th>
                <td>@todo</td>
            </tr>
            <tr>
                <th>@todo</th>
                <td>@todo</td>
            </tr>
            </tbody>

        </table>

        <form
            method="post"
            action="<?php echo htmlspecialchars( $_SERVER[ "REQUEST_URI" ] ); ?>">

            <input type="hidden" name="id" value="<?php echo $_GET[ 'id' ]; ?>">

            Are you sure you want to destroy @todo?
            <input type="submit" class="btn btn-default" name="destroySubmit" value="No">
            <input type="submit" class="btn btn-danger" name="destroySubmit" value="Yes">

        </form>

    </div>

</div>
