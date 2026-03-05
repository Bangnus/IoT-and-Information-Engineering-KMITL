<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admission - Department of IoT and Information Engineering</title>
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

  <!-- Main Content for Admission -->
  <main class="w-full pb-16 min-h-[50vh] flex flex-col items-center">
    <!-- Top Admission Banner Full Width -->
    <div 
      class="w-full bg-orange-gradient py-4 text-center shadow-md mt-10 mb-12">
      <h1 class="text-xl md:text-3xl font-bold text-white drop-shadow-md tracking-widest uppercase">
        Admission
      </h1>
    </div>

    <div class="max-w-4xl w-full px-4 sm:px-1 lg:px-2">
      <!-- TCAS 69 Calendar Section -->
      <div data-aos="fade-up" data-aos-duration="1000" class="mb-16 w-full mt-4">
        <h2 class="text-2xl md:text-3xl font-bold text-orange-500 mb-6 text-center drop-shadow-md">
          <i class="fa-regular fa-calendar-days mr-3 text-white"></i> ปฏิทินรับสมัคร TCAS 69
        </h2>

        <div
          class="bg-gradient-to-br from-[#1a0a04] to-black border-2 border-orange-500/30 p-4 md:p-6 rounded-3xl shadow-[0_15px_40px_rgba(234,88,12,0.15)] relative overflow-hidden group">
          <!-- Decorative Background Glow -->
          <div class="absolute top-0 right-0 w-64 h-64 bg-orange-600/10 blur-[80px] rounded-full pointer-events-none">
          </div>

          <!-- Image of the TCAS schedule -->


          <!-- Add to Calendar overlays / Buttons below -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 relative z-10 w-full">
            <!-- TCAS 1 Portfolio -->
            <button type="button" onclick="openModal('modal-tcas1')"
              class="flex items-center justify-center bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-500 hover:to-amber-600 text-white font-bold py-3 md:py-4 px-4 rounded-xl shadow-[0_0_15px_rgba(217,119,6,0.3)] transition-all hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(245,158,11,0.5)] border border-amber-500/30 w-full cursor-pointer">
              <i class="fa-regular fa-calendar-plus mr-2 text-xl"></i> แจ้งเตือน (Portfolio)
            </button>

            <!-- TCAS 2 Quota -->
            <button type="button" onclick="openModal('modal-tcas2')"
              class="flex items-center justify-center bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-500 hover:to-orange-600 text-white font-bold py-3 md:py-4 px-4 rounded-xl shadow-[0_0_15px_rgba(234,88,12,0.3)] transition-all hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(249,115,22,0.5)] border border-orange-500/30 w-full cursor-pointer">
              <i class="fa-regular fa-calendar-plus mr-2 text-xl"></i> แจ้งเตือน (Quota)
            </button>

            <!-- TCAS 3 Admission -->
            <button type="button" onclick="openModal('modal-tcas3')"
              class="flex items-center justify-center bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-white font-bold py-3 md:py-4 px-4 rounded-xl shadow-[0_0_15px_rgba(220,38,38,0.3)] transition-all hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(239,68,68,0.5)] border border-red-500/30 w-full cursor-pointer">
              <i class="fa-regular fa-calendar-plus mr-2 text-xl"></i> แจ้งเตือน (Admission)
            </button>
          </div>

          <p class="text-center text-gray-400 text-xs md:text-sm mt-6 font-light">
            * กดที่ปุ่มด้านบนเพื่อบันทึกคอยแจ้งเตือนวัน <b class="text-orange-400 font-semibold">"ยืนยันสิทธิ์"</b>
            ลงในแอป Calendar บนมือถือของคุณ
          </p>
        </div>
      </div>

      <!-- 3 Icons Rows -->
      <div data-aos="fade-up" data-aos-duration="1000"
        class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-12 mb-16 bg-[#140b08] p-8 md:p-10 rounded-2xl border border-orange-500/20 shadow-2xl relative overflow-hidden">
        <!-- Decorative Background Glow -->
        <div
          class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] h-[80%] bg-orange-600/5 blur-[100px] rounded-full point-events-none">
        </div>

        <div
          class="flex items-center w-full md:w-auto group hover:scale-105 transition-transform duration-300 z-10 cursor-default">
          <div
            class="w-14 h-14 md:w-16 md:h-16 border border-orange-500/30 rounded-xl flex items-center justify-center bg-gradient-to-br from-gray-800 to-black shadow-[0_0_15px_rgba(234,88,12,0.15)] group-hover:shadow-[0_0_20px_rgba(234,88,12,0.4)] group-hover:border-orange-400 transition-all mr-5 shrink-0">
            <i
              class="fa-solid fa-address-card text-2xl md:text-3xl text-orange-200 group-hover:text-white transition-colors"></i>
          </div>
          <div>
            <p
              class="text-orange-500 font-bold text-base md:text-lg tracking-wider uppercase group-hover:text-orange-400 transition-colors">
              PORTFOLIO
            </p>
            <p class="text-gray-400 text-xs md:text-sm font-light uppercase tracking-widest mt-0.5">
              รับสมัคร 75 คน
            </p>
          </div>
        </div>

        <!-- Divider -->
        <div class="hidden md:block w-px h-16 bg-gradient-to-b from-transparent via-orange-500/30 to-transparent z-10">
        </div>
        <div class="md:hidden h-px w-3/4 bg-gradient-to-r from-transparent via-orange-500/30 to-transparent z-10"></div>

        <div
          class="flex items-center w-full md:w-auto group hover:scale-105 transition-transform duration-300 z-10 cursor-default">
          <div
            class="w-14 h-14 md:w-16 md:h-16 border border-orange-500/30 rounded-xl flex items-center justify-center bg-gradient-to-br from-gray-800 to-black shadow-[0_0_15px_rgba(234,88,12,0.15)] group-hover:shadow-[0_0_20px_rgba(234,88,12,0.4)] group-hover:border-orange-400 transition-all mr-5 shrink-0">
            <i
              class="fa-solid fa-users text-2xl md:text-3xl text-orange-200 group-hover:text-white transition-colors"></i>
          </div>
          <div>
            <p
              class="text-orange-500 font-bold text-base md:text-lg tracking-wider uppercase group-hover:text-orange-400 transition-colors">
              QUOTA
            </p>
            <p class="text-gray-400 text-xs md:text-sm font-light uppercase tracking-widest mt-0.5">
              รับสมัคร 15 คน
            </p>
          </div>
        </div>

        <!-- Divider -->
        <div class="hidden md:block w-px h-16 bg-gradient-to-b from-transparent via-orange-500/30 to-transparent z-10">
        </div>
        <div class="md:hidden h-px w-3/4 bg-gradient-to-r from-transparent via-orange-500/30 to-transparent z-10"></div>

        <div
          class="flex items-center w-full md:w-auto group hover:scale-105 transition-transform duration-300 z-10 cursor-default">
          <div
            class="w-14 h-14 md:w-16 md:h-16 border border-orange-500/30 rounded-xl flex items-center justify-center bg-gradient-to-br from-gray-800 to-black shadow-[0_0_15px_rgba(234,88,12,0.15)] group-hover:shadow-[0_0_20px_rgba(234,88,12,0.4)] group-hover:border-orange-400 transition-all mr-5 shrink-0">
            <i
              class="fa-solid fa-file-signature text-2xl md:text-3xl text-orange-200 group-hover:text-white transition-colors"></i>
          </div>
          <div>
            <p
              class="text-orange-500 font-bold text-base md:text-lg tracking-wider uppercase group-hover:text-orange-400 transition-colors">
              ADMISSION
            </p>
            <p class="text-gray-400 text-xs md:text-sm font-light uppercase tracking-widest mt-0.5">
              รับสมัคร 5 คน
            </p>
          </div>
        </div>
      </div>

      <!-- Course Introduction & Image Box -->
      <div data-aos="fade-up" data-aos-duration="1000"
        class="flex flex-col items-center justify-center md:flex-row w-full bg-[#25150e] rounded-2xl overflow-hidden shadow-2xl mb-16 border border-orange-900/40">
        <!-- Left Text -->
        <div
          class="w-full md:w-1/2 flex flex-col justify-center p-8 md:p-12 lg:p-10 text-sm md:text-base text-gray-300 leading-relaxed font-light">
          <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">
            รายละเอียดหลักสูตร
          </h2>
          <div class="space-y-1">
            <div class="text-orange-500 font-bold mt-2 text-lg">
              ชื่อหลักสูตร
            </div>
            <p class="text-gray-300">วศ.บ. วิศวกรรมระบบไอโอทีและสารสนเทศ</p>
          </div>
          <div class="space-y-1 bg-">
            <div class="text-orange-500 font-bold mt-2 text-lg">
              ชื่อหลักสูตรภาษาอังกฤษ
            </div>
            <p class="text-gray-300">
              B.Eng. IoT system and Information Engineering
            </p>
          </div>
          <div class="space-y-1">
            <div class="text-orange-500 font-bold mt-2 text-lg">
              ประเภทหลักสูตร
            </div>
            <p class="text-gray-300">ภาษาไทย ปกติ</p>
          </div>
          <div class="space-y-1">
            <div class="text-orange-500 font-bold mt-2 text-lg">วิทยาเขต</div>
            <p class="text-gray-300">ลาดกระบัง</p>
          </div>
          <div class="space-y-1">
            <div class="text-orange-500 font-bold mt-2 text-lg">
              ค่าใช้จ่ายตลอดหลักสูตร
            </div>
            <p class="text-gray-300">ค่าธรรมเนียมการศึกษา 25,000 บาท</p>
          </div>
        </div>

        <!-- Right Image -->
        <div class="w-full md:w-1/2 hidden md:block relative flex items-center justify-center p-6 md:p-10 shrink-0">
          <!-- Nested dark rounded container for image as seen in screenshot -->
          <div
            class="w-full aspect-square rounded-2xl overflow-hidden relative shadow-[0_0_30px_rgba(234,88,12,0.15)] border border-orange-900/40">
            <img src="assets/images/Circuit.png" alt="Circuit Background"
              class="absolute inset-0 w-full h-full object-cover mix-blend-lighten" />
          </div>
        </div>
      </div>

      <!-- ROUND 1 PORTFOLIO SECTIONS -->
      <details data-aos="fade-up" data-aos-duration="800" class="group w-full mb-8" open>
        <summary
          class="bg-[#d26b32] hover:bg-[#c26224] text-white font-bold text-sm md:text-base py-4 px-6 rounded-lg group-open:rounded-b-none border border-orange-600/50 flex items-center shadow-lg transition-all cursor-pointer list-none appearance-[none] outline-none focus:outline-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:rotate-180"></i>
          <span class="text-xl md:text-2xl tracking-wider uppercase">รอบที่ 1 PORTFOLIO</span>
        </summary>

        <div
          class="space-y-12 w-full bg-[#25150e] border border-[#d26b32]/50 border-t-0 p-6 md:p-8 rounded-b-lg shadow-xl">
          <!-- Block 1 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โครงการ Young Engineering Talent
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรอาชีวะ</li>
                <li>
                  ผู้สมัครจะต้องมีผลการเรียนเฉลี่ยสะสมรวมอย่างน้อย 5
                  ภาคการศึกษา ไม่น้อยกว่า 3.50
                </li>
                <li>
                  เป็นผู้ที่เคยได้รับรางวัลการแข่งขันในระดับชาติหรือระดับนานาชาติอย่างน้อย
                  1 รายการ ทางด้านคณิตศาสตร์ - วิทยาศาสตร์ - เทคโนโลยี
                  ที่เกี่ยวข้องกับสาขาวิชาที่สมัคร
                  ทั้งนี้ต้องเป็นงานที่จัดขึ้นโดยหน่วยงานซึ่งเป็นที่ยอมรับ
                  อย่างกว้างขวาง
                </li>
                <li>เป็นผู้ไม่มีโรคสำคัญที่เป็นอุปสรรคต่อการศึกษา</li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">30 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://admission.reg.kmitl.ac.th/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://admission.reg.kmitl.ac.th/#/</a>
              </div>
            </div>
          </div>

          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <!-- Block 2 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โครงการเรียนดี ช้างเผือก กลุ่มโรงเรียนสายสามัญ
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>
                  กำลังศึกษาอยู่ชั้น ม.6 หรือสำเร็จการศึกษา ม.6 หรือเทียบเท่า
                </li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>
                  โรงเรียนมีสิทธิ์เสนอชื่อนักเรียนได้ตามจํานวนและต้องให้นักเรียนที่มีผลการเรียนเฉลี่ยรวมอย่างน้อย
                  5 ภาคการศึกษา (ในระดับชั้นมัธยมศึกษาปีที่ 4-6) สูงที่สุด
                  ได้รับสิทธิ์ในการส่งรายชื่อก่อนเสมอ
                </li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">30 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>

          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <!-- Block 3 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โครงการรางวัลและประกาศนียบัตรทางวิชาการ
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>เป็นผู้ไม่มีโรคสำคัญที่เป็นอุปสรรคต่อการศึกษา</li>
                <li>
                  ผู้สมัครจะต้องมีผลการเรียนเฉลี่ยสะสมรวมอย่างน้อย 5
                  ภาคการศึกษา ไม่น้อยกว่า 3.00
                </li>
                <li>เป็นผู้ที่มีผลงาน รางวัล หรือประกาศนียบัตร</li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">30 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>

          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <!-- Block 4 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โครงการบุตรของบุคลากรสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>
                  เป็นผู้ที่กำลังศึกษาระดับชั้นมัธยมศึกษาปีที่ 6
                  (สายวิทยาศาสตร์ - คณิตศาสตร์)
                </li>
                <li>
                  ต้องมีผลการเรียนเฉลี่ยสะสมรวมอย่างน้อยรวม 5 ภาคการศึกษา
                  ไม่น้อยกว่า 2.75
                </li>
                <li>เป็นผู้ไม่มีโรคสำคัญที่เป็นอุปสรรคต่อการศึกษา</li>
                <li>
                  ผู้สมัครต้องเป็นบุตรโดยชอบด้วยกฎหมายของพนักงานสถาบัน
                  ข้าราชการ
                  หรือลูกจ้างประจำของสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบังเท่านั้น
                  ซึ่งยกเว้นบุตรบุญธรรม
                </li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">5 คน (ร่วมทุกหลักสูตร)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>
          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <!-- Block 4 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โครงการโรงเรียนทางวิทยาศาสตร์
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>เป็นผู้ไม่มีโรคสำคัญที่เป็นอุปสรรคต่อการศึกษา</li>
                <li>
                  ผู้สมัครจะต้องมีผลการเรียนเฉลี่ยสะสมรวมอย่างน้อย 5
                  ภาคการศึกษา ไม่น้อยกว่า 3.00
                </li>
                <li>
                  เป็นผู้ที่กำลังศึกษาระดับชั้นมัธยมศึกษาปีที่ 6
                  (สายวิทยาศาสตร์ – คณิตศาสตร์) ในโรงเรียนวิทยาศาสตร์
                  หรือโรงเรียนที่มีโครงการห้องเรียนพิเศษด้านวิทยาศาสตร์
                  คณิตศาสตร์
                  หรือโรงเรียนที่มีการจัดการเรียนสอนให้แก่ผู้มีความสามารถ
                  พิเศษด้านคณิตศาสตร์และวิทยาศาสตร์
                </li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">30 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>
          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <!-- Block 4 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โครงการการให้โควต้านักเรียน์ (สอวน.)
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>
                  สำเร็จการศึกษาหรือกำลังศึกษาระดับชั้นมัธยมศึกษาปีที่ 6
                  (สายวิทยาศาสตร์ - คณิตศาสตร์และแผนการเรียนศิลป์ - คำนวณ)
                </li>
                <li>
                  ต้องมีผลการเรียนเฉลี่ยสะสมรวมอย่างน้อยรวม 4 ภาคการศึกษา
                  ไม่น้อยกว่า 2.75
                </li>
                <li>เป็นผู้สำเร็จการอบรมค่าย 2 ของมูลนิธิ สอวน.</li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">40 คน (ร่วมทุกหลักสูตร)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>
          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <!-- Block 4 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โครงการ Engineering Pathway
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรอาชีวะ</li>
                <li>
                  เป็นผู้ที่เข้าร่วมเรียนในโครงการ Pre-Engineering School
                  ที่จัดโดยคณะวิศวกรรมศาสตร์ สจล.
                  และได้คะแนนเฉลี่ยสะสมรวมอย่างน้อย 3.5 จากการเรียน 6 วิชา
                </li>
                <li>เป็นผู้ไม่มีโรคสำคัญที่เป็นอุปสรรคต่อการศึกษา</li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">30 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>
        </div>
      </details>
      <!-- End Round 1 -->

      <!-- ROUND 2 QUOTA SECTIONS -->
      <details data-aos="fade-up" data-aos-duration="800" class="group w-full mb-8">
        <summary
          class="bg-[#d26b32] hover:bg-[#c26224] text-white font-bold text-sm md:text-base py-4 px-6 rounded-lg group-open:rounded-b-none border border-orange-600/50 flex items-center shadow-lg transition-all cursor-pointer list-none appearance-[none] outline-none focus:outline-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:rotate-180"></i>
          <span class="text-xl md:text-2xl tracking-wider uppercase">รอบที่ 2 QUOTA</span>
        </summary>

        <div
          class="space-y-12 w-full bg-[#25150e] border border-[#d26b32]/50 border-t-0 p-6 md:p-8 rounded-b-lg shadow-xl">
          <!-- Block 1 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โควตาเรียนดี
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรอาชีวะ</li>
                <li>
                  มีผลการเรียนเฉลี่ยสะสมรวมอย่างน้อยรวม 5 ภาคการศึกษา
                  ไม่น้อยกว่า 3.00
                </li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">15 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>

          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โควตากิจกรรม K-engineering
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรอาชีวะ</li>
                <li>
                  มีผลการเรียนเฉลี่ยสะสมรวมอย่างน้อยรวม 5 ภาคการศึกษา
                  ไม่น้อยกว่า 2.75
                </li>
                <li>
                  เป็นผู้ที่ผ่านการเข้าร่วมกิจกรรมและได้รับประกาศนียบัตรในโครงการทางวิชาการกับ
                  คณะ วิศวกรรมศาสตร์ สจล.
                </li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">15 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>
          <!-- Divider -->
          <hr class="border-gray-800 w-3/4 mx-auto" />

          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              โควตากิจกรรม K-engineering
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรอาชีวะ</li>
                <li>
                  มีผลการเรียนเฉลี่ยสะสมรวม 5 ภาคการศึกษา มากกว่า 3.00
                  หรือมากกว่า 2.75 สำหรับผู้สมัครโครงการ K-Engineering
                </li>
              </ul>

              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">15 คน (รับร่วมกัน)</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400">รายละเอียดเพิ่มเติม</p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>
        </div>
      </details>
      <!-- End Round 2 -->

      <!-- ROUND 3 ADMISSION SECTIONS -->
      <details data-aos="fade-up" data-aos-duration="800" class="group w-full mb-8">
        <summary
          class="bg-[#d26b32] hover:bg-[#c26224] text-white font-bold text-sm md:text-base py-4 px-6 rounded-lg group-open:rounded-b-none border border-orange-600/50 flex items-center shadow-lg transition-all cursor-pointer list-none appearance-[none] outline-none focus:outline-none">
          <i class="fa-solid fa-chevron-down mr-4 transition-transform duration-300 group-open:rotate-180"></i>
          <span class="text-xl md:text-2xl tracking-wider uppercase">รอบที่ 3 ADMISSION</span>
        </summary>

        <div
          class="space-y-12 w-full bg-[#25150e] border border-[#d26b32]/50 border-t-0 p-6 md:p-8 rounded-b-lg shadow-xl">
          <!-- Block 1 -->
          <div>
            <div
              class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-bold py-2 px-6 rounded-r-full inline-block mb-6 shadow-md border-l-4 border-orange-300">
              Admission
            </div>

            <div class="px-4 text-sm md:text-base">
              <p class="font-bold text-orange-400 mb-2">คุณสมบัติ</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ</li>
                <li>รับผู้สมัครที่จบจาก รร. หลักสูตรอาชีวะ</li>
              </ul>
              <p class="font-bold text-orange-400 mb-2">เงื่อนไขการรับ</p>
              <p class="text-gray-300 mb-6">
                กำลังศึกษาหรือสำเร็จการศึกษาระดับมัธยมศึกษาตอนปลายสาย
                วิทย์-คณิต หรือประกาศนียบัตรวิชาชีพ (ปวช.) สายช่างอุตสาหกรรม
                ผู้สมัครต้องมีคะแนน TGAT , TPAT3 , A-level Math 1 และ Physics
              </p>
              <p class="font-bold text-orange-400 mb-2">การคำนวณคะแนน</p>
              <ul class="list-disc list-inside text-gray-300 space-y-1 mb-6 font-light pl-2 marker:text-orange-500">
                <li>ความถนัดทั่วไป (TGAT) * 20%</li>
                <li>
                  ความถนัดวิทยาศาสตร์ เทคโนโลยี วิศวกรรมศาสตร์ (TPAT3) * 25%
                </li>
                <li>
                  A-Level คณิตศาสตร์ประยุกต์ 1 (พื้นฐาน+เพิ่มเติม) * 25%
                </li>
                <li>A-Level ฟิสิกส์ 1 (พื้นฐาน+เพิ่มเติม) * 30%</li>
              </ul>
              <div class="flex items-baseline mb-4 gap-2">
                <p class="font-bold text-orange-400">จำนวนที่เปิดรับ</p>
                <p class="text-white">5 คน</p>
              </div>

              <div class="flex items-baseline gap-2">
                <p class="font-bold text-orange-400 shrink-0">
                  รายละเอียดเพิ่มเติม
                </p>
                <a href="https://new.reg.kmitl.ac.th/admission/#/" target="_blank"
                  class="text-gray-300 hover:text-white underline decoration-gray-500 underline-offset-4 break-all">https://new.reg.kmitl.ac.th/admission/#/</a>
              </div>
            </div>
          </div>
        </div>
      </details>
      <!-- End Round 3 -->
    </div>

    <!-- Modals for TCAS Add to Calendar -->
    <?php include 'calendar-modals.php'; ?>

    <!-- Scroll to Top Icon -->
    <div class="flex justify-center items-center animate-bounce mt-8">
      <a href="#" id="scrollToTopBtn"
        class="flex items-center justify-center w-12 h-12 bg-orange-600 hover:bg-orange-500 text-white rounded-full shadow-[0_0_15px_rgba(234,88,12,0.5)] hover:shadow-[0_0_20px_rgba(234,88,12,0.8)] transition-all hover:-translate-y-1"
        aria-label="Scroll to top">
        <i class="fa-solid fa-arrow-up text-xl"></i>
      </a>
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