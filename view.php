<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
   <br/><br/>  <div class="col-xs-12" align="right">
               <input type="button" name="Add New" value="Add New" onclick="window.location.href='<?php echo site_url('Login/addnew'); ?>'" class="btn btn-success"/>
        </div><br/><br/>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                 
                   <th>Name</th>
                    <th>Address1</th>
                     <th>Address2</th>
                     <th>Email</th>
                     <th>Contact</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    <?php foreach($details as $det) { ?>
    <tr>
 
    <td><?php echo $det->fname;?></td>
    <td><?php echo $det->address1;?></td>
    <td><?php echo $det->address2;?></td>
    <td><?php echo $det->email;?></td>
    <td><?php echo $det->phoneNumber;?></td>
    <td> <a href="<?php echo base_url();?>Login/editform/<?php echo $det->id;?>"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i></a>&nbsp;</td>
    <td> <a onclick="return confirm('Are you sure want to Delete?')" href="<?php echo base_url();?>Login/delete/<?php echo $det->id;?>"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
    </tr>
       <?php } ?>
    </tbody>
        
</table>

<div class="clearfix"></div>

                
            </div>
            
        </div>
	</div>
</div>



    
    
    
    