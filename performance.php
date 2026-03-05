<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
  <!DOCTYPE html>
  <html lang="th" class="scroll-smooth">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Performance - Department of IoT and Information Engineering</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Tailwind CSS v4 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
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

  <!-- Main Content for Performance -->
  <main class="w-full pb-24 min-h-[70vh] flex flex-col items-center">
    <!-- Top Banner Full Width -->
    <div
      class="w-full bg-orange-gradient py-4 text-center shadow-md mt-10 mb-16">
      <h1 class="text-2xl md:text-3xl font-bold text-white drop-shadow-md tracking-wider">
        Cybersecurity Laboratory
      </h1>
    </div>

    <div class="max-w-5xl w-full px-4 flex flex-col md:flex-row justify-center items-stretch gap-10 md:gap-12 mt-4">
      <!-- Section 1 -->
      <a data-aos="fade-right" data-aos-duration="1000" href="cybersecurity-def.php"
        class="flex flex-col items-center justify-start w-full md:w-1/2 bg-gradient-to-b from-gray-900/90 to-black/80 border border-orange-500/20 rounded-3xl shadow-[0_8px_30px_rgba(0,0,0,0.5)] p-10 md:p-14 relative group overflow-hidden hover:border-orange-500/40 transition-all duration-500 cursor-pointer">
        <!-- Decorative Glow -->
        <div
          class="absolute top-0 left-1/2 -translate-x-1/2 w-4/5 h-32 bg-orange-600/10 blur-[60px] rounded-full pointer-events-none transition-all duration-700 group-hover:bg-orange-600/20 group-hover:h-48 group-hover:blur-[70px]">
        </div>

        <div
          class="w-48 h-48 md:w-56 md:h-56 rounded-full flex items-center justify-center p-1 mb-8 shadow-[0_0_20px_rgba(234,88,12,0.15)] group-hover:shadow-[0_0_40px_rgba(234,88,12,0.3)] bg-gradient-to-b from-orange-500/30 to-transparent transition-all duration-500 z-10">
          <img src="assets/images/Ellipse 2.png" alt="Definition of Cybersecurity Laboratory"
            class="w-full h-full object-cover rounded-full border-[6px] border-[#0a0502] group-hover:border-black transition-colors duration-500" />
        </div>

        <div class="text-center z-10 flex-1 flex flex-col justify-start w-full">
          <div
            class="w-12 h-1 bg-orange-600/50 mx-auto mb-6 rounded-full group-hover:w-24 group-hover:bg-orange-500 transition-all duration-500">
          </div>
          <h2
            class="text-xl md:text-2xl font-bold text-white leading-snug tracking-wide group-hover:text-orange-200 transition-colors">
            Definition of Cybersecurity<br />Laboratory
          </h2>
        </div>
      </a>

      <!-- Section 2 -->
      <a data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" href="cybersecurity-researcher.php"
        class="flex flex-col items-center justify-start w-full md:w-1/2 bg-gradient-to-b from-gray-900/90 to-black/80 border border-orange-500/20 rounded-3xl shadow-[0_8px_30px_rgba(0,0,0,0.5)] p-10 md:p-14 relative group overflow-hidden hover:border-orange-500/40 transition-all duration-500 cursor-pointer">
        <!-- Decorative Glow -->
        <div
          class="absolute top-0 left-1/2 -translate-x-1/2 w-4/5 h-32 bg-orange-600/10 blur-[60px] rounded-full pointer-events-none transition-all duration-700 group-hover:bg-orange-600/20 group-hover:h-48 group-hover:blur-[70px]">
        </div>

        <div
          class="w-48 h-48 md:w-56 md:h-56 rounded-full flex items-center justify-center p-1 mb-8 shadow-[0_0_20px_rgba(234,88,12,0.15)] group-hover:shadow-[0_0_40px_rgba(234,88,12,0.3)] bg-gradient-to-b from-orange-500/30 to-transparent transition-all duration-500 z-10">
          <img src="assets/images/Ellipse 3.png" alt="Cybersecurity Laboratory Researcher"
            class="w-full h-full object-cover rounded-full border-[6px] border-[#0a0502] group-hover:border-black transition-colors duration-500" />
        </div>

        <div class="text-center z-10 flex-1 flex flex-col justify-start w-full">
          <div
            class="w-12 h-1 bg-orange-600/50 mx-auto mb-6 rounded-full group-hover:w-24 group-hover:bg-orange-500 transition-all duration-500">
          </div>
          <h2
            class="text-xl md:text-2xl font-bold text-white leading-snug tracking-wide group-hover:text-orange-200 transition-colors">
            Cybersecurity Laboratory<br />Researcher
          </h2>
        </div>
      </a>
    </div>
  </main>

  <!-- Footer Area -->
  <?php include 'footer.php'; ?>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/script.js"></script>
  <!-- Floating Action Button -->
  <?php include 'floating-btn.php'; ?>

</body>

</html>