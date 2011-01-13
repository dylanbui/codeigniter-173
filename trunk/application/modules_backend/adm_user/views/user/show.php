	<?php  				
//		 Show reset password message if exist
//		if (isset($reset_message))
//			echo $reset_message;
//		
//		 Show error
//		echo validation_errors();
//		
//		$this->table->set_heading('', 'Username', 'Email', 'Role', 'Banned', 'Last IP', 'Last login', 'Created');
//		
//		foreach ($users as $user) 
//		{
//			$banned = ($user->banned == 1) ? 'Yes' : 'No';
//			
//			$this->table->add_row(
//				form_checkbox('checkbox_'.$user->id, $user->id),
//				$user->username, 
//				$user->email, 
//				$user->role_name, 			
//				$banned, 
//				$user->last_ip,
//				date('Y-m-d', strtotime($user->last_login)), 
//				date('Y-m-d', strtotime($user->created)));
//		}
//		
//		echo form_open($this->uri->uri_string());
//				
//		echo form_submit('ban', 'Ban user');
//		echo form_submit('unban', 'Unban user');
//		echo form_submit('reset_pass', 'Reset password');
//		
//		echo '<hr/>';
//		
//		echo $this->table->generate(); 
//		
//		echo form_close();
//		
//		echo $pagination;
			
	?>


			<!-- CONTENT BOX - DATATABLE -->
			<div class="content-box">
			<div class="box-body">
				<div class="box-header clear">
				
						<div class="pager fr">
							<a class="button green fl-space" href="#">Green Button</a>
						</div>
				
<!--					<ul class="tabs clear">
						<li><a class="button green fl-space" href="#">Green Button</a></li>
					</ul>-->
					<h2>Content Box</h2>
				</div>
				
				<div class="box-wrap clear">
					
					<!-- TABLE -->
					<div id="data-table">
						<form method="post" action="#">
						<table class="style1">
						<thead>
							<tr>
								<th width="1%" class="bSortable"><input type="checkbox" class="checkbox select-all" /></th>
								<th>Username</th>
								<th>Email</th>
								<th>Role</th>
								<th>Banned</th>
								<th>Last IP</th>
								<th>Last login</th>
								<th>Created</th>
								<th width="10%">Action</th>
							</tr>
						</thead>
						<tbody>
						<? 
							foreach ($users as $user)  :
								$banned = ($user->banned == 1) ? 'Yes' : 'No';
						?>
							<tr>
								<td><input type="checkbox" class="checkbox" value="<?= $user->id; ?>" /></td>
								<td><?= $user->username; ?></td>
								<td><?= $user->email; ?></td>
								<td><?= $user->role_name; ?></td>
								<td><?= $banned; ?></td>
								<td><?= $user->last_ip; ?></td>
								<td><?= date('Y-m-d', strtotime($user->last_login)); ?></td>
								<td><?= date('Y-m-d', strtotime($user->created)); ?></td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
						<? endforeach; ?>
						</tbody>
						</table>
						
						<div class="tab-footer clear">
							<div class="pager fr">
								<span class="nav">
									<a href="#" class="first" title="first page"><span>First</span></a>
									<a href="#" class="previous" title="previous page"><span>Previous</span></a>
								</span>
								<span class="pages">
									<a href="#" title="page 1"><span>1</span></a>
									<a href="#" title="page 2" class="active"><span>2</span></a>
									<a href="#" title="page 3"><span>3</span></a>
									<a href="#" title="page 4"><span>4</span></a>
								</span>
								<span class="nav">
									<a href="#" class="next" title="next page"><span>Next</span></a>
									<a href="#" class="last" title="last page"><span>Last</span></a>
								</span>
							</div>
							
						</div>
						</form>
					</div><!-- /#table -->
					
					<!-- TABLE -->
					
				</div><!-- end of box-wrap -->
			</div> <!-- end of box-body -->
			</div> <!-- end of content-box -->
