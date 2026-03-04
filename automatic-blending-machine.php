<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Automatic Blending Machine - Department of IoT and Information Engineering
    </title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Tailwind CSS v4 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- FontAwesome for Icons -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />  </head>
  <body class="radial-bg text-gray-200">
    <!-- Top Info Bar -->
    <div
      class="flex flex-col md:flex-row justify-between items-center py-4 px-4 md:px-8 text-xs text-gray-400 gap-2 md:gap-0"
    >
      <div class="hidden md:block font-semibold text-white text-left text-lg ">
        IoT and Information Engineering, KMITL
      </div>
      <div class="flex flex-wrap justify-center gap-4">
        <span class="text-[14px]"
          ><i class="fa-solid fa-location-dot mr-1 text-orange-500"></i> E-12
          buildind</span
        >
        <span class="text-[14px]"
          ><i class="fa-solid fa-envelope mr-1 text-orange-500"></i>
          iot@kmitl.ac.th</span
        >
      </div>
    </div>

    <!-- Navigation Bar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Title Area -->
    <div
      class="relative w-full overflow-hidden flex items-center justify-center mt-6 md:mt-10 h-[150px] sm:h-[180px] md:h-[220px] lg:h-[200px]"
    >
      <img
        src="assets/gif/Circuit .gif"
        alt="Banner"
        class="absolute inset-0 w-full h-full object-cover object-center blur-[1px]"
      />
      <div
        class="w-full absolute flex flex-col items-center justify-center px-4"
      >
        <h1
          class="text-2xl sm:text-3xl md:text-5xl font-bold text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.8)] text-center tracking-wider"
        >
          Automatic Blending Machine
        </h1>
      </div>
    </div>

    <!-- Main Content for Automatic Blending Machine -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <div
        class="flex flex-col md:flex-row items-center justify-between gap-10"
      >
        <div class="w-1/2 flex flex-col gap-6">
          <!-- 1 -->
          <div class="">
            <div
              class="bg-orange-gradient py-2 md:py-2 px-2 rounded-lg shadow-lg border border-orange-500/30"
            >
              <h2
                class="text-xl md:text-2xl px-4 font-bold text-shadow text-white"
              >
                หลักการทำงาน
              </h2>
            </div>
            <div class="mt-4">
              <p class="text-gray-300 text-lg">
                <i class="fa-solid fa-play"></i>
                ใช้ปั๊มลมในการดันน้ำขึ้นมาผสมควบคุมโดยโปรแกรมในArduino
              </p>
            </div>
          </div>
          <!-- 2 -->
          <div class="">
            <div
              class="bg-orange-gradient py-2 md:py-2 px-2 rounded-lg shadow-lg border border-orange-500/30"
            >
              <h2
                class="text-xl md:text-2xl px-4 font-bold text-shadow text-white"
              >
                วิธีการใช้งาน
              </h2>
            </div>
            <div class="mt-4">
              <p class="text-gray-300 text-lg">
                <i class="fa-solid fa-play"></i>
                เมื่อกดปุ่มปั๊มน้ำจะทำงานโดยปล่อยลมไปดันน้ำในภาชนะทั้งสองขึ้น
                มาในปริมาณที่ได้กำหนดสัดส่วนไว้ด้วยเวลาที่ได้ออกแบบไว้ใน โปรแกรม
                โดยสามารถนำมาประยุกต์ใช้กับการชงเครื่องดื่ม หรือ
                การรดน้ำต้นไม้การทำสวนได้
              </p>
            </div>
          </div>
        </div>
        <div class="w-1/2">
          <img
            src="assets/images/image 2.png"
            alt="Automatic Blending Machine"
            class="w-full"
          />
        </div>
      </div>
      <div class="mt-20 flex justify-center pb-4">
        <a
          href="index.html"
          class="flex items-center justify-center w-12 h-12 bg-orange-600 hover:bg-orange-500 text-white rounded-full shadow-[0_0_15px_rgba(234,88,12,0.5)] hover:shadow-[0_0_20px_rgba(234,88,12,0.8)] transition-all hover:-translate-y-1"
        >
          <i class="fa-solid fa-chevron-left text-xl font-bold pr-1"></i>
        </a>
      </div>
    </main>

    <!-- Footer Area -->
    <?php include 'footer.php'; ?>


    <script src="js/script.js"></script>
      <!-- Floating Action Button -->
    <?php include 'floating-btn.php'; ?>

  </body>
</html>
