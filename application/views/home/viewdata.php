<?php
    $this->load->view('layout/header');
    $this->load->view('layout/css');
    $this->load->view('layout/navbar');
?>
   
<body>
<div class="container" style="padding: 20px" >
    <h4> Added Data</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php  
         foreach ($users->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->id;?></td>  
            <td><?php echo $row->name;?></td>  
            <td><?php echo $row->address;?></td>  
            <td><?php echo $row->email;?></td>  
            <td>
                <a href="update/<?php echo $row->id;?>">Edit</a> 
            </td>    
            <td>
              <a href="delete/<?php echo $row->id;?>">Delete</a> 
            </td>  
            </tr>  
         <?php }  
         ?>  
        </tbody>
    </table>
</div>
</body>

<?php
    $this->load->view('layout/footer');
?>