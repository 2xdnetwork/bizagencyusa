<?php if (!empty($notifications['success'])): ?>
    <?php foreach ($notifications['success'] as $notification): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $notification['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach;?>
<?php endif;?>