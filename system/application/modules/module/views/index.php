            <article class="module width_full">
                <header><h3 class="tabs_involved">Available Modules</h3>
                    <ul class="tabs">
                        <li><a href="#tab1">Active</a></li>
                        <li><a href="#tab2">Inactive</a></li>
                    </ul>
                </header>

                <div class="tab_container">
                    <div id="tab1" class="tab_content">
                        <table class="tablesorter" cellspacing="0"> 
                            <thead> 
                                <tr>
                                    <th>Ver.</th> 
                                    <th>Module Name</th> 
                                    <th>Description</th> 
                                    <th>Type</th> 
                                    <th>Actions</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                            
                            <?php foreach($modules as $module): ?>
                                <tr>
									<td>1.0</td> 
                                    <td><?php echo $module; ?></td> 
                                    <td>My first module based on LetsIgnite module development tutorial.</td> 
                                    <td>Add-On / Core</td>
                                    <td><input type="image" src="<?php echo theme_image_path('icn_edit.png'); ?>" title="Edit"><input type="image" src="<?php echo theme_image_path('icn_trash.png'); ?>" title="Trash"></td> 
                                </tr>
							<?php endforeach; ?>
                                
                            </tbody> 
                        </table>
                    </div><!-- end of #tab1 -->

                    <div id="tab2" class="tab_content">
                        <table class="tablesorter" cellspacing="0"> 
                            <thead> 
                                <tr>
									<th>Version</th> 
                                    <th>Module Name</th> 
                                    <th>Description</th> 
                                    <th>Owner</th> 
                                    <th>Actions</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr>
									<td>1.0</td> 
                                    <td>Lorem Ipsum Dolor Sit Amet</td> 
                                    <td>My first module based on LetsIgnite module development tutorial.</td> 
                                    <td>In Working</td>
                                    <td><button title="Activate">Activate</button></td> 
                                </tr>  
                            </tbody> 
                        </table>

                    </div><!-- end of #tab2 -->

                </div><!-- end of .tab_container -->

            </article><!-- end of content manager article -->
