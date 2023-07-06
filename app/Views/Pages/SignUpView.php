<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <!-- Tambahkan link stylesheet Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
    </div>
<?= $this->extend('Layouts/Template'); ?>
<?= $this->section('content'); ?>
   <!-- Section Navbar -->
   <?= $this->include('Components/Organisms/Navigations/Navbar'); ?>
  <!-- End Section Navbar -->
  <div class="main-content min-h-screen bg-gray-100">
    <div class="text-center py-10">
          <h2 class="text-2xl font-semibold" style="color: #0D0C41; font-size: 26px; font-family: Poppins; font-weight: 700;">Sign In &amp; Drive</h2>
          <p class="mt-2 text-sm" style="color: #9D9DBC; font-size: 16px; font-family: Poppins; margin-top: 4px;">We will help you get ready today</p>
          <div style="height: 30px;"></div>
        </div>

        <div class="flex items-center justify-center">
          <div class="w-490 h-496 flex-shrink-0 bg-white p-8 rounded-2xl">
            <form>
            <div class="m-4 p-4 relative flex items-center justify-center" style="width: 120px; height: 120px; top: 50%; left: 50%; transform: translate(-50%, -50%);">
  <img 
    class="rounded-full w-full h-full" 
    src="https://p7.hiclipart.com/preview/92/319/609/computer-icons-person-clip-art-name.jpg" 
    alt="Foto Profil" 
  />
  <img 
    class="w-4 h-4 rounded-full absolute right-0 bottom-2" 
    src="https://static.vecteezy.com/system/resources/previews/009/266/327/original/plus-sign-icon-free-png.png" 
    alt="Tambah Foto" 
  />
</div>


              <div class="mb-6 relative">
                <label for="email" class="block text-gray-700 font-medium mt-3">Full Name</label>
                <input type="email" id="email" name="email" class="w-full border-2 border-gray-300 rounded-full p-2 focus:outline-none focus:border-blue-500 mt-3" required style="border-radius: 50px; border: 1px solid #D8D8E4; width: 430px; height: 55px; flex-shrink: 0;">
                <div class="bg-gray-200 rounded-full absolute top-0 bottom-0 left-0 right-0 pointer-events-none" style="z-index: -1;"></div>
              </div>
              <div class="mb-6 relative">
                <label for="email" class="block text-gray-700 font-medium mt-3">Phone Number</label>
                <input type="email" id="email" name="email" class="w-full border-2 border-gray-300 rounded-full p-2 focus:outline-none focus:border-blue-500 mt-3" required style="border-radius: 50px; border: 1px solid #D8D8E4; width: 430px; height: 55px; flex-shrink: 0;">
                <div class="bg-gray-200 rounded-full absolute top-0 bottom-0 left-0 right-0 pointer-events-none" style="z-index: -1;"></div>
              </div>
              <div class="mb-6 relative">
                <label for="email" class="block text-gray-700 font-medium mt-3">Email Address</label>
                <input type="email" id="email" name="email" class="w-full border-2 border-gray-300 rounded-full p-2 focus:outline-none focus:border-blue-500 mt-3" required style="border-radius: 50px; border: 1px solid #D8D8E4; width: 430px; height: 55px; flex-shrink: 0;">
                <div class="bg-gray-200 rounded-full absolute top-0 bottom-0 left-0 right-0 pointer-events-none" style="z-index: -1;"></div>
              </div>
              <div class="mb-6 relative">
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password" class="w-full border-2 border-gray-300 rounded-full p-2 focus:outline-none focus:border-blue-500 mt-3" required style="border-radius: 50px; border: 1px solid #D8D8E4; width: 430px; height: 55px; flex-shrink: 0;">
                <div class="bg-gray-200 rounded-full absolute top-0 bottom-0 left-0 right-0 pointer-events-none" style="z-index: -1;"></div>
              </div>
              <div class="flex items-center justify-end mb-4">
                <div class="text-sm">
                </div>
              </div>
              <div class="flex items-center justify-center mt-16">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full w-full" style="width: 430px; height: 55px; flex-shrink: 0; border-radius: 50px; background: #4743FB;">Create My Account</button>
              </div>
            </form>
            <div class="flex items-center justify-center mt-10">
              <button type="submit" class="bg-white hover:bg-blue-600 text-blue-500 font-semibold py-2 px-4 rounded-full w-full" style="width: 430px; height: 55px; flex-shrink: 0; border-radius: 50px; border: 1px solid #D8D8E4;">Sign In</button>
            </div>
          </div>
        </div>
  </div>
</body>
</html>
  <?= $this->endSection(); ?>