<h2 class="jumbotron">New @todo</h2>

<div class="row crud">

    <div class="col-lg-12">

        <form
            method="post"
            class="form-horizontal"
            action="<?php echo htmlspecialchars( $_SERVER[ "REQUEST_URI" ] ); ?>">

            <div class="form-group">

                <label for="inputField1" class="col-sm-2 control-label">@todo</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField1" class="form-control" id="inputField1" placeholder="@todo">
                </div>

            </div>

            <div class="form-group">

                <label for="inputField2" class="col-sm-2 control-label">@todo</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField2" class="form-control" id="inputField2" placeholder="@todo">
                </div>

            </div>

            <div class="form-group">

                <label for="inputField3" class="col-sm-2 control-label">@todo</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField3" class="form-control" id="inputField3" placeholder="@todo">
                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="createSubmit" class="btn btn-default" value="Cancel">
                    <input type="submit" name="createSubmit" class="btn btn-primary" value="Create">
                </div>
            </div>

        </form>

    </div>

</div>
