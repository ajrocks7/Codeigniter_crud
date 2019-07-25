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

                <form method="post" action="<?php echo base_url();?>/Login/dynamicsave" id="myform"> 
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                 
                   <th>Name</th>
                    <th>Address1</th>
                     <th>Address2</th>
                     <th>Email</th>
                     <th>Contact</th>
                      <th>Action</th>
                   </thead>
    <tbody>
  
    <tr id="tr1">
 
    <td><input id="name" name="name[]" placeholder="Name" class="form-control" required="true"  type="text"></td>
    <td><input id="addr1" name="addr1[]" placeholder="Address" class="form-control" required="true"  type="text"></td>
    <td><input id="addr2" name="addr2[]" placeholder="Address2" class="form-control" required="true"  type="text"></td>
    <td><input id="email" name="email[]" placeholder="Email" class="form-control" required="true"  type="text"></td>
    <td><input id="contact" name="contact[]" placeholder="Contact" class="form-control" required="true"  type="text"></td>
    <td><a href="javascrip:void(0);" onclick="addform()"><i class="glyphicon glyphicon-plus" aria-hidden="true" style="color:green"></i></a></td>
   
    </tr>
     
    </tbody>
        
</table>
 <input type="hidden" name="dynamicRow" id="dynamicRow" value="<?php if(!empty($details)){ echo count($details);}else{echo 1;}; ?>">

<div class="form-group">
                         
                           
                               <center><div class="input-group">
                                <br>  <input id="save" name="save" class="form-control btn btn-success" required="true" value="<?php echo(!empty($details) && $details->id!='')?"Update":"Save"; ?>" type="submit">&nbsp;&nbsp;<input type="button" name="Back" value="Back" class="form-control btn btn-danger" onclick="window.location.href='<?php echo site_url('Login/'); ?>'"/></div></center>
                             
                         </div>

<div class="clearfix"></div>

                </form>
            </div>
            
        </div>
	</div>
</div>


<script>
function addform()
{
  var ids = parseInt($("#dynamicRow").val())+1;
    $("#dynamicRow").val(ids);
  var table = '<tr id="tr'+ids+'">';
  table+='<td><input id="name'+ids+'" name="name[]" placeholder="Name" class="form-control" required="true"  type="text"></td>';
  table+='<td><input id="addr1'+ids+'" name="addr1[]" placeholder="Address" class="form-control" required="true"  type="text"></td>';
  table+='<td><input id="addr2'+ids+'" name="addr2[]" placeholder="Address2" class="form-control" required="true"  type="text"></td>';
  table+='<td><input id="email'+ids+'" name="email[]" placeholder="Email" class="form-control" required="true"  type="text"></td>';
  table+='<td><input id="contact'+ids+'" name="contact[]" placeholder="Contact" class="form-control" required="true"  type="text"></td>';
  table+='<td>&nbsp;<a href="javascrip:void(0);" onclick="addform()"><i class="glyphicon glyphicon-plus" aria-hidden="true" style="color:green"></i></a>&nbsp;<a href="javascrip:void(0);" id="remove'+ids+'" onclick="remove('+ids+')"" ><i class="glyphicon glyphicon-minus" aria-hidden="true" style="color:green"></i></a></td></tr>';

  $("#mytable").append(table);
  $("#purchaseRow").val(ids++);
}

function remove(obj)
{
    $('table#mytable tr#tr'+obj+'').remove();
   
}
</script>
    
    
    
    