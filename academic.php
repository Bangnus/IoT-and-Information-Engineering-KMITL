<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Academic - Department of IoT and Information Engineering</title>
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

  <!-- Main Content for Academic -->
  <main class="w-full py-12 md:py-16 min-h-[50vh]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-4">
      <!-- 1. IoT Program Overview -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#1a0e0a]">
        <summary
          class="bg-gradient-to-r from-[#d26b32] to-[#c26224] hover:from-[#e47636] hover:to-[#d26b32] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center shadow-lg transition-all cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          Bachelor of Engineering (IoT System and Information)
        </summary>
        <div class="p-6 md:p-8">
          <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-5/12 flex flex-col gap-4 shrink-0">
              <img src="assets/images/image16.png" alt="Classroom Lecture"
                class="rounded-lg object-cover h-40 md:h-48 w-full border border-gray-800 shadow-md" />
              <img src="assets/images/image17.png" alt="Classroom Students"
                class="rounded-lg object-cover h-40 md:h-48 w-full border border-gray-800 shadow-md" />
            </div>
            <div class="w-full md:w-7/12 flex flex-col justify-center text-left">
              <h3 class="font-bold text-white text-lg md:text-xl mb-3">
                ทำไมต้อง
                <span class="tracking-wide text-orange-400">IoT</span>
                ลาดกระบัง?
              </h3>
              <p class="mb-8 text-[15px] md:text-base text-gray-300 font-normal leading-[1.8] text-pretty">
                หลักสูตรวิศวกรรมระบบไอโอทีและสารสนเทศ
                มุ่งพัฒนานักศึกษาให้เข้าใจและเชื่อมโลกดิจิทัลอย่างครบวงจร
                ครอบคลุมทั้ง ซอฟต์แวร์ (การเขียนโปรแกรม พัฒนาแอป) ฮาร์ดแวร์
                (อุปกรณ์อัจฉริยะ สมาร์ทเซ็นเซอร์) เครือข่ายและการสื่อสาร
                รวมถึง AI และวิทยาการข้อมูล
                นำความรู้มาผสานกับหลักวิศวกรรมและคณิตศาสตร์
                เพื่อสร้างนวัตกรรมที่ใช้งานได้จริงในภาคอุตสาหกรรม
                พร้อมต่อยอดสู่การทำ สตาร์ทอัปและธุรกิจของตนเองได้
              </p>
              <a href="assets/pdf/เอกสารหลักสูตรสาขาวิศวกรรมระบบไอโอทีและสารสนเทศ.pdf" target="_blank"
                class="inline-flex items-center bg-[#bd5c27] hover:bg-[#a64e1d] text-white py-3 md:py-4 px-4 md:px-5 rounded-lg text-sm md:text-base transition-colors w-full shadow-lg border border-orange-400/20">
                <i class="fa-regular fa-file-lines text-3xl md:text-4xl mr-4 opacity-90"></i>
                <span class="font-bold leading-tight">หลักสูตรวิศวกรรมศาสตรบัณฑิต<br
                    class="hidden sm:block" />สาขาวิชาวิศวกรรมระบบไอโอทีและสารสนเทศ</span>
              </a>
            </div>
          </div>
          <div
            class="relative w-full rounded-xl overflow-hidden shadow-2xl h-56 md:h-72 border border-orange-900/50 flex shrink-0 mt-8">
            <img src="assets/images/image18.png" alt="Raspberry Pi Board"
              class="absolute inset-0 w-full h-full object-cover" />
          </div>
        </div>
      </details>

      <!-- 2. เอกสารหลักสูตร IoT -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#1a0e0a]">
        <summary
          class="bg-gradient-to-r from-[#d26b32] to-[#c26224] hover:from-[#e47636] hover:to-[#d26b32] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center shadow-lg transition-all cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          <span>เอกสารหลักสูตรสาขาวิชาวิศวกรรมระบบไอโอทีและสารสนเทศ</span>
        </summary>
        <div class="bg-white p-8 md:p-12 md:px-20 text-gray-800 flex flex-col items-center w-full">
          <div class="w-full text-sm md:text-base leading-relaxed">
            <p class="font-bold text-gray-900 mb-3 text-lg md:text-xl">
              ชื่อหลักสูตร
            </p>
            <div
              class="grid grid-cols-[110px_1fr] md:grid-cols-[140px_1fr] gap-x-2 gap-y-2 mb-8 ml-2 md:ml-4 font-medium">
              <p class="text-gray-600">ชื่อภาษาไทย</p>
              <p class="text-gray-800 font-normal">
                หลักสูตรวิศวกรรมศาสตรบัณฑิต
                สาขาวิชาวิศวกรรมระบบไอโอทีและสารสนเทศ
              </p>
              <p class="text-gray-600">ชื่อภาษาอังกฤษ</p>
              <p class="text-gray-800 font-normal">
                Bachelor of Engineering Program in IoT System and Information
                Engineering
              </p>
            </div>
            <p class="font-bold text-gray-900 mb-3 text-lg md:text-xl">
              ชื่อปริญญาและสาขาวิชา
            </p>
            <div
              class="grid grid-cols-[60px_100px_15px_1fr] md:grid-cols-[70px_110px_20px_1fr] gap-y-1 ml-2 md:ml-4 items-start font-medium leading-loose">
              <p class="text-gray-800 whitespace-nowrap">ชื่อเต็ม</p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วิศวกรรมศาสตรบัณฑิต (วิศวกรรมระบบไอโอทีและสารสนเทศ)
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                Bachelor of Engineering (IoT System and Information
                Engineering)
              </p>
              <div class="col-span-4 h-2"></div>
              <p class="text-gray-800 whitespace-nowrap">ชื่อย่อ</p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วศ.บ. (วิศวกรรมระบบไอโอทีและสารสนเทศ)
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                B.Eng. (IoT system and Information Engineering)
              </p>
            </div>
          </div>
        </div>
      </details>

      <!-- 3. แผนการศึกษา IoT -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#1a0e0a]">
        <summary
          class="bg-gradient-to-r from-[#d26b32] to-[#c26224] hover:from-[#e47636] hover:to-[#d26b32] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center shadow-lg transition-all cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          <span>แผนการศึกษา : หลักสูตรวิศวกรรมระบบไอโอทีและสารสนเทศ (ปรับปรุง
            พ.ศ. 2565)</span>
        </summary>
        <div class="bg-white p-4 md:p-8 text-gray-800 flex flex-col items-center w-full">
          <img src="assets/images/image20.png" alt="Study Plan" class="w-full h-auto" />
        </div>
      </details>

      <!-- Divider -->
      <div class="my-4"></div>

      <!-- 4. Dual Degree Overview -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#140804]">
        <summary
          class="bg-gradient-to-r from-[#d26b32] to-[#c26224] hover:from-[#e47636] hover:to-[#d26b32] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center shadow-lg transition-all cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          <span>Dual Degree (B.Eng. IoT System and Information + B.Sc. Industrial
            Physics)</span>
        </summary>
        <div class="flex flex-col">
          <img src="assets/images/image21.png" alt="Dual Degree Banner" class="w-full" />

          <!-- Action Grid Buttons -->
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 p-6 md:p-8 bg-[#140804]">
            <!-- Button 1 -->
            <div
              class="bg-[#e47636] hover:bg-[#c66228] text-white flex flex-col items-center justify-center p-6 rounded-[2rem] aspect-square text-center shadow-[0_4px_15px_rgba(210,107,50,0.2)] transition-transform hover:-translate-y-1 group border border-orange-500/20 cursor-default">
              <div
                class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center mb-4 text-[#e47636] text-[2.5rem] md:text-[3rem] font-black group-hover:scale-110 transition-transform shadow-inner">
                ?
              </div>
              <span class="font-bold text-[13px] md:text-sm leading-snug">สองปริญญาคืออะไร ?</span>
            </div>

            <!-- Button 2 -->
            <div
              class="bg-[#e47636] hover:bg-[#c66228] text-white flex flex-col items-center justify-center p-6 rounded-[2rem] aspect-square text-center shadow-[0_4px_15px_rgba(210,107,50,0.2)] transition-transform hover:-translate-y-1 group border border-orange-500/20 cursor-default">
              <div
                class="w-16 h-16 md:w-20 md:h-20 bg-transparent flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-transform">
                <svg class="w-14 h-14 md:w-16 md:h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  stroke-width="1.2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h10l6 6v10a2 2 0 0 1-2 2z" />
                  <polyline points="15 4 15 10 21 10" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                  <circle cx="11" cy="11" r="3.5" stroke-linecap="round" stroke-linejoin="round" />
                  <line x1="13.5" y1="13.5" x2="17" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <span class="font-bold text-[13px] md:text-sm leading-snug">รายละเอียดหลักสูตร</span>
            </div>

            <!-- Button 3 -->
            <div
              class="bg-[#e47636] hover:bg-[#c66228] text-white flex flex-col items-center justify-center p-6 rounded-[2rem] aspect-square text-center shadow-[0_4px_15px_rgba(210,107,50,0.2)] transition-transform hover:-translate-y-1 group border border-orange-500/20 cursor-default">
              <div
                class="w-16 h-16 md:w-20 md:h-20 bg-transparent flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-transform">
                <svg class="w-14 h-14 md:w-16 md:h-16" viewBox="0 0 24 24" fill="white">
                  <path d="M5 4h10l6 6v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm10 1.5V11h5.5L15 5.5z" />
                  <circle cx="8" cy="11" r="1.5" fill="#e47636" />
                  <circle cx="8" cy="15" r="1.5" fill="#e47636" />
                  <circle cx="8" cy="19" r="1.5" fill="#e47636" />
                </svg>
              </div>
              <span class="font-bold text-[13px] md:text-sm leading-snug">ข้อมูลสรุปหลักสูตร</span>
            </div>

            <!-- Button 4 -->
            <div
              class="bg-[#e47636] hover:bg-[#c66228] text-white flex flex-col items-center justify-center p-6 rounded-[2rem] aspect-square text-center shadow-[0_4px_15px_rgba(210,107,50,0.2)] transition-transform hover:-translate-y-1 group border border-orange-500/20 cursor-default">
              <div
                class="w-16 h-16 md:w-20 md:h-20 bg-transparent flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-transform">
                <svg class="w-14 h-14 md:w-16 md:h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  stroke-width="1.2">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-linecap="round" stroke-linejoin="round">
                  </rect>
                  <line x1="16" y1="2" x2="16" y2="6" stroke-linecap="round" stroke-linejoin="round"></line>
                  <line x1="8" y1="2" x2="8" y2="6" stroke-linecap="round" stroke-linejoin="round"></line>
                  <line x1="3" y1="10" x2="21" y2="10" stroke-linecap="round" stroke-linejoin="round"></line>
                  <path d="M9 16l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <span class="font-bold text-[13px] md:text-sm leading-snug">แผนการเรียน</span>
            </div>
          </div>
        </div>
      </details>

      <!-- 5. สองปริญญาคืออะไร ? -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#140804]">
        <summary
          class="bg-[#e47636] hover:bg-[#c66228] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center transition-colors cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          <span>สองปริญญาคืออะไร ?</span>
        </summary>
        <div class="bg-white p-8 md:p-12 md:px-20 text-gray-800 flex flex-col items-center w-full">
          <a href="assets/pdf/เอกสารโครงการหลักสูตรควบระดับปริญญาตรี 2 ปริญญา.pdf" target="_blank"
            class="bg-white rounded-[2rem] py-3 px-8 md:px-12 mb-10 text-base md:text-xl font-bold border-4 border-[#fbbf24] shadow-sm text-center text-gray-800 w-fit shrink-0 tracking-wide hover:bg-yellow-50 transition-colors block mx-auto hover:shadow-md cursor-pointer">
            เอกสารโครงการหลักสูตรควบระดับปริญญาตรี 2 ปริญญา
          </a>
          <div class="w-full text-sm md:text-base leading-relaxed">
            <p class="font-bold text-gray-900 mb-3 text-lg md:text-xl">
              ปริญญาที่หนึ่ง
            </p>
            <div
              class="grid grid-cols-[80px_100px_15px_1fr] md:grid-cols-[100px_110px_20px_1fr] gap-y-1 ml-2 md:ml-6 mb-8 items-start font-medium">
              <p class="text-gray-800 font-bold whitespace-nowrap">
                ชื่อเต็ม
              </p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมระบบไอโอทีและสารสนเทศ
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                Bachelor of Engineering (IoT System and Information
                Engineering)
              </p>
              <div class="col-span-4 h-2"></div>
              <p class="text-gray-800 font-bold whitespace-nowrap">ชื่อย่อ</p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วศ.บ. (วิศวกรรมระบบไอโอทีและสารสนเทศ)
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                B.Eng. (IoT System and Information Engineering)
              </p>
            </div>
            <p class="font-bold text-gray-900 mb-3 text-lg md:text-xl">
              ปริญญาที่สอง
            </p>
            <div
              class="grid grid-cols-[80px_100px_15px_1fr] md:grid-cols-[100px_110px_20px_1fr] gap-y-1 ml-2 md:ml-6 items-start font-medium">
              <p class="text-gray-800 font-bold whitespace-nowrap">
                ชื่อเต็ม
              </p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วิทยาศาสตรบัณฑิต สาขาวิชาฟิสิกส์อุตสาหกรรม
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                Bachelor of Science (Industrial Physics)
              </p>
              <div class="col-span-4 h-2"></div>
              <p class="text-gray-800 font-bold whitespace-nowrap">ชื่อย่อ</p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วท.บ. (ฟิสิกส์อุตสาหกรรม)
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                B.Sc. (Industrial Physics)
              </p>
            </div>
          </div>
        </div>
      </details>

      <!-- 6. รายละเอียดหลักสูตร -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#140804]">
        <summary
          class="bg-[#e47636] hover:bg-[#c66228] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center transition-colors cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          <span>รายละเอียดหลักสูตร</span>
        </summary>
        <div class="bg-white p-8 md:p-12 md:px-20 text-gray-800 flex flex-col items-center w-full">
          <a href="assets/pdf/เอกสารรายละเอียดหลักสูตรวิศวกรรมระบบไอโอทีและสารสนเทศ.pdf" target="_blank"
            class="bg-white rounded-[2rem] py-3 px-8 md:px-8 mb-10 text-base md:text-xl font-bold border-4 border-[#fbbf24] shadow-sm text-center text-gray-800 w-fit shrink-0 tracking-wide hover:bg-yellow-50 transition-colors block mx-auto hover:shadow-md cursor-pointer">
            เอกสารรายละเอียดหลักสูตรวิศวกรรมระบบไอโอทีและสารสนเทศ
          </a>
          <div class="w-full text-sm md:text-base leading-relaxed">
            <p class="font-bold text-gray-900 mb-3 text-lg md:text-xl">
              ชื่อหลักสูตร
            </p>
            <div
              class="grid grid-cols-[110px_1fr] md:grid-cols-[140px_1fr] gap-x-2 gap-y-2 mb-8 ml-2 md:ml-4 font-medium">
              <p class="text-gray-600">ชื่อภาษาไทย</p>
              <p class="text-gray-800 font-normal">
                หลักสูตรวิศวกรรมศาสตรบัณฑิต
                สาขาวิชาวิศวกรรมระบบไอโอทีและสารสนเทศ
              </p>
              <p class="text-gray-600">ชื่อภาษาอังกฤษ</p>
              <p class="text-gray-800 font-normal">
                Bachelor of Engineering Program in IoT System and Information
                Engineering
              </p>
            </div>
            <p class="font-bold text-gray-900 mb-3 text-lg md:text-xl">
              ชื่อปริญญาและสาขาวิชา
            </p>
            <div
              class="grid grid-cols-[60px_100px_15px_1fr] md:grid-cols-[70px_110px_20px_1fr] gap-y-1 ml-2 md:ml-4 items-start font-medium leading-loose">
              <p class="text-gray-800 whitespace-nowrap">ชื่อเต็ม</p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วิศวกรรมศาสตรบัณฑิต (วิศวกรรมระบบไอโอทีและสารสนเทศ)
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                Bachelor of Engineering (IoT System and Information
                Engineering)
              </p>
              <div class="col-span-4 h-2"></div>
              <p class="text-gray-800 whitespace-nowrap">ชื่อย่อ</p>
              <p class="text-gray-600 text-left">(ภาษาไทย)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                วศ.บ. (วิศวกรรมระบบไอโอทีและสารสนเทศ)
              </p>
              <p></p>
              <p class="text-gray-600 text-left">(ภาษาอังกฤษ)</p>
              <p class="text-gray-600 text-center">:</p>
              <p class="text-gray-800 font-normal">
                B.Eng. (IoT system and Information Engineering)
              </p>
            </div>
          </div>
        </div>
      </details>

      <!-- 7. ข้อมูลสรุปหลักสูตร -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#140804]">
        <summary
          class="bg-[#e47636] hover:bg-[#c66228] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center transition-colors cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          <span>ข้อมูลสรุปหลักสูตร</span>
        </summary>
        <div class="bg-white p-4 md:p-8 text-gray-800 flex flex-col items-center w-full">
          <a href="assets/pdf/เอกสารข้อมูลสรุปหลักสูตร.pdf" target="_blank"
            class="bg-white rounded-[2rem] py-3 px-8 md:px-12 mb-10 text-base md:text-xl font-bold border-4 border-[#fbbf24] shadow-sm text-center text-gray-800 w-fit shrink-0 tracking-wide hover:bg-yellow-50 transition-colors block mx-auto hover:shadow-md cursor-pointer">
            เอกสารข้อมูลสรุปหลักสูตร
          </a>
          <img src="assets/images/image24.jpg" alt="Course Summary Information" class="w-full h-auto" />
        </div>
      </details>

      <!-- 8. แผนการเรียน Dual Degree -->
      <details data-aos="fade-up" data-aos-duration="800"
        class="group rounded-lg overflow-hidden border border-orange-600/50 shadow-xl bg-[#140804]">
        <summary
          class="bg-[#e47636] hover:bg-[#c66228] text-white font-bold text-sm md:text-base py-4 px-6 flex items-center transition-colors cursor-pointer list-none select-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:-rotate-180"></i>
          <span>แผนการศึกษา :
            หลักสูตรฟิสิกส์อุตสาหกรรมและวิศวกรรมระบบไอโอทีและสารสนเทศ(สองปริญญา)</span>
        </summary>
        <div class="bg-white p-4 md:p-8 text-gray-800 flex flex-col items-center w-full">
          <img src="assets/images/image25.png" alt="Study Plan Dual Degree" class="w-full h-auto" />
        </div>
      </details>
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