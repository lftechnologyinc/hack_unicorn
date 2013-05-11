<?php $this -> load -> view("includes/header.php"); ?>
<a class="btn  btn-primary btn-small pull-right customBtn fr" href="<?php echo base_url(array("vendor",'add'))?>">Add Vendor</a>



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
				           <a href="<?php echo site_url(array('vendor', 'edit')); ?>" class="btn btn-mini btn-warning"><i class="icon icon-pencil"><span>Edit</span></i></a>
				           
				           <a data-toggle="modal"  data-method ='delete' data-confirm = 'Are you sure to delete?' class='delete btn btn-mini btn-danger'  role="button" href="<?php echo site_url(array('vendor', 'delete'));?>">
				           		<i class="icon-remove"><span>Delete</span></i>
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
