<?= $this->extend('Layouts/TemplateCheckout'); ?>

<?= $this->section('content'); ?>
  <!-- Section Navigation -->
  <?= $this->include('Components/Organisms/Navigations/Navbar'); ?>
  <!-- End Section Navigation -->

  <section id="main-content" class="container lg:px-[100px] lg:my-[50px]">
    <!-- Section Breadcrumb -->
    <?= $this->include('Components/Molecules/Breadcrumbs/Index'); ?>
    <!-- End Section Breadcrumb -->

    <!-- Section Content -->
    <?= $this->include('Components/Organisms/CarsDetail/Index'); ?>
    <!-- End Section Content -->
  </section>
<?= $this->endSection(); ?>