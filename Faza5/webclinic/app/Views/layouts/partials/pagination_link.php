<?php


use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination d-flex justify-content-end mt-2">
		<?php if ($pager->hasPrevious()) : ?>
                        <li class="page-item">
                            <a class="page-link cstm-form-btn ms-1" href="<?= $pager->getFirst() ?>">
                                <?= lang('Pager.first') ?>
                            </a>
                        </li>
			<li class="page-item">
                            <a class="page-link cstm-form-btn ms-1" href="<?= $pager->getPrevious() ?>">
                                <?= lang('Pager.previous') ?>
                            </a>
                        </li>
			
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>                     
                        <li class="page-item">
                            <a class="page-link cstm-form-btn ms-1" href="<?= $link['uri'] ?>">
                               <?= $link['title'] ?>
                            </a>
                        </li>                       		
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
                        
                        <li class="page-item">
                            <a class="page-link cstm-form-btn ms-1" href="<?= $pager->getNext() ?>">
                                <?= lang('Pager.next') ?>
                            </a>
                        </li>
			<li class="page-item">
                            <a class="page-link cstm-form-btn ms-1" href="<?= $pager->getLast() ?>">
                                <?= lang('Pager.last') ?>
                            </a>
                        </li>
			
		<?php endif ?>
	</ul>
</nav>
