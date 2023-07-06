<?php 
  $listMenus = [
    [
      'name' => 'Home',
      'link' => 'index.php',
      'isActive' => false
    ],
    [
      'name' => 'Catalog',
      'link' => '#',
      'isActive' => false
    ],
    [
      'name' => 'Benefits',
      'link' => '#',
      'isActive' => false
    ],
    [
      'name' => 'Stories',
      'link' => '#',
      'isActive' => false,
    ],
    [
      'name' => 'Maps',
      'link' => '#',
      'isActive' => false
    ]
  ];

  // Get current url
  $currentUrl = current_url(true);

  // Get total segments then get last segment
  $totalSegments = $currentUrl->getTotalSegments();
  $lastSegment = $currentUrl->getSegment($totalSegments);

  // Set active menu
  foreach ($listMenus as $key => $menu) {
    if ($menu['link'] === $lastSegment) {
      $listMenus[$key]['isActive'] = true;
    }
  }
?>

<nav id="navbar" class="flex justify-between items-center bg-white px-[100px] py-10 bg-white">
  <img src="images/app-logo.png" alt="app-logo">

  <div class="list-menus flex items-center gap-[50px]">
    <?php foreach($listMenus as $menu): ?>
      <a
        href="<?= $menu['link'] ?>" 
        class="text-capitalize text-[16px] cursor-pointer <?= $menu['isActive'] === true ? 'text-primary font-semibold' : 'text-muted  font-normal hover:text-primary' ?> ">
        <?= $menu['name'] ?>
      </a>
    <?php endforeach; ?>
  </div>

  <div class="btn-actions">
    <a href="#" class="text-gray-900 !bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-10 py-4 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 font-semibold !text-[#0D0C41] capitalize">Sign In</a>
  </div>
</nav>