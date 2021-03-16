<?php

/**
 * Component: Button
 */

$button = $args;

?>

<div class="btn-wrap">
    <a href="<?= $button['url']; ?>" <?= (!empty($button['target'])) ? 'target="_blank"' : ''; ?>
       class="btn <?= (!empty($button['classes'])) ? $button['classes'] : ''; ?>" <?= (!empty($button['attr'])) ? $button['attr'] : ''; ?>><?= !empty($button['icon']) ? $button['icon'] : ''; ?><span class="btn__text"><?= $button['title']; ?></span><span class="btn__arrow"><?php echo get_inline_svg('arrow-right.svg'); ?></span></a>
</div>
