<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="news-list">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        <article class="news-item">
            <h2 class="news-item__title">
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <?= $item['NAME'] ?>
                </a>
            </h2>
            <?php if ($item['DISPLAY_ACTIVE_FROM']): ?>
                <time class="news-item__date">
                    <?= $item['DISPLAY_ACTIVE_FROM'] ?>
                </time>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</div>