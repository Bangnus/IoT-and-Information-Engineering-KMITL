<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Department of IoT and Information Engineering</title>
  <link rel="stylesheet" href="css/style.css" />
  <!-- Tailwind CSS v4 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- FontAwesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Removed Lucide Icons CDN as per request -->
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="radial-bg text-gray-200">
  <!-- Top Info Bar -->
  <div
    class="flex flex-col md:flex-row justify-between items-center py-4 px-4 md:px-8 text-xs text-gray-400 gap-2 md:gap-0">
    <div class="hidden md:block font-semibold text-white text-left text-lg">
      IoT and Information Engineering, KMITL
    </div>
    <div class="flex flex-wrap justify-center gap-4">
      <span class="text-[14px]"><i class="fa-solid fa-location-dot mr-1 text-orange-500"></i> E-12
        buildind</span>
      <span class="text-[14px]"><i class="fa-solid fa-envelope mr-1 text-orange-500"></i>
        iot@kmitl.ac.th</span>
    </div>
  </div>

  <!-- Navigation Bar -->
  <?php include 'navbar.php'; ?>

  <!-- Main Content for Faculty -->
  <main class="w-full pb-24 min-h-[70vh] flex flex-col items-center">
    <!-- Top Banner Full Width -->
    <div 
      class="w-full bg-orange-gradient py-4 text-center shadow-md mt-10 mb-16">
      <h1 class="text-2xl md:text-3xl font-bold text-white drop-shadow-md tracking-wider">
        Faculty
      </h1>
    </div>

    <!-- Premium Faculty Options -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 w-full mt-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 w-full">
        <!-- IoT Card -->
        <a href="iot-faculty-member.php" data-aos="fade-right" data-aos-duration="1000"
          class="relative flex flex-col justify-center items-center w-full min-h-[300px] bg-gradient-to-br from-black/80 to-[#1a0a04] backdrop-blur-xl border border-orange-500/20 rounded-3xl p-8 hover:border-orange-500/80 transition-all duration-500 shadow-[0_10px_30px_rgba(0,0,0,0.8)] hover:shadow-[0_15px_40px_rgba(234,88,12,0.4)] hover:-translate-y-2 group overflow-hidden">
          <!-- Background Glow FX -->
          <div
            class="absolute inset-0 bg-gradient-to-t from-orange-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
          </div>
          <div
            class="absolute -right-20 -top-20 w-64 h-64 bg-orange-600/10 rounded-full blur-[80px] group-hover:bg-orange-500/30 transition-all duration-700">
          </div>

          <div
            class="relative z-10 w-24 h-24 mb-8 rounded-2xl bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center shadow-[0_0_20px_rgba(234,88,12,0.4)] group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
            <i class="fa-solid fa-microchip text-white text-4xl group-hover:animate-pulse"></i>
          </div>

          <h2
            class="relative z-10 text-2xl md:text-3xl font-extrabold text-white text-center leading-snug drop-shadow-md mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-orange-300 group-hover:to-orange-500 transition-all duration-300">
            Department of IoT and<br />Information Engineering
          </h2>
          <p class="relative z-10 text-orange-200/70 text-sm md:text-base font-medium mt-3 tracking-wide text-center">
            View Faculty Members
            <i class="fa-solid fa-arrow-right ml-1 group-hover:translate-x-2 transition-transform"></i>
          </p>
        </a>

        <!-- Physics Card -->
        <a href="physics-faculty-member.php" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100"
          class="relative flex flex-col justify-center items-center w-full min-h-[300px] bg-gradient-to-br from-black/80 to-[#1a0a04] backdrop-blur-xl border border-orange-500/20 rounded-3xl p-8 hover:border-orange-500/80 transition-all duration-500 shadow-[0_10px_30px_rgba(0,0,0,0.8)] hover:shadow-[0_15px_40px_rgba(234,88,12,0.4)] hover:-translate-y-2 group overflow-hidden">
          <!-- Background Glow FX -->
          <div
            class="absolute inset-0 bg-gradient-to-t from-orange-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
          </div>
          <div
            class="absolute -left-20 -bottom-20 w-64 h-64 bg-orange-600/10 rounded-full blur-[80px] group-hover:bg-orange-500/30 transition-all duration-700">
          </div>

          <div
            class="relative z-10 w-24 h-24 mb-8 rounded-2xl bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center shadow-[0_0_20px_rgba(234,88,12,0.4)] group-hover:scale-110 group-hover:-rotate-3 transition-all duration-500">
            <i class="fa-solid fa-atom text-white text-4xl group-hover:animate-spin-slow"></i>
          </div>

          <h2
            class="relative z-10 text-2xl md:text-3xl font-extrabold text-white text-center leading-snug drop-shadow-md mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-orange-300 group-hover:to-orange-500 transition-all duration-300">
            Industrial Physics<br />Program
          </h2>
          <p class="relative z-10 text-orange-200/70 text-sm md:text-base font-medium mt-3 tracking-wide text-center">
            View Professors
            <i class="fa-solid fa-arrow-right ml-1 group-hover:translate-x-2 transition-transform"></i>
          </p>
        </a>
      </div>
    </div>
  </main>

  <!-- Footer Area -->
  <?php include 'footer.php'; ?>


  <!-- Floating Action Button -->
  <?php include 'floating-btn.php'; ?>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/script.js"></script>
</body>

</html>