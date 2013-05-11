<?php $this -> load -> view("includes/header.php"); ?>


<a class="btn  btn-primary btn-small pull-right customBtn fr" href="<?php echo base_url(array("vehicle",'add'))?>">Add Vehicle</a>

<style type="text/css">
.row-fluid [class*="span"]:first-child {
    margin-left: 0;
    margin-top: 5px;
}
</style>

<div class="row-fluid">
		<div class="span12">


<?php 
	
	if($vehicle_list){?>
		   <table width="100%" cellpadding="0" cellspacing="0" class="datagrid-htable" bordercolor="00FF00" >
		     <tr class="datagrid-header">
                            <th width="20">S.N.</th>   
		           <th align="left">Vehicle</th>
		           <th width="80">Actions</th>
		     </tr>
		   <?php
		   if($page > 1)
		   {
		   	$sn  = ($per_page * ($page-1)) +1;
		   }else{
		   		$sn = 1 ;
			
		   }
		   
		    foreach($vehicle_list as $key){
		   			
		   	?>
			   	<tr class="datagrid-body">  
			   		<td><?php echo $sn;?>.</td>   
				      <td><?php echo $key['company']; ?></td>
				      
				      <td align="center">
				           <a href="<?php echo site_url(array('vehicle', 'edit')); ?>" class="btn btn-mini btn-warning">Edit</a>
				           
				           <a data-toggle="modal"  data-method ='delete' data-confirm = 'Are you sure to delete?' class='delete btn btn-mini btn-danger'  role="button" href="<?php echo site_url(array('vehicle', 'delete'));?>">
				           		Delete
				           	</a>
				      </td>       
			    </tr>
		    <?php
		    $sn++;
		     } ?>
		  </table>
	      <div class="pagination pagination-mini"><ul> <?php echo $this->pagination->create_links(); ?></ul></div>
    <?php }else{ ?>
    	<p class="alert">No record found</p>
	<?php } ?>

                </div>
</div>

<?php $this -> load -> view("includes/footer.php"); ?>
