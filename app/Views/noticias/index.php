
<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
<?php echo $this->extend('plantilla');?>

<?= $this->section('contenido'); ?>

<h1>hola mundo</h1>

<?= $this ->endSection(); ?>