<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1><?php echo $heading ?></h1>

<div class="container">
    <div class="row" style="display: flex; justify-content: space-between; margin-top: 3rem;">
        <div class="col">
            <img src="<?php echo base_url() . "pictures/" . $picture ?>" alt="">
        </div>
        <div class="col" style="width: 40%;">
            <?php echo $content ?>;
        </div>
    </div>
</div>
