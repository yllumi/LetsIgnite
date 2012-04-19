<ul class="nav nav-tabs">
    <li class="active"><a href="#addon" data-toggle="tab">Add-On Modules</a></li>
    <li><a href="#core" data-toggle="tab">Core Modules</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="addon">
        <table class="table table-striped table-bordered"> 
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

                <?php foreach ($amodules as $amodule): ?>
                    <tr>
                        <td><?php echo $amodule->version; ?></td> 
                        <td><?php echo $amodule->name; ?></td> 
                        <td><?php echo $amodule->description; ?></td> 
                        <td><?php echo strtoupper($amodule->menu); ?></td>
                        <td><?php if ($amodule->installed == 1) { ?>
                                <?php if ($amodule->enabled == 1) { ?>
                                    <input type="image" src="<?php echo theme_image_path('bulb-yellow.png'); ?>" title="Module is enabled. Click to disable">
                                <?php } else { ?>
                                    <input type="image" src="<?php echo theme_image_path('bulb-white.png'); ?>" title="Module is disabled. Click to enable">
                                <?php } ?>	
                                <input type="image" src="<?php echo theme_image_path('minus.png'); ?>" title="Uninstall">
                            <?php } else { ?>
                                <input type="image" src="<?php echo theme_image_path('plus.png'); ?>" title="Install">
                            <?php } ?>
                            <input type="image" src="<?php echo theme_image_path('icn_refresh.png'); ?>" title="Update">
                            <input type="image" src="<?php echo theme_image_path('x.png'); ?>" title="Remove">
                        </td> 
                    </tr>
                <?php endforeach; ?>

            </tbody> 
        </table>
    </div>
    <div class="tab-pane" id="core">
        <table class="table table-striped table-bordered"> 
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

                <?php foreach ($cmodules as $cmodule): ?>
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

<hr />

<a href="<?php echo site_url('admin/module/update_modules') ?>" class="btn pull-right">Update Modules</a>
