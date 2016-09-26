<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shops'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buisness Areas'), ['controller' => 'BuisnessAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buisness Area'), ['controller' => 'BuisnessAreas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shops form large-9 medium-8 columns content">
    <?= $this->Form->create($shop) ?>
    <fieldset>
        <legend><?= __('Add Shop') ?></legend>
        <?php
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('plan');
            echo $this->Form->input('qjin');
            echo $this->Form->input('staff');
            echo $this->Form->input('opt');
            echo $this->Form->input('pref_id');
            echo $this->Form->input('buisness_areas_id', ['options' => $buisnessAreas]);
            echo $this->Form->input('client_name');
            echo $this->Form->input('client_login');
            echo $this->Form->input('client_tel');
            echo $this->Form->input('client_url');
            echo $this->Form->input('start');
            echo $this->Form->input('end');
            echo $this->Form->input('hosoku');
            echo $this->Form->input('bpid');
            echo $this->Form->input('cars');
            echo $this->Form->input('cost');
            echo $this->Form->input('cplay');
            echo $this->Form->input('kihon');
            echo $this->Form->input('bikou');
            echo $this->Form->input('remarks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
