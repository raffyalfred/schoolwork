
<h1>Crud Read</h1>

<?php if($results): ?>
<?php foreach($results as $row): ?>

    <h3><?php echo $row->letter; ?></h3>
    <div class="alert alert-info">by <b><?php echo $row->username; ?></b></div>
    <div style="margin-bottom: 1rem;"><?php echo $row->description; ?></div>

    <div style="margin-bottom: 1rem;"><a href="<?php echo base_url(); ?>crud/edit/<?php echo $row->id; ?>" class="btn btn-primary">Edit</a></div>
    <div style="margin-bottom: 1rem;"><a href="<?php echo base_url(); ?>crud/delete/<?php echo $row->id; ?>" class="btn btn-primary confirm">Delete</a></div>

<?php endforeach; ?>
<?php endif; ?>