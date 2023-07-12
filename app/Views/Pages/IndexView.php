<?= $this->extend('Layouts/Template'); ?>

<?= $this->section('content'); ?>
   <!-- Section Navbar -->
   
   <?= $this->include('Components/Organisms/Navigations/Navbar'); ?>
  <!-- End Section Navbar -->

  <!-- Section Hero -->
    <?= $this->include('Components/Organisms/Hero/Index'); ?>
  <!-- End Section Hero -->

  <!-- Section Popular -->
    <?= $this->include('Components/Organisms/PopularCars/Index'); ?>
  <!-- End Section Popular -->

  <!-- Section Benefits -->
    <?= $this->include('Components/Organisms/Benefits/Index'); ?>
  <!-- End Section Benefits -->

<?= $this->endSection(); ?>