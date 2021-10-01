{include file='templates/header.tpl'}
    <div class="row mt-4">
            <div class="col-md-4">
                <h2>{$titulo}</h2>
                <form class="form-alta" action="register" method="POST">
                    <input placeholder="nombre" type="text" name="nombre" id="nombre" required>
                    <input placeholder="password" type="password" name="password" id="password" required>
                    <input type="submit" class="btn btn-primary" value="Register">
                </form>
            </div>
        </div>
 {include file='templates/footer.tpl'}