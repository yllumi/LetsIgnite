<!doctype html>
<html lang="en">

    <head>
        <?php echo $template['partials']['metadata']; ?>
    </head>
    <body>

        <header id="header">
            <?php echo $template['partials']['header']; ?>
        </header> <!-- end of header bar -->

        <section id="secondary_bar">
            <?php echo $template['partials']['subheader']; ?>
        </section><!-- end of secondary bar -->

        <aside id="sidebar" class="column">
            <?php echo $template['partials']['sidebar']; ?>

            <?php echo $template['partials']['footer']; ?>
        </aside><!-- end of sidebar -->

        <section id="main" class="column">
			<?php echo $template['body']; ?>
            <div class="spacer"></div>
        </section>


    </body>

</html>
