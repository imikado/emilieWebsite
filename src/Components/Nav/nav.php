<nav class="navbar navbar-wrapper navbar-default navbar-fade is-transparent" role="navigation" aria-label="main navigation">

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
            <a class="navbar-item <?php if ($link == $this->paramList['pageSelected']) : ?>is-active has-background-info has-text-primary<?php endif; ?>" href="<?php echo $link ?>"><?php echo $label ?></a>
        <?php endforeach; ?>

    </div>


</nav>