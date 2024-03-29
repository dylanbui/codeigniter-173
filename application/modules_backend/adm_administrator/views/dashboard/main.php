			<!-- ICONBAR -->
			<div class="content-box clear">
			<div class="box-body iconbar">
				<div class="box-wrap">
				<div class="main-icons">
					<ul class="clear">
                        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_folder_64.png" class="icon" alt="" /><span class="text">Create an Article</span></a></li>
                        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_page_64.png" class="icon" alt="" /><span class="text">Add Page</span></a></li>
           		        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_picture_64.png" class="icon" alt="" /><span class="text">Add Picture</span></a></li>
                        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_clock_64.png" class="icon" alt="" /><span class="text">Add Event</span></a></li>
           		        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_users_64.png" class="icon" alt="" /><span class="text">Users</span></a></li>
                        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_64.png" class="icon" alt="" /><span class="text">Settings</span></a></li>
                        <li><a href="#modal" class="modal-link"><img src="<?= BASE_URL; ?>images/admin/ico_chat_64.png" class="icon" alt="" /><span class="text">Open Modal</span></a></li>
           		        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_folder_64.png" class="icon" alt="" /><span class="text">Create an Article</span></a></li>
                   		<li class="active"><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_page_64.png" class="icon" alt="" /><span class="text">Active icon</span></a></li>
                        <li><a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_picture_64.png" class="icon" alt="" /><span class="text">Add Picture</span></a></li>

					</ul>
				</div>
				</div>
			</div>
			</div>
			
			<!-- MODAL WINDOW -->
			<div id="modal" class="modal-window modal-600">
				
				<div class="notification note-info">
					<a href="#" class="close" title="Close notification"><span>close</span></a>
					<span class="icon"></span>
					<p><strong>Information:</strong> The examples of modal windows are set on the LABELS in H1 tags.</p>
				</div>
				
				<h2>Modal Window : size 600</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique, lorem id hendrerit sodales, nisl felis sollicitudin lacus, et facilisis felis quam at quam. Nullam vel nunc at sapien sagittis feugiat. Vestibulum est eros, condimentum ac sodales vel, iaculis vitae neque.</p>
				<h4 class="bt-space10">You can set the 4 types of modal:</h4>
				<div class="clear">
					<div class="half fl">
					<div class="mark bt-space5">
						<ul class="standard clean-padding bt-space10">
						<li><span class="fr">class "modal-400"</span> <span><strong>Size 400px</strong></span></li>
						<li><span class="fr">class "modal-600"</span> <span><strong>Size 600px</strong></span></li>
						<li><span class="fr">class "modal-800"</span> <span><strong>Size 800px</strong></span></li>
						<li><span class="fr">no other class</span> <span><strong>Size undefined (auto)</strong></span></li>
						</ul>
					</div>
					</div>
					<p class="half fr"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique, lorem id hendrerit sodales, nisl felis sollicitudin lacus, et facilisis felis quam at quam.</small></p>
				</div>
			</div>
			
			<!-- CONTENT BOXES -->
			
			<div class="columns clear bt-space20">
				<!-- DASHBOARD - LEFT COLUMN -->
				<div class="col2-3">
						
					<h1>Dashboard Example <a href="#modal-label" class="label modal-link">INFO</a></h1>
					<p>Nam posuere, felis sed feugiat viverra, quam felis dapibus eros, vitae pulvinar nisl quam ut eros. Curabitur eget fringilla mi. Vivamus sed justo sit amet elit malesuada bibendum. Pellentesque consectetur blandit nisl, a eleifend arcu adipiscing eu. In et neque nec urna mollis fermentum gravida at turpis. </p>

					<!-- MODAL WINDOW -->
					<div id="modal-label" class="modal-window modal-400">
						<div class="notification note-attention">
							<a href="#" class="close" title="Close notification"><span>close</span></a>
							<span class="icon"></span>
							<p><strong>Attention:</strong> More about settings of modal windows is described in Dashboard - Open Modal icon.</p>
						</div>
						<h2>Modal Window : size 400</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique, lorem id hendrerit sodales, nisl felis sollicitudin lacus, et facilisis felis quam at quam. Nullam vel nunc at sapien sagittis feugiat. Vestibulum est eros, condimentum ac sodales vel, iaculis vitae neque.</p>
						<p>Nam nisl odio, scelerisque non venenatis quis, venenatis a leo. Cras non vehicula justo. Nam vel arcu sem. Suspendisse quam enim, dictum quis lacinia sed, lobortis eget libero. Suspendisse potenti. Suspendisse et ante vitae turpis vestibulum fermentum nec nec elit. Suspendisse ullamcorper lacus in arcu mollis fringilla porta mi placerat. Ut at elit non diam tristique scelerisque. </p>
					</div>
					
					<div class="columns clear">
						<div class="col1-2">
						
							<!-- OVERVIEW - BASIC TABLE -->
							<h2>Overview</h2>
							<table class="basic" cellspacing="0">
							<tbody>
							<tr>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_green_16.png" class="block" alt="" /></td>
								<th class="full">Visits Today</th>
								<td class="value right">127</td>
								<td><a href="#">more</a></td>
							</tr>
							<tr>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_yellow_16.png" class="block" alt="" /></td>
								<th>Traffic Today</th>
								<td class="value right">1.542</td>
								<td><a href="#">more</a></td>
							</tr>
							<tr>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_purple_16.png" class="block" alt="" /></td>
								<th>Free Space</th>
								<td class="value right">1.542</td>
								<td><a href="#">more</a></td>
							</tr>
							<tr>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_black_16.png" class="block" alt="" /></td>
								<th>Total Posts</th>
								<td class="value right">34</td>
								<td><a href="#">more</a></td>
							</tr>
							<tr>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_blue_16.png" class="block" alt="" /></td>
								<th>Total Comments</th>
								<td class="value right">218</td>
								<td><a href="#">more</a></td>
							</tr>
							<tr>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_red_16.png" class="block" alt="" /></td>
								<th>Aproval: Comments</th>
								<td class="value right">11</td>
								<td><a href="#">more</a></td>
							</tr>
							</tbody>
							</table>
						
						</div>
						<div class="col1-2 lastcol">
						
							<!-- MESSAGES - BASIC TABLE -->
							<h2>Last Messages</h2>
							<table class="basic" cellspacing="0">
							<tbody>
							<tr>
								<th>28/07/10</th>
								<td class="full"><a href="#">Lorem ipsum dolor sit amet</a></td>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_grey_16.png" class="block cr-help" alt="" title="Offline User"/></td>
								<td>Peter</td>
							</tr>
							<tr>
								<th>25/07/10</th>
								<td class="full"><a href="#">Consectetur adipiscing</a></td>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_green_16.png" class="block cr-help" alt="" title="Online User"/></td>
								<td>Carla</td>
							</tr>
							<tr>
								<th>25/07/10</th>
								<td class="full"><a href="#">Sed in porta lectus maecenas</a></td>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_grey_16.png" class="block cr-help" alt="" title="Offline User"/></td>
								<td>Bruce</td>
							</tr>
							<tr>
								<th>19/07/10</th>
								<td class="full"><a href="#">Dignissim enim</a></td>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_grey_16.png" class="block cr-help" alt="" title="Offline User"/></td>
								<td>Jane</td>
							</tr>
							<tr>
								<th>18/07/10</th>
								<td class="full"><a href="#">Maecenas id velit et elit</a></td>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_grey_16.png" class="block cr-help" alt="" title="Offline User"/></td>
								<td>Killer</td>
							</tr>
							<tr>
								<th>09/07/10</th>
								<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
								<td><img src="<?= BASE_URL; ?>images/admin/ball_green_16.png" class="block cr-help" alt="" title="Online User"/></td>
								<td>Asterix</td>
							</tr>
							</tbody>
							</table>
							
						</div>
					</div>
					
					<div class="columns clear bt-space15">
						<div class="col1-2 online-user">
						
							<!-- ONLINE USERS BOXES -->
							<h2>Online Users</h2>
							<div class="mark clear">
								<div class="avatar">
									<img src="<?= BASE_URL; ?>images/admin/avatar.jpg" alt="" />
									<p class="status admin">admin</p>
								</div>
								<div class="desc">
									<ul class="links">
										<li><a href="#" class="graph" title="view stats">stats </a></li>
										<li><a href="#" class="cart" title="view shopping cart">shopping cart</a></li>
										<li><a href="#" class="hist" title="view user history">history</a></li>
										<li><a href="#" class="mesg" title="send message">send message</a></li>
										<li><span class="male" title="male">male</span></li>
									</ul>
									<h4><strong>Terminator</strong></h4>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus.</small></p>
									<p class="info"><small>registered: 01/05/2009</small></p>
								</div>
							</div>
							<div class="mark clear">
								<div class="avatar">
									<img src="<?= BASE_URL; ?>images/admin/avatar.jpg" alt="" />
									<p class="status">user</p>
								</div>
								<div class="desc">
									<ul class="links">
										<li><a href="#" class="graph" title="view stats">stats </a></li>
										<li><a href="#" class="cart" title="view shopping cart">shopping cart</a></li>
										<li><a href="#" class="hist" title="view user history">history</a></li>
										<li><a href="#" class="mesg" title="send message">send message</a></li>
										<li><span class="female" title="female">female</span></li>
									</ul>
									<h4><strong>Carla</strong></h4>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus.</small></p>
									<p class="info"><small>registered: 12/10/2009</small></p>
								</div>
							</div>
							<div class="mark clear">
								<div class="avatar">
									<img src="<?= BASE_URL; ?>images/admin/avatar.jpg" alt="" />
									<p class="status">user</p>
								</div>
								<div class="desc">
									<ul class="links">
										<li><a href="#" class="graph" title="view stats">stats </a></li>
										<li><a href="#" class="cart" title="view shopping cart">shopping cart</a></li>
										<li><a href="#" class="hist" title="view user history">history</a></li>
										<li><a href="#" class="mesg" title="send message">send message</a></li>
										<li><span class="male" title="male">male</span></li>
									</ul>
									<h4><strong>Asterix</strong></h4>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus.</small></p>
									<p class="info"><small>registered: 24/05/2010</small></p>
								</div>
							</div>
							
						</div>
						
						<div class="col1-2 lastcol">
						
							<!-- USEFUL LINKS WITH ICONS -->
							<h2>Useful Links</h2>
							<div class="mark icon-links">
								<ul>
								<li class="clear">
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_manage-users_48.png" class="icon" alt="" /><span>Manage Users &amp; Rights</span></a>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus.</small></p>
								</li>
								<li class="clear">
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_book_48.png" class="icon" alt="" /><span>View Visit Book</span></a>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus.</small></p>
								</li>
								<li class="lastlnk clear">
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_administration_48.png" class="icon" alt="" /><span>Administration of Orders</span></a>
									<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus.</small></p>
								</li>
								</ul>
							</div>
							<p><small><strong>Note:</strong> You can use your own icons because the gradient background is included separately of the icon.</small></p> 
						
						</div>
					</div>
					
					<div class="rule2"></div>
					
					<!-- BUTTONS -->
					<p class="clear">
						<a href="#" class="button green fl-space">Green Button</a>
						<a href="#" class="button red fl-space">Red Button</a>
						<a href="#" class="button blue fl-space">Blue Button</a>
						<a href="#" class="button grey fl-space">Grey Button</a>
						<a href="#" class="button fr">Black Button on Right Side</a>
					</p>

					<div class="rule"></div>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

				</div>
				
				<!-- DASHBOARD - RIGHT COLUMN -->
				<div class="col1-3 lastcol">
				
					<!-- DASHBOARD CHART -->
					<div class="dashboard_chart">
						<div class="chart-wrap">
								<table class="visualize_dashboard">
									<caption>Dashboard Chart Example</caption>
									<thead>
										<tr>
											<td></td>
											<th scope="col">March</th>
											<th scope="col">April</th>
											<th scope="col">May</th>
											<th scope="col">June</th>
											<th scope="col">July</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">Visits</th>
											<td>175</td>
											<td>145</td>
											<td>212</td>
											<td>175</td>
											<td>182</td>
										</tr>
										<tr>
											<th scope="row">Sales</th>
											<td>94</td>
											<td>53</td>
											<td>124</td>
											<td>92</td>
											<td>105</td>
										</tr>
									</tbody>
								</table>				
						</div><!-- /.chart-wrap -->
					</div><!-- /.dashboard-chart -->
					
					<!-- CONTENT BOX - EVENTS-->
					<div class="content-box bt-space10 events">
					<div class="box-body">
						<div class="box-header box-slide-head">
							<span class="slide-but">open/close</span>
							<ul class="tabs clear">
								<li><a href="#event-list">List</a></li>
								<li><a href="#event-new">New</a></li>
							</ul>
							<h2>Events</h2>
						</div>
						<div class="box-wrap clear  box-slide-body">
							
							<!-- TAB - EVENT LIST -->
							<div id="event-list" class="event-list">
								<ul class="clear">
								<li>
									<span class="event-list-title clear box-slide-head">
										<span class="priority-high" title="High priority">High</span>
										<a href="#" class="event-edit clickable" title="Edit event">edit</a>
										<span class="event-date">30/07/10</span>
									 	<a href="#" class="event-link" title="Read more">Lorem ipsum</a> 
									</span>
								    	<p class="event-note box-slide-body">Nam posuere, felis sed feugiat viverra, quam felis dapibus eros, vitae pulvinar nisl quam ut eros. Curabitur eget fringilla mi.</p>
								</li>

								<li>
									<span class="event-list-title clear box-slide-head">
										<span class="priority-normal" title="Normal priority">Normal</span>
										<a href="#" class="event-edit clickable" title="Edit event">edit</a>
										<span class="event-date">28/07/10</span>
									 	<a href="#" class="event-link" title="Read more">Porta lectus maecenas</a> 
									</span>
								    	<p class="event-note box-slide-body hidden">Nam posuere, felis sed feugiat viverra, quam felis dapibus eros, vitae pulvinar nisl quam ut eros. Curabitur eget fringilla mi.</p>
								</li>
								<li>
									<span class="event-list-title clear box-slide-head">
										<span class="priority-low" title="Low priority">Low</span>
										<a href="#" class="event-edit clickable" title="Edit event">edit</a>
										<span class="event-date">27/07/10</span>
									 	<a href="#" class="event-link" title="Read more">Excepteur occaecat</a> 
									</span>
								    	<p class="event-note box-slide-body hidden">Nam posuere, felis sed feugiat viverra, quam felis dapibus eros, vitae pulvinar nisl quam ut eros. Curabitur eget fringilla mi.</p>
								</li>
								<li>
									<span class="event-list-title clear box-slide-head">
										<span class="priority-low" title="Low priority">Low</span>
										<a href="#" class="event-edit clickable" title="Edit event">edit</a>
										<span class="event-date">27/07/10</span>
									 	<a href="#" class="event-link" title="Read more">Quis ipsum mattis</a> 
									</span>
								    	<p class="event-note box-slide-body hidden">Nam posuere, felis sed feugiat viverra, quam felis dapibus eros, vitae pulvinar nisl quam ut eros. Curabitur eget fringilla mi.</p>
								</li>
								<li>
									<span class="event-list-title clear box-slide-head">
										<span class="priority-normal" title="Normal priority">Normal</span>
										<a href="#" class="event-edit clickable" title="Edit event">edit</a>
										<span class="event-date">22/07/10</span>
									 	<a href="#" class="event-link" title="Read more">Duis aute irure</a> 
									</span>
								    	<p class="event-note box-slide-body hidden">Nam posuere, felis sed feugiat viverra, quam felis dapibus eros, vitae pulvinar nisl quam ut eros. Curabitur eget fringilla mi.</p>
								</li>
								</ul>
								
								<div class="notification note-attention">
									<a href="#" class="close" title="Close notification">close</a>
									<p><small><strong>Tip:</strong> Event Titles are openable.</small>
									   <small><strong>Tip:</strong> Calendar &amp; form is in the "New" tab.</small>
									   <small><strong>Tip:</strong> These Content boxes are openable.</small></p>
								</div>
							
							</div>
						
							<!-- TAB - CALENDAR -->
							<div id="event-new" class="event-calendar">
							<div id="datepicker-id-1" class="datepicker-inline"></div>
						
							<form action="#" method="post">
								<div class="add-event clear box-slide-head">
									<input class="text fl clickable" id="datepicker-target-id-1" name="event-date" size="20" />
									<a href="#" class="button fr">Add Event</a>
								</div>

								<div class="event-form hidden box-slide-body">
								<div class="event-wrap">
									<div class="form-field clear">
										<input class="text title onFocusEmpty" id="event-title" name="event-title" size="30" value="Title"/>
									</div>

									<div class="form-field clear">
										<textarea class="text event" id="event-text" name="event-text" cols="30" rows="6"></textarea>
									</div>

									<div class="form-field clear">
										<input type="radio" class="radio fl" name="event-priority" id="priority-high" value="high" />
                                        					<label for="priority-high" class="fl-space" title="priority">High</label>
										
                                        					<input type="radio" class="radio fl" name="event-priority" id="priority-normal" value="normal" checked="checked" />
                                        					<label for="priority-normal" class="fl-space" title="priority">Normal</label>
										
                                        					<input type="radio" class="radio fl" name="event-priority" id="priority-low" value="low" />
                                        					<label for="priority-low" class="fl" title="priority">Low</label>
										
                                        					<input type="submit" class="button fr" id="event-submit" name="event-submit" value="Submit" />
									</div>
								</div>
								</div>
							</form>
							</div>
						
						</div> <!-- end of box-wrap -->
					</div> <!-- end of box-body -->
					</div> <!-- end of content-box -->
					
					<!-- CONTENT BOX - CLOSED -->
					<div class="content-box bt-space10">
					<div class="box-body">
						<div class="box-header box-slide-head">
							<span class="slide-but">open/close</span>
							<h2>Closed Box</h2>
						</div>
						<div class="box-wrap clear box-slide-body hidden">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem.</p>
						</div> <!-- end of box-wrap -->
					</div> <!-- end of box-body -->
					</div> <!-- end of content-box -->
					
					<!-- CONTENT BOX - NEXT CLOSED -->
					<div class="content-box bt-space10">
					<div class="box-body">
						<div class="box-header box-slide-head">
							<span class="slide-but">open/close</span>
							<h2>Next Closed Box</h2>
						</div>
						<div class="box-wrap clear box-slide-body hidden">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem.</p>
						</div> <!-- end of box-wrap -->
					</div> <!-- end of box-body -->
					</div> <!-- end of content-box -->
					
					<!-- CONTENT BOX - LAST CLOSED -->
					<div class="content-box">
					<div class="box-body">
						<div class="box-header box-slide-head">
							<span class="slide-but">open/close</span>
							<h2>Last Closed Box</h2>
						</div>
						<div class="box-wrap clear box-slide-body hidden">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem.</p>
						</div> <!-- end of box-wrap -->
					</div> <!-- end of box-body -->
					</div> <!-- end of content-box -->
				</div>
			</div>
			
			
			<!-- CONTENT BOX - DATATABLE -->
			<div class="content-box">
			<div class="box-body">
				<div class="box-header clear">
					<h2>Content Box</h2>
				</div>
				
				<div class="box-wrap clear">
					
					<!-- TABLE -->
					<div id="data-table">
					
						<form method="post" action="#">
						
						<div class="tab-header clear">
							<div class="fr">
								<a class="button green fl-space" href="#">Green Button</a>							
								<select name="dropdown" class="fl-space">
									<option value="option1">choose action...</option>
									<option value="option2">Edit</option>
									<option value="option3">Delete</option>
								</select>
								<input type="submit" value="Apply" id="submit1" class="button fl-space" />
								
							</div>
