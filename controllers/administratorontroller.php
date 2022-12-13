<?php

class administratorontroller extends Administrator2{

	function index(){
		require_once('../views/all/header.php');
		require_once('../views/all/nav.php');
		require_once('../views/index/index2.php');
		require_once('../views/index/modals2.php');
		require_once('../views/all/footer.php');
		require_once('../views/main2.php');
	}

	function table_users(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Destination</th>
				<th>Location</th>
				<th>Price</th>
				
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id_user; ?> </td>
			<td><?php echo $data->name_user; ?> </td>
			<td><?php echo $data->email_user; ?> </td>
			<td><?php echo $data->last_name_user; ?> </td>
			
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	
    

    
}

