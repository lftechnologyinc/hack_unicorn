<?php $this -> load -> view("includes/header.php"); 
if(isset($message)){
	echo '<p>'.$message.'</p>';
}
if(isset($error)){
	echo '<p>'.$error.'<p>';
}

if($this->bitauth->logged_in())
	{
	if($this->bitauth->has_role('admin'))
	{
	    echo '<a class="btn  btn-primary btn-small pull-right customBtn fr" href="'.base_url(array("vendor",'add')).'">Add Vendor</a>';
	}
}
?>

<style type="text/css">
.row-fluid [class*="span"]:first-child {
    margin-left: 0;
    margin-top: 5px;
}
</style>
<div class="row-fluid">
		<div class="span12">
<?php 
	
	if($vendor_list){?>
		   <table width="100%" cellpadding="0" cellspacing="0" class="datagrid-htable" bordercolor="00FF00" >
		     <tr class="datagrid-header">
                            <th width="20">S.N.</th>   
		           <th align="left">Company Name</th>
		           <th width="80">Actions</th>
		     </tr>
		   <?php
		   if($page > 1)
		   {
		   	$sn  = ($per_page * ($page-1)) +1;
		   }else{
		   		$sn = 1 ;
			
		   }
		   
		    foreach($vendor_list as $key){
		   			
		   	?>
			   	<tr class="datagrid-body">  
			   		<td><?php echo $sn;?>.</td>   
				      <td><?php echo $key['company']; ?></td>
				      
				      <td align="center">
				      	<?php 
				      		if($this->bitauth->logged_in())
							{
							if($this->bitauth->has_role('admin'))
							{
								echo anchor('vendor/edit', 'Edit', array('class'=>'btn btn-mini btn-warning'));
								echo anchor('vendor/delete', 'Delete', array('class'=>'delete btn btn-mini btn-danger', 'data-toggle'=>'modal', 'data-method' =>'delete', 'data-confirm' => 'Are you sure to delete?', 'role'=>'button'));
							}
						}
				      	?>
				           
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
