<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shop'), ['action' => 'edit', $shop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shop'), ['action' => 'delete', $shop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shops'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shop'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buisness Areas'), ['controller' => 'BuisnessAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buisness Area'), ['controller' => 'BuisnessAreas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shops view large-9 medium-8 columns content">
    <h3><?= h($shop->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $shop->has('user') ? $this->Html->link($shop->user->id, ['controller' => 'Users', 'action' => 'view', $shop->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buisness Area') ?></th>
            <td><?= $shop->has('buisness_area') ? $this->Html->link($shop->buisness_area->id, ['controller' => 'BuisnessAreas', 'action' => 'view', $shop->buisness_area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Name') ?></th>
            <td><?= h($shop->client_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Login') ?></th>
            <td><?= h($shop->client_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Tel') ?></th>
            <td><?= h($shop->client_tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($shop->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($shop->end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $this->Number->format($shop->plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qjin') ?></th>
            <td><?= $this->Number->format($shop->qjin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $this->Number->format($shop->staff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opt') ?></th>
            <td><?= $this->Number->format($shop->opt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pref Id') ?></th>
            <td><?= $this->Number->format($shop->pref_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bpid') ?></th>
            <td><?= $this->Number->format($shop->bpid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cars') ?></th>
            <td><?= $this->Number->format($shop->cars) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($shop->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cplay') ?></th>
            <td><?= $this->Number->format($shop->cplay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($shop->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Client Url') ?></h4>
        <?= $this->Text->autoParagraph(h($shop->client_url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Hosoku') ?></h4>
        <?= $this->Text->autoParagraph(h($shop->hosoku)); ?>
    </div>
    <div class="row">
        <h4><?= __('Kihon') ?></h4>
        <?= $this->Text->autoParagraph(h($shop->kihon)); ?>
    </div>
    <div class="row">
        <h4><?= __('Bikou') ?></h4>
        <?= $this->Text->autoParagraph(h($shop->bikou)); ?>
    </div>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($shop->remarks)); ?>
    </div>
</div>
