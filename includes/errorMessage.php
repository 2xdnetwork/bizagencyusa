<?php if (!empty($notifications['error'])): ?>
    <?php foreach ($notifications['error'] as $notification): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $notification['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach;?>
<?php endif;?>