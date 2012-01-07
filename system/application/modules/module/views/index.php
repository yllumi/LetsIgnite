            <article class="module width_full">
                <header>
					<h3>Addon Modules</h3>
                </header>

                <div class="container">
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
            </article><!-- end of content manager article -->
            
            <div class="clear"></div>
            
            <article class="module width_full">
                <header>
					<h3>Core Modules</h3>
                </header>

                <div class="container">
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
                            
                            <?php foreach($cmodules as $cmodule): ?>
                                <tr>
									<td>1.0</td> 
                                    <td><?php echo $cmodule; ?></td> 
                                    <td>My first module based on LetsIgnite module development tutorial.</td> 
                                    <td><input type="image" src="<?php echo theme_image_path('icn_edit.png'); ?>" title="Edit"><input type="image" src="<?php echo theme_image_path('icn_trash.png'); ?>" title="Trash"></td> 
                                </tr>
							<?php endforeach; ?>
                                
                            </tbody> 
                        </table>
                    </div>

            </article><!-- end of content manager article -->
