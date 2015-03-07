<div class="row crud">

    <div class="col-lg-12">

        <h2>Alterar (??? Model ???)</h2>

        <form method="post" action="<?php echo htmlspecialchars( $_SERVER[ "PHP_SELF" ] ); ?>">

            <input type="hidden" name="id" value="<?php echo $_GET[ 'id' ]; ?>">

            <div class="form-group">
                <label for="idInput">ID</label>
                <input type="number" value="<?php echo $_GET[ 'id' ]; ?>" class="form-control" id="idInput" disabled>
            </div>

            <div class="form-group">
                <label for="field1Input">??????</label>
                <input type="text" name="field1" class="form-control" id="field1Input" placeholder="Informe o ??????">
            </div>

            <div class="form-group">
                <label for="field2Input">??????</label>
                <input type="text" name="field2" class="form-control" id="field2Input" placeholder="Informe o ??????">
            </div>

            <div class="form-group">
                <label for="field3Input">??????</label>
                <input type="text" name="field3" class="form-control" id="field3Input" placeholder="Informe o ??????">
            </div>

            <input type="submit" name="editSubmit" class="btn btn-default" value="Salvar">

        </form>

    </div>

</div>