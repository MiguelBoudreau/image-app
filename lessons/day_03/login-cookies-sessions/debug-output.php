<?php if( DEBUG_MODE ){ ?>

<div class="debugger">
    <h1>DEBUG MODE IS ON</h1>
    <pre><?php print_r(get_defined_vars()); ?></pre>
</div>

<?php } ?>