<?php

$this->start('css');
echo $this->Html->css('jquery/ui/silver/jquery-ui-1.8.21.custom');
echo $this->Html->css('admin/silver/style');
if ($title == __('View Classrooms')) {
	echo $this->Html->css('jqgrid/ui.jqgrid');
}

$this->end();

$this->start('script');
echo $this->Html->script('jquery/jquery-1.7.2.min');
echo $this->Html->script('jquery/ui/jquery.ui.core.min');
echo $this->Html->script('jquery/ui/jquery.ui.widget.min');
echo $this->Html->script('jquery/ui/jquery.ui.accordion.min');
echo $this->Html->script('jquery/ui/jquery.ui.button.min');
echo $this->Html->script('admin/admin');
if ($title == __('Create Classroom')) {
	echo $this->Html->script('jquery/ui/jquery.ui.mouse.min');
	echo $this->Html->script('jquery/ui/jquery.ui.selectable.min');
	echo $this->Html->script('admin/classroom.create');
}
if ($title == __('View Classroom')) {
    echo $this->Html->script('jqgrid/i18n/grid.locale-en');
    echo $this->Html->script('jqgrid/jquery.jqGrid.min');
    echo $this->Html->script('admin/classrooms.view');
}
$this->end();

?>