<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>Create New Letter</h1>

<?php echo form_open_multipart('crud/write') ?>

    <div class="form-group">
        <label for="letter">Letter</label>
        <input type="text" name="letter" class="form-control" value="<?php echo set_value('letter') ?>">
        <?php echo form_error('letter') ?>
    </div>

    <div class="form-group">
        <label for="Description">Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10"><?php echo set_value('description'); ?></textarea>
        <?php echo form_error('description') ?>
    </div>

    <div class="form-group">
        <input type="submit" class="btn">
    </div>
   

</form>
