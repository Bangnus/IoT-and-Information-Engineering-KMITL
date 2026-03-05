<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <!DOCTYPE html>
    <html lang="th" class="scroll-smooth">

    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>
        Definition of Cybersecurity Laboratory - Department of IoT and Information
        Engineering
      </title>
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

  <!-- Main Content -->
  <main class="w-full pb-24 min-h-[70vh] flex flex-col items-center">
    <!-- Top Banner Full Width -->
    <div 
      class="w-full bg-orange-gradient py-4 text-center shadow-md mt-10 mb-10">
      <h1 class="text-xl md:text-3xl font-bold text-white drop-shadow-md tracking-wider px-4">
        Definition of Cybersecurity Laboratory
      </h1>
    </div>

    <div class="max-w-5xl w-full px-4 md:px-8">
      <div data-aos="fade-up" data-aos-duration="800"
        class="w-full bg-[#0a0502]/80 backdrop-blur-sm border border-orange-500/50 rounded-xl p-8 md:p-12 shadow-[0_0_25px_rgba(234,88,12,0.15)] relative">
        <h2 class="text-xl md:text-2xl font-bold text-white mb-8">
          Definition of Lab Security
        </h2>

        <div class="space-y-6 text-gray-200 text-sm md:text-base leading-relaxed font-light">
          <p>
            <strong>IT and IoT Cyber Security Laboratory</strong> is a
            dedicated environment where students, professionals, and
            researchers can practice and enhance their skills in defending
            against and analyzing cyber threats. These labs are equipped with
            tools and technologies that simulate real-world cyber attacks and
            defense strategies, allowing users to test their knowledge in a
            controlled, safe setting.
          </p>

          <p>Cyber security labs typically focus on two main areas:</p>

          <ul class="space-y-2">
            <li class="pl-4 relative">
              <span class="absolute left-0 top-0 text-gray-400">–</span>
              <strong>Defensive Security</strong>: This includes activities
              like setting up firewalls, intrusion detection systems,
              encryption methods, and network security configurations to
              protect against attacks.
            </li>
            <li class="pl-4 relative">
              <span class="absolute left-0 top-0 text-gray-400">–</span>
              <strong>Offensive Security</strong>: In this area, participants
              engage in ethical hacking and penetration testing to identify
              and exploit vulnerabilities in systems, websites, or networks,
              helping to build a deeper understanding of how attackers
              operate.
            </li>
          </ul>

          <p>
            A cyber security lab is essential for mastering both offensive and
            defensive techniques in the constantly evolving landscape of
            digital threats, making it a vital resource for cybersecurity
            education and skill development.
          </p>

          <p class="pt-2">
            The IT and IoT Cyber Security Laboratory consists of research in
            three main areas.
          </p>

          <ul class="space-y-1 pl-2">
            <li>1. Network Infrastructure, IoT and Wireless Security</li>
            <li>2. Cyber Security with AI Data analytics</li>
            <li>3. Penetration Testing and Cyber Attack</li>
          </ul>
        </div>

        <div class="flex justify-center mt-16 pb-4">
          <a href="performance.php"
            class="flex items-center justify-center w-12 h-12 bg-orange-600 hover:bg-orange-500 text-white rounded-full shadow-[0_0_15px_rgba(234,88,12,0.5)] hover:shadow-[0_0_20px_rgba(234,88,12,0.8)] transition-all hover:-translate-y-1">
            <i class="fa-solid fa-chevron-left text-xl font-bold pr-1"></i>
          </a>
        </div>
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