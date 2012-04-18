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
                                    <th>Container</th> 
                                    <th></th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                            
                            <?php foreach($amodules as $amodule): ?>
                                <tr>
									<td><?php echo $amodule->version; ?></td> 
                                    <td><?php echo $amodule->name; ?></td> 
                                    <td><?php echo $amodule->description; ?></td> 
                                    <td><?php echo strtoupper($amodule->menu); ?></td>
                                    <td><?php if($amodule->installed == 1){ ?>
											<?php if($amodule->enabled == 1){ ?>
												<input type="image" src="<?php echo theme_image_path('bulb-yellow.png'); ?>" title="Module is enabled. Click to disable">
											<?php } else { ?>
												<input type="image" src="<?php echo theme_image_path('bulb-white.png'); ?>" title="Module is disabled. Click to enable">
											<?php } ?>	
											<input type="image" src="<?php echo theme_image_path('minus.png'); ?>" title="Uninstall">
										<?php } else { ?>
											<input type="image" src="<?php echo theme_image_path('plus.png'); ?>" title="Install">
										<?php } ?>
										<input type="image" src="<?php echo theme_image_path('icn_refresh.png'); ?>" title="Update">
										<input type="image" src="<?php echo theme_image_path('x.png'); ?>" title="Trash">
									</td> 
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
                                    <th>Container</th> 
                                    <th></th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                            
                            <?php foreach($cmodules as $cmodule): ?>
                                <tr>
									<td><?php echo $cmodule->version; ?></td> 
                                    <td><?php echo $cmodule->name; ?></td> 
                                    <td><?php echo $cmodule->description; ?></td>
                                    <td><?php echo strtoupper($cmodule->menu); ?></td>
                                    <td><input type="image" src="<?php echo theme_image_path('icn_refresh.png'); ?>" title="Update"></td> 
                                </tr>
							<?php endforeach; ?>
                                
                            </tbody> 
                        </table>
                    </div>
                </div>
            </article><!-- end of content manager article -->

	<a href="<?php echo site_url('admin/module/update_modules') ?>" class="outer_button right" title="Update All Modules">Update Modules</a>
