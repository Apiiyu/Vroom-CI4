<?= $this->extend('Layouts/TemplateCheckout'); ?>

<?= $this->section('content'); ?>
  <!-- Section Navigation -->
  <?= $this->include('Components/Organisms/Navigations/Navbar'); ?>
  <!-- End Section Navigation -->

  <!-- Section Checkout -->
    <?= $this->include('Components/Organisms/Checkout/Index'); ?>
  <!-- End Section Checkout -->
<?= $this->endSection(); ?>