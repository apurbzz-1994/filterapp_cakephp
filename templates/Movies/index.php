<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie[]|\Cake\Collection\CollectionInterface $movies
 */
?>

<div class = "row">
    <!--This is where the form would happen-->
    <div class = "col-12 col-md-12 col-lg-12">
        <!--Form create needs to be set as null as we'll be using this to form a query string-->
        <!--Notice the 'type' as 'get' and not 'post'-->
        <div class = "jumbotron">
            <h4>Movie Search</h4>
            <hr class="my-4">
            <!--form creation-->
        <?= $this->Form->create(null,['url' => ['controller'=>'Movies','action' => 'index'], 'type' => 'get']); ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Year</label>
                        <?= $this->Form->control('year', ['options'=>$years, 'empty'=>'--Select a year--', 'class'=>'form-control', 'label'=>false]); ?>
                    </div>  
                    <div class="form-group col-md-6">
                        <label>Genre</label>
                        <?= $this->Form->control('genre', ['options' => $genres, 'empty'=>'--Select a genre--', 'class'=>'form-control', 'label'=>false]); ?>
                    </div>
                </div>
            <?= $this->Form->button(__('Filter'), ['class'=>'btn btn-secondary btn-lg btn-block']) ?>
        <?= $this->Form->end() ?>
        <!--form end-->
        </div>
    </div>
    <div class = "col-12 col-md-12 col-lg-12">
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($movies as $movie): ?>
                <tr>
                    <td><?= h($movie->name) ?></td>
                    <td><?= h($movie->year) ?></td>
                    <td><?= h($movie->genre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movie->id], ['class'=>'badge badge-dark']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movie->id], ['class'=>'badge badge-dark']) ?>
                        <?= $this->Form->postLink(__('Delete'),['action' => 'delete', $movie->id,], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id), 'class'=>'badge badge-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
        </table>
        <!--paginator code, need to modify this later-->
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>

    </div>
</div>
