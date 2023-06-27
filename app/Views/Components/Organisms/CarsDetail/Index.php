<?php 
  $listBenefits = [
    [
      'name' => '350 Horse Power'
    ],
    [
      'name' => '4 Seat People'
    ],
    [
      'name' => '2 Doors'
    ],
    [
      'name' => '8 Speeds AT'
    ],
    [
      'name' => 'A.I Full Tracking'
    ],
    [
      'name' => 'Semi Autonomous'
    ],
    [
      'name' => 'Apple Carplay'
    ],
    [
      'name' => 'Pickup & Delivery'
    ]
  ]
?>

<section id="content" class="mt-[50px]">
  <div class="grid grid-rows grid-cols-12 gap-8">
    <div class="col-span-9 bg-white rounded-[30px] p-4">
      <div class="grid grid-rows grid-cols gap-5">
        <div class="col-span-12 max-h-[560px]">
          <img src="../../images/porsche-1.png" class="w-full h-full rounded-[18px]" alt="porsche">
        </div>

        <div class="col-span-3">
          <img src="../../images/porsche-2.png" class="w-full h-full rounded-[18px]" alt="porsche">
        </div>

        <div class="col-span-3">
          <img src="../../images/porsche-3.png" class="w-full h-full rounded-[18px]" alt="porsche">
        </div>

        <div class="col-span-3">
          <img src="../../images/porsche-4.png" class="w-full h-full rounded-[18px]" alt="porsche">
        </div>

        <div class="col-span-3">
          <img src="../../images/porsche-5.png" class="w-full h-full rounded-[18px]" alt="porsche">
        </div>
      </div>
    </div>

    <div class="col-span-3 bg-white rounded-[30px] py-5 px-6">
      <div class="list-features flex flex-col gap-5">
        <div class="brand flex flex-col gap-[10px]">
          <div class="heading flex flex-col gap-2">
            <h1 class="title text-[24px] text-primary font-bold">Porsche Taycan
      Mattic 67S</h1>
  
            <p class="text-muted text-[16px]">Sport Car</p>
          </div>
  
          <div class="testimonials flex items-center gap-2">
            <div class="rating flex items-center gap-1">
              <?php for ($index = 0; $index < 5; $index++): ?>
                <img src="../../icons/icon-star.svg" class="w-[18px] h-[18px]" alt="star"> 
              <?php endfor; ?>
            </div>
  
            <h5 class="text-primary text-[16px] font-semibold">(12,887)</h5>
          </div>
        </div>

        <div class="divider bg-[#D8D8E4] w-full h-[1px] rounded-1"></div>

        <div class="benefits flex flex-col gap-4">
          <?php foreach($listBenefits as $benefit): ?>
            <div class="flex items-center gap-3">
              <img src="../../icons/icon-benefit.svg" class="w-[20px] h-[20px]" alt="icon-benefit">

              <h6 class="text-primary text-[16px] font-semibold"><?= $benefit['name'] ?></h6>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>