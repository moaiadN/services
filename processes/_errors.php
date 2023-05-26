<?php if (count($errors) > 0) : ?>
    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <?php foreach ($errors as $error) : ?>
            <div><?php echo $error ?></div>
        <?php endforeach ?>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
<?php endif ?>