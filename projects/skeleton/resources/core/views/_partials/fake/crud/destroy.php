<div class="row crud">

    <div class="col-lg-12">

        <h2>Remover ??????</h2>

        <table class="table table-bordered">

            <tbody>
            <tr>
                <th>ID</th>
                <td><?php echo $_GET[ 'id' ]; ?></td>
            </tr>
            <tr>
                <th>??????</th>
                <td>??????</td>
            </tr>
            <tr>
                <th>??????</th>
                <td>??????</td>
            </tr>
            </tbody>

        </table>

        <form method="post" action="<?php echo htmlspecialchars( $_SERVER[ "PHP_SELF" ] ); ?>">

            <input type="hidden" name="id" value="<?php echo $_GET[ 'id' ]; ?>">

            Voce tem certeza que deseja remover este (??? Model ???)?
            <input type="submit" class="btn btn-danger" name="destroySubmit" value="Remover">

        </form>

    </div>

</div>