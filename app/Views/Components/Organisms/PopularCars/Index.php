<?php 
  $listItems = [
    [
      'name' => 'Taycan 4S',
      'type' => 'Electric Car',
      'price' => '$250',
      'image' => 'images/porsche.png'
    ],
    [
      'name' => '911 922 RS',
      'type' => 'Sport Car',
      'price' => '$350',
      'image' => 'images/porsche.png'
    ],
    [
      'name' => 'Panamera',
      'type' => 'Sport Car',
      'price' => '$450',
      'image' => 'images/porsche.png'
    ],
    [
      'name' => 'Cayenne',
      'type' => 'Sport Car',
      'price' => '$550',
      'image' => 'images/porsche.png'
    ]
  ];

?>

<section id="popular-cars" class="bg-[#F5F6F6] w-full">
  <div class="xl:container mx-auto lg:p-[100px] mt-20">
  <div class="heading flex flex-col gap-1">
    <h1 class="text-primary font-bold text-[26px] leading-[39px]">
      Popular Cars
    </h1>
    <p class="text-[16px] text-muted">Start your big day</p>
  </div>

  <section id="cars" class="grid grid-rows grid-cols-12 items-center gap-[30px] mt-[30px]">
    <?php foreach($listItems as $item): ?>
      <div class="col-span-3">
        <div class="card p-5 rounded-[22px] bg-white flex flex-col gap-4 w-100">
          <div class="heading flex flex-col gap-1">
            <h2 class="text-primary font-bold text-lg"><?= $item['name'] ?></h2>
            <p class="text-[16px] text-muted"><?= $item['type'] ?></p>
          </div>
  
          <!-- Card Image -->
          <div class="card-image">
            <img src="images/porsche.png" class="w-100 h-100" alt="cars">
          </div>
  
          <!-- Card Information -->
          <div class="card-information flex justify-between items-center">
            <h3 class="text-secondary text-[16px] font-bold">
              <?= $item['price'] ?><span class="text-muted text-[14px] font-light">/day</span>
            </h3>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
  </div>
</section>