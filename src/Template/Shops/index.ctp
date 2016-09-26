<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shop'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buisness Areas'), ['controller' => 'BuisnessAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buisness Area'), ['controller' => 'BuisnessAreas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shops index large-9 medium-8 columns content">
    <h3><?= __('Shops') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qjin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pref_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buisness_areas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bpid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cars') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cplay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shops as $shop): ?>
            <tr>
                <td><?= $this->Number->format($shop->id) ?></td>
                <td><?= $shop->has('user') ? $this->Html->link($shop->user->id, ['controller' => 'Users', 'action' => 'view', $shop->user->id]) : '' ?></td>
                <td><?= $this->Number->format($shop->plan) ?></td>
                <td><?= $this->Number->format($shop->qjin) ?></td>
                <td><?= $this->Number->format($shop->staff) ?></td>
                <td><?= $this->Number->format($shop->opt) ?></td>
                <td><?= $this->Number->format($shop->pref_id) ?></td>
                <td><?= $shop->has('buisness_area') ? $this->Html->link($shop->buisness_area->id, ['controller' => 'BuisnessAreas', 'action' => 'view', $shop->buisness_area->id]) : '' ?></td>
                <td><?= h($shop->client_name) ?></td>
                <td><?= h($shop->client_login) ?></td>
                <td><?= h($shop->client_tel) ?></td>
                <td><?= h($shop->start) ?></td>
                <td><?= h($shop->end) ?></td>
                <td><?= $this->Number->format($shop->bpid) ?></td>
                <td><?= $this->Number->format($shop->cars) ?></td>
                <td><?= $this->Number->format($shop->cost) ?></td>
                <td><?= $this->Number->format($shop->cplay) ?></td>
                <td><?= h($shop->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shop->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
