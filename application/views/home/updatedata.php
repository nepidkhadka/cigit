<?php
    $this->load->view('layout/header');
    $this->load->view('layout/css');
    $this->load->view('layout/navbar');
?>

<body>
<div class="container" style="padding: 20px" >
    <h4>Update User</h4>
    <?=validation_errors(); ?>
    <form action="<?=base_url('Crud/update')?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <div class="form-groups">
                <input type="hidden" name="id" value="<?=$users->id;?>" >
                <label for="name"> Name </label>
                <input type="text" name="name" value="<?=$users->name;?>" class="form-control" required>
                <label for="address"> Address </label>
                <input type="text" name="address" value="<?=$users->address;?>" class="form-control" required>
                <label for="email"> Email </label>
                <input type="email" name="email" value="<?=$users->email;?>" class="form-control" required>
                <button type="submit"name="updatedata" class="btn btn-primary" > Update User </button>
                <a class="btn btn-secondary" href="<?=base_url('view')?>"> Cancel </a>
            </div>
        </div>
    </div>
    </form>
</div>
</body>





<?php
    $this->load->view('layout/footer');
?>