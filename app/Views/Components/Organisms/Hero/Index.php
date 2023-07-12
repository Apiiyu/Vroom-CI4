<?php 
  $detailInformation = [
    [
      'title' => 'Horse Power',
      'value' => '380'
    ],
    [
      'title' => 'Speed AT',
      'value' => '12S'
    ],
    [
      'title' => 'Drive',
      'value' => 'AWD'
    ],
    [
      'title' => 'Tracking',
      'value' => 'A.I'
    ]
  ]
?>



<section id="hero" class="xl:container mx-auto lg:px-[100px] relative top-0 left-0 right-0 z-0">
  <div id="main-content" class="w-full h-full relative top-0 left-0 right-0 z-0 mt-[70px] px-16">
    <h1 class="relative top-0 left-0 right-0 z-0 uppercase font-bold text-[#F5F6F6] text-[240px] tracking-tighter leading-[101.5%]">New Porsche</h1>
    <img src="images/porsche.png" class="absolute top-5 left-[50%] translate-x-[-50%] z-1 w-3/4" alt="porsche">
  </div>

  <div id="detail-information" class="relative top-0 left-0 right-0 z-0 mt-8 px-16">
    <div class="grid grid-rows grid-cols-12 items-center">
      <div class="col-span-8 justify-center pl-10">
        <div class="grid justify-items-center grid-rows grid-cols-12">
          <!-- Foreach with index -->
          <?php foreach($detailInformation as $index => $information): ?>
            <div class="col-span-3 w-[-webkit-fill-available] <?= $index === count($detailInformation) - 1 ? '' : 'border-r-2 border-[#D8D8E4]' ?>">
              <div class="flex flex-col justify-center items-center">
                <p class="text-[26px] font-bold text-primary"><?= $information['value'] ?></p>
                <h6 class="text-muted text-[16px]">
                  <?= $information['title'] ?>
                </h6>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-span-4 justify-items-center">
        <div class="flex w-full h-full pl-16">
          <a href="#" class="w-[180px] h-[56px] bg-[#4743FB] text-center py-4 outline-0 border-0 rounded-[50px] text-white capitalize">Rent Now</a>
        </div>
      </div>
    </div>
  </div>
</section>