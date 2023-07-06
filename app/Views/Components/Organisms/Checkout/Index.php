<?php
  $listDetailOrder = [
    [
      'name' => 'Car chosen',
      'value' => 'Porsche Cayene'
    ],
    [
      'name' => 'Total day',
      'value' => '2 Days'
    ],
    [
      'name' => 'Service',
      'value' => 'Delivery'
    ],
    [
      'name' => 'Price',
      'value' => '$800 per day'
    ],
    [
      'name' => 'VAT (10%)',
      'value' => '$1,200'
    ],
    [
      'name' => 'Total',
      'value' => '$215,000'
    ],
  ];

  $listPaymentMethods = [
    [
      'name' => 'Master Card',
      'image' => 'images/master-card.png'
    ],
    [
      'name' => 'Midtrans',
      'image' => 'images/midtrans.png'
    ]
  ]
?>

<section id="checkout" class="container lg:px-[100px] lg:my-[50px] relative top-0 left-0 right-0 z-0">
  <div class="main-content relative top-0 left-0 right-0 z-0">
    <!-- Heading -->
    <div class="heading flex flex-col gap-1">
      <h1 class="text-primary font-bold text-[26px] leading-[40px]">
        Checkout & Drive Faster
      </h1>
      <p class="text-muted text-[16px] font-normal">
        We will help you get ready today
      </p>
    </div>

    <!-- Content -->
    <div class="grid grid-rows grid-cols-12 gap-10 relative top-0 left-0 right-0 z-0 mt-5 items-center">
      <div class="col-span-5">
        <div class="card bg-white rounded-[24px] p-8">
          <?php if ($state === 1): ?>
            <form class="grid grid-rows grid-cols-12 gap-4" action="" method="post">
              <!-- Full Name -->
              <div class="col-span-12">
                <div>
                  <label for="full_name" class="block mb-2 text-sm font-semibold !text-primary dark:text-white">Full Name</label>
                  <input type="text" id="full_name" class="!bg-white border !border-[#D8D8E4] !text-primary text-sm rounded-[50px] focus:ring-blue-500 focus:border-blue-500 block w-full px-[26px] py-4 dark:bg-gray-700 dark:border-[#4743FB] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-[#4743FB]" placeholder="John" required>
                </div>
              </div>

              <!-- Date From -->
              <div class="col-span-6">
                <div class="relative max-w-sm">
                  <label for="date-from" class="block mb-2 text-sm font-semibold !text-primary dark:text-white">From</label>
                  <input datepicker datepicker-orientation="bottom right" datepicker-format="dd MM yyyy" type="text" id="date-from" class="!bg-white border !border-[#D8D8E4] !text-primary text-sm rounded-[50px] focus:ring-blue-500 focus:border-[#4743FB] block w-full px-[26px] py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-[#4743FB]" placeholder="Select date">
                </div>
              </div>

              <!-- Date Until -->
              <div class="col-span-6">
                <div class="relative max-w-sm">
                  <label for="date-from" class="block mb-2 text-sm font-semibold !text-primary dark:text-white">Until</label>
                  <input datepicker datepicker-orientation="bottom right" datepicker-format="dd MM yyyy" type="text" id="date-from" class="!bg-white border !border-[#D8D8E4] !text-primary text-sm rounded-[50px] focus:ring-blue-500 focus:border-[#4743FB] block w-full px-[26px] py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-[#4743FB]" placeholder="Select date">
                </div>  
              </div>

              <!-- Address -->
              <div class="col-span-12">
                <div>
                  <label for="address" class="block mb-2 text-sm font-semibold !text-primary dark:text-white">Delivery Address</label>
                  <input type="text" id="address" class="!bg-white border !border-[#D8D8E4] !text-primary text-sm rounded-[50px] focus:ring-blue-500 focus:border-blue-500 block w-full px-[26px] py-4 dark:bg-gray-700 dark:border-[#4743FB] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-[#4743FB]" placeholder="Where should we deliver your car?" required>
                </div>
              </div>

              <!-- City -->
              <div class="col-span-6">
                <div>
                  <label for="city" class="block mb-2 text-sm font-semibold !text-primary dark:text-white">City</label>
                  <input type="text" id="city" class="!bg-white border !border-[#D8D8E4] !text-primary text-sm rounded-[50px] focus:ring-blue-500 focus:border-blue-500 block w-full px-[26px] py-4 dark:bg-gray-700 dark:border-[#4743FB] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-[#4743FB]" placeholder="Write city" required>
                </div>
              </div>

              <div class="col-span-6">
                <div>
                  <label for="post-code" class="block mb-2 text-sm font-semibold !text-primary dark:text-white">Postal Code</label>
                  <input type="text" id="post-code" class="!bg-white border !border-[#D8D8E4] !text-primary text-sm rounded-[50px] focus:ring-blue-500 focus:border-blue-500 block w-full px-[26px] py-4 dark:bg-gray-700 dark:border-[#4743FB] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-[#4743FB]" placeholder="Write code" required>
                </div>
              </div>

              <div class="col-span-12">
                <button type="submit" id="buttonContinue" class="text-white w-full mt-5 !bg-[#4743FB] hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
              </div>
            </form>
          <?php elseif ($state === 2): ?>
            <h6 class="text-primary text-[18px] font-semibold">Review Order</h6>

            <div class="detail-information flex flex-col gap-4 mt-4">
              <?php foreach($listDetailOrder as $detailOrder): ?>
                <div class="flex justify-between items-center">
                  <p class="text-primary font-normal text-[16px]"><?= $detailOrder['name'] ?></p>
                  <p class="text-primary font-semibold text-[16px]"><?= $detailOrder['value'] ?></p>
                </div>
              <?php endforeach; ?>
            </div>

            <div class="payments mt-[30px]">
              <h6 class="text-primary text-[18px] font-semibold">Payment Methods</h6>

              <div class="grid grid-rows grid-cols-12 mt-4 gap-4">
                <?php foreach($listPaymentMethods as $paymentMethod): ?>
                  <div class="col-span-6 h-full">
                    <div class="card bg-white border border-[#D8D8E4] rounded-[20px] px-5 py-6 flex items-center gap-4 h-full">
                      <img src="<?= $paymentMethod['image'] ?>" alt="payment-method">
                      <p class="text-primary text-[16px] font-semibold"><?= $paymentMethod['name'] ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>

                <div class="col-span-12 mt-3">
                  <button type="submit" id="buttonContinue" class="text-white w-full mt-5 !bg-[#4743FB] hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-span-7">
        <img src="images/porsche.png" class="absolute top-[50px] right-[-150px] w-[764px] h-[332px]" alt="porsche">
      </div>
    </div>
  </div>
</section>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    
    $('#buttonContinue').click(function() {
      state += 1; // Perform the sum
      console.log(state); // Output the result to the browser console (optional)
    });
  });
</script> -->