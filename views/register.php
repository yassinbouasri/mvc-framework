<h1>Create an account</h1>
<?php $form =  \app\core\form\Form::begin('', 'post')?>

    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname')?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname')?>
        </div>
    </div>
    <?php echo $form->field($model, 'email')?>
    <?php echo $form->field($model, 'password')->passwordField()?>
    <?php echo $form->field($model, 'confirmpassword')->passwordField()?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php \app\core\form\Form::end() ?>
<!--<form action="/register" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" name="firstname" value="<?/*= $model->firstname ?? '' */?>"
                       class="form-control<?/*= $model->hasError('firstname') ? ' is-invalid' : ''*/?>">
                <div class="invalid-feedback">
                    <?/*= $model->getFirstError('firstname') */?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" >
            </div>
        </div>
    </div>


    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" >
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" >
    </div>

    <div class="mb-3">
        <label>Confirm password</label>
        <input type="password" name="confirmpassword" class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>-->