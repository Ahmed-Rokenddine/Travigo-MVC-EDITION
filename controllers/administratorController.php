<?php

class administratorController extends Administrator{

	function index(){
		require_once('../views/all/header.php');
		require_once('../views/all/nav.php');
		require_once('../views/index/index.php');
		require_once('../views/index/modals.php');
		require_once('../views/all/footer.php');
		require_once('../views/main.php');
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
				<th>options</th>
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
			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Select <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id_user; ?>','<?php echo $data->name_user; ?>','<?php echo $data->email_user; ?> ','<?php echo $data->last_name_user; ?>');">Modify</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id_user; ?>');">Delete</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					'name' 		=> $_REQUEST['name'],
					'email'		=> $_REQUEST['email'],
					'last_name' => $_REQUEST['last_name']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'name' 		=> $_REQUEST['name'],
					'email'		=> $_REQUEST['email'],
					'last_name' => $_REQUEST['last_name']
					);		
			parent::set_update_user($data);		
	}    
    
}

