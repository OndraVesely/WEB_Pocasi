<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1>Seznam spolkových zemí</h1>

<?php

$table = new \CodeIgniter\View\Table();

$table->setHeading('ID', 'Název země', 'Zkratka');

/**
 * @var array $seznamZemi
 **/

foreach($seznamZemi as $row){
    $table->addRow($row->id, $row->name, $row->short_name);
}

$template = [
    'table_open' => '<table class="table table-bordered">',

    'thead_open'  => '<thead>',
    'thead_close' => '</thead>',

    'heading_row_start'  => '<tr>',
    'heading_row_end'    => '</tr>',
    'heading_cell_start' => '<th>',
    'heading_cell_end'   => '</th>',

    'tfoot_open'  => '<tfoot>',
    'tfoot_close' => '</tfoot>',

    'footing_row_start'  => '<tr>',
    'footing_row_end'    => '</tr>',
    'footing_cell_start' => '<td>',
    'footing_cell_end'   => '</td>',

    'tbody_open'  => '<tbody>',
    'tbody_close' => '</tbody>',

    'row_start'  => '<tr>',
    'row_end'    => '</tr>',
    'cell_start' => '<td>',
    'cell_end'   => '</td>',

    'row_alt_start'  => '<tr>',
    'row_alt_end'    => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end'   => '</td>',

    'table_close' => '</table>',
];

$table->setTemplate($template);

echo $table->generate();

?>

<?= $this->endSection() ?>