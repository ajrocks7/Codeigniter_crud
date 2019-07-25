
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form method="post" onsubmit="javascript:void();" id="myform">
                   	<input type="hidden" name="id" value="<?php echo (!empty($details) && $details->id!='')?$details->id:''; ?>"
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true"  type="text" value="<?php echo(!empty($details) && $details->fname!='')?$details->fname:''; ?>"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="<?php echo (!empty($details) && $details->address1!='')?$details->address1:'';?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="<?php echo(!empty($details) && $details->address2!='')?$details->address2:'';   ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true"  type="text" value="<?php echo(!empty($details) && $details->city!='')?$details->city:'';  ?>"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="<?php echo(!empty($details) && $details->state!='')?$details->state:''; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="<?php echo(!empty($details) && $details->postcode!='')?$details->postcode:''; ?>" type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="<?php echo(!empty($details) && $details->email!='')?$details->email:''; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="<?php echo(!empty($details) && $details->phoneNumber!='')?$details->phoneNumber:''; ?>" type="text"></div>
                            </div>
                         </div> <br>

                        <br> <div class="form-group">
                         
                           
                               <center><div class="input-group">
                                <br>	<input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control btn btn-success" required="true" value="<?php echo(!empty($details) && $details->id!='')?"Update":"Save"; ?>" type="button" onclick="formsubmit()">&nbsp;&nbsp;<input type="button" name="Back" value="Back" class="form-control btn btn-danger" onclick="window.location.href='<?php echo site_url('Login/'); ?>'"/></div></center>
                             
                         </div>



                      </fieldset>
                   </form>
                </td>
                
             </tr>
          </tbody>
       </table>
    </div>


 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
function formsubmit()
	{
var valz = $("#myform").serialize();
$.ajax({
type:'POST',
url:'<?php echo base_url();?>Login/submit',
data:{
	values:valz,
},
success:function(data)
{
	  window.location.href='<?php echo base_url(); ?>Login/';
}
});




	}
</script>