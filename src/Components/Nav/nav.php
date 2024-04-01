<nav style="background:rgba(255,255,255,0.8)" class="navbar navbar-wrapper navbar-default navbar-fade" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a class="navbar-item has-text-primary is-size-3" href="index.html">
            Emilie Pereira
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>



    <div class="navbar-end  " id="navbar-menu">

        <?php foreach ($this->paramList['linkList'] as $label => $link) : ?>
            <a class="navbar-item <?php if ($link == $this->paramList['pageSelected']) : ?>is-active has-background-success has-text-primary<?php endif; ?>" href="<?php echo $link ?>"><?php echo $label ?></a>
        <?php endforeach; ?>

    </div>


</nav>