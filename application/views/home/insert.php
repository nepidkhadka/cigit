<?php
    $this->load->view('layout/header');
    $this->load->view('layout/css');
    $this->load->view('layout/navbar');
?>

<body>
<div class="container" style="padding: 20px" >
    <h4>Add User</h4>
    <?php echo validation_errors(); ?>
    <form action="<?=base_url('insertdata')?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <div class="form-groups">
                <label for="name"> Name </label>
                <input type="text" name="name" class="form-control" >
                <label for="address"> Address </label>
                <input type="text" name="address" value="" class="form-control" >
                <label for="email"> Email </label>
                <input type="email" name="email" class="form-control" >
                <button type="submit"name="submitdata" class="btn btn-primary" > Add Users </button>
                <a class="btn btn-secondary" href=""> Cancel </a>
            </div>
        </div>
    </div>
    </form>
</div>
</body>

<?php
    $this->load->view('layout/footer');
?>