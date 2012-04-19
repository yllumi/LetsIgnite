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
                        <td style="text-align: center"><?php if ($amodule->installed == 1) { ?>
                                <?php if ($amodule->enabled == 1) { ?>
                                    <a href="#" class="btn btn-mini" title="Module is enabled. Click to disable"><i class="icon-off"></i></a>
                                <?php } else { ?>
                                    <a href="#" class="btn btn-mini" title="Module is disabled. Click to enable"><i class="icon-play-circle"></i></a>
                                <?php } ?>	
                                    <a href="#" class="btn btn-mini" title="Uninstall"><i class="icon-minus"></i></a>
                            <?php } else { ?>
                                    <a href="#" class="btn btn-mini" title="Install"><i class="icon-plus"></i></a>
                            <?php } ?>
                                    <a href="#" class="btn btn-mini" title="Update"><i class="icon-time"></i></a>
                                    <a href="#" class="btn btn-mini" title="Remove"><i class="icon-trash"></i></a>
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
                        <td style="text-align: center">
                            <a href="#" class="btn btn-mini" title="Refresh"><i class="icon-refresh"></i></a>
                        </td> 
                    </tr>
                <?php endforeach; ?>

            </tbody> 
        </table>
    </div>
</div>

<hr />

<a href="<?php echo site_url('admin/module/update_modules') ?>" class="btn pull-right">Update Modules</a>
