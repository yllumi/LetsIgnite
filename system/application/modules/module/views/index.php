            <article class="module width_full">
				 <header><h3 class="tabs_involved">Available Modules</h3>
                    <ul class="tabs">
                        <li><a href="#tab1">Add-On</a></li>
                        <li><a href="#tab2">Core</a></li>
                    </ul>
                </header>

                <div class="container">
					<div id="tab1" class="tab_content">
                        <table class="tablesorter" cellspacing="0"> 
                            <thead> 
                                <tr>
                                    <th>Ver.</th> 
                                    <th>Module Name</th> 
                                    <th>Description</th> 
                                    <th>Actions</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                            
                            <?php foreach($amodules as $amodule): ?>
                                <tr>
									<td>1.0</td> 
                                    <td><?php echo $amodule; ?></td> 
                                    <td>My first module based on LetsIgnite module development tutorial.</td> 
                                    <td><input type="image" src="<?php echo theme_image_path('icn_edit.png'); ?>" title="Edit"><input type="image" src="<?php echo theme_image_path('icn_trash.png'); ?>" title="Trash"></td> 
                                </tr>
							<?php endforeach; ?>
                                
                            </tbody> 
                        </table>
                    </div>
                    
                    <div id="tab2" class="tab_content">
                        <table class="tablesorter" cellspacing="0"> 
                            <thead> 
                                <tr>
                                    <th>Ver.</th> 
                                    <th>Module Name</th> 
                                    <th>Description</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                            
                            <?php foreach($cmodules as $cmodule): ?>
                                <tr>
									<td>1.0</td> 
                                    <td><?php echo $cmodule; ?></td> 
                                    <td>My first module based on LetsIgnite module development tutorial.</td>
                                </tr>
							<?php endforeach; ?>
                                
                            </tbody> 
                        </table>
                    </div>
                </div>
            </article><!-- end of content manager article -->
