<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light">
    <i class="fas fa-backward mr-2"></i>Back
</a>
<br>
<h1><?php echo $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
</div>
<p><?php echo $data['post']->body; ?></p>

<?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
    <hr>
    <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-success">
        <i class="far fa-edit"></i> Edit
    </a>

    <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="POST" class="float-right">
        <button class="btn btn-danger" type="submit">
            <i class="fas fa-trash mr-2"></i> Delete
        </button>

    </form>
<?php endif; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>