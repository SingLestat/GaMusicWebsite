<?php if(count($artist_result) > 0): ?>
    <div class="error">
        <?php foreach($artist_result as $user): ?>
            <p><?php echo $user; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>