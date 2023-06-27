<?php 
  // Create breadcrumb in CodeIgniter 4
  $currentUrl = current_url(true);
  $totalSegments = $currentUrl->getTotalSegments();
?>


<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="/" class="inline-flex items-center text-[16px] font-medium text-[#9D9DBC] hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
        Home
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <span class="divider text-[14px] text-[#9D9DBC]">/</span>
        <a href="#" class="ml-1 text-[16px] font-medium text-[#9D9DBC] hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Cars</a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
      <span class="divider text-[14px] text-[#9D9DBC]">/</span>
        <span class="ml-1 text-[16px] !text-primary font-semibold md:ml-2 ">Detail</span>
      </div>
    </li>
  </ol>
</nav>