<!--							<div class="pager fr">
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
-->							
						</div>
						
						
						<table class="style1">
						<thead>
							<tr>
								<th class="bSortable"><input type="checkbox" class="checkbox select-all" /></th>
								<th>Column 1</th>
								<th>Column 2</th>
								<th>Column 3</th>
								<th>Column 4</th>
								<th>Column 5</th>
								<th>Column 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Lorem ipsum dolor</td>
								<td><a href="#">John</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input1" id="input1" value="235" class="text" size="10" /></td>
								<td>sed in porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
                                                        
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Dignissim enim</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input2" id="input2" value="124" class="text" size="10" /></td>
								<td>duis nec rutrum</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input3" id="input3" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input4" id="input4" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input5" id="input5" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input6" id="input6" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input7" id="input7" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input8" id="input8" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input9" id="input9" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Maecenas velit</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input10" id="input10" value="58" class="text" size="10" /></td>
								<td>porta lectus</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Duis nec rutrum</td>
								<td><a href="#">John</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input11" id="input11" value="10" class="text" size="10" /></td>
								<td>enim quis ipsum</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td>Elit gravida</td>
								<td><a href="#">Admin</a></td>
								<td>5/6/2010</td>
								<td><input type="text" name="input12" id="input12" value="356" class="text" size="10" /></td>
								<td>dolor sit amet</td>
								<td>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_edit_16.png" class="icon16 fl-space2" alt="" title="edit" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_delete_16.png" class="icon16 fl-space2" alt="" title="delete" /></a>
									<a href="#"><img src="<?= BASE_URL; ?>images/admin/ico_settings_16.png" class="icon16 fl-space2" alt="" title="settings" /></a>
								</td>
							</tr>
						</tbody>
						</table>
						
						<div class="tab-footer clear">
							<div class="fl">
								<select name="dropdown" class="fl-space">
									<option value="option1">choose action...</option>
									<option value="option2">Edit</option>
									<option value="option3">Delete</option>
								</select>
								<input type="submit" value="Apply" id="submit1" class="button fl-space" />
								
							</div>
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
			
			<!-- NOTIFICATIONS -->
			<div class="notification note-error">
				<a href="#" class="close" title="Close notification">close</a>
				<p><strong>Error notification:</strong></p>
				<p>- Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p>- Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p>- Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="notification note-success">
				<a href="#" class="close" title="Close notification">close</a>
				<p><strong>Success notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="notification note-info">
				<a href="#" class="close" title="Close notification">close</a>
				<p><strong>Information notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="notification note-attention">
				<a href="#" class="close" title="Close notification">close</a>
				<p><strong>Attention notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p><strong>Attention notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p><strong>Attention notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p><strong>Attention notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p><strong>Attention notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p><strong>Attention notification:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>				
			</div>
			
