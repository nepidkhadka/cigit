<?php
    $this->load->view('layout/header');
    $this->load->view('layout/css');
    $this->load->view('layout/navbar');
?>
<div class="container-lg">
  <!-- Content here -->
     <hr>

    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Hello User</h4>
    <p>Welcome to CRUD Application</p>
    </div>

</div>

<?php
    $this->load->view('layout/footer');
?>