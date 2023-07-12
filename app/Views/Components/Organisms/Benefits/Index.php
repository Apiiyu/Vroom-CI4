<?php 
  $listBenefits = [
    [
      'name' => 'Delivery',
      'description' => 'Just sit tight and wait',
      'icons' => 'icons/icon-delivery.png'
    ],
    [
      'name' => 'Pricing',
      'description' => 'No hidden fees, no hassle',
      'icons' => 'icons/icon-pricing.png'
    ],
    [
      'name' => 'Secure',
      'description' => 'Use your plate number',
      'icons' => 'icons/icon-secure.png'
    ],
    [
      'name' => 'Fast Trade',
      'description' => 'Change car fast and easy',
      'icons' => 'icons/icon-fast-trade.png'
    ]
  ]
?>

<section id="benefits" class="xl:container lg:p-[100px] mx-auto mt-20">
  <div class="grid grid-rows grid-cols-12 justify-items-center items-center relative top-0 left-0 right-0 z-0">
    <div class="col-span-6 w-full">
      <div class="box-testimonial flex w-full justify-center relative top-0 left-0 right-0">
        <!-- Icon User Profile -->
        <img src="images/user.png" class="absolute top-[-50px] left-[100px]" alt="user">

        <img src="images/aspalt.png" class="rounded-[50px] w-[340px]" alt="aspalt">

        <!-- Box description -->
        <div class="bg-white rounded-[26px] p-[26px] absolute bottom-[-50px] right-0 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] max-w-[300px]">
          <div class="flex flex-col gap-3">
            <h6 class="text-primary text-[16px] font-medium">
              Car was awesome that I can 
              win the most popular race
              easily. Thank Vrom.
            </h6>
          </div>
        </div>
      </div>
    </div>

    <div class="col-span-4">
      <div class="list-benefits flex flex-col gap-8">
        <!-- Heading -->
        <div class="heading flex flex-col gap-1">
          <h1 class="text-primary font-bold text-[26px] leading-[40px]">
            Extra Benefits
          </h1>
          <p class="text-muted text-[16px]">
          You drive safety and famous car
          </p>
        </div>

        <!-- Benefit -->
        <div class="benefit flex flex-col gap-8">
          <?php foreach($listBenefits as $benefit): ?>
            <div class="flex items-center gap-4">
              <img src="<?= $benefit['icons'] ?>" class="w-[70px] h-[70px]" alt="icon-benefit">

              <div class="information flex flex-col gap-1">
                <h1 class="text-primary font-bold text-[18px] leading-[26px]">
                  <?= $benefit['name'] ?>
                </h1>

                <p class="text-muted text-[16px]">
                  <?= $benefit['description'] ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>