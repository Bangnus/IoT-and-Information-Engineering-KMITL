<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    About Dual Degree - Department of IoT and Information Engineering
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

  <!-- Main Content for About Us -->
  <main class="w-full py-16 min-h-[50vh]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Page Title -->
      <h1 data-aos="zoom-in" data-aos-duration="1000"
        class="text-3xl md:text-5xl font-bold text-white mb-12 drop-shadow-sm text-center">
        ABOUT US
      </h1>

      <!-- 3 Tabs Navigation -->
      <div data-aos="fade-up" data-aos-duration="800" class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-16">
        <a href="about.php"
          class="bg-black/60 text-gray-300 border border-orange-900/50 py-3 px-6 rounded text-center font-bold text-sm md:text-base hover:bg-orange-600 hover:text-white transition-colors">
          ABOUT IoT System and Information
        </a>
        <a href="about-dual-degree.php"
          class="bg-primary text-white py-3 px-6 rounded text-center font-bold text-sm md:text-base border border-orange-500 shadow-[0_0_15px_rgba(234,88,12,0.5)] cursor-default">
          ABOUT Dual Degree
        </a>
        <a href="about-industry-physics.php"
          class="bg-black/60 text-gray-300 border border-orange-900/50 py-3 px-6 rounded text-center font-bold text-sm md:text-base hover:bg-orange-600 hover:text-white transition-colors">
          ABOUT Industry Physics
        </a>
      </div>

      <!-- Section 1: Intro Card & 3 Feature Boxes -->
      <div data-aos="fade-up" data-aos-duration="1000" class="mb-16">
        <div
          class="border border-orange-900/50 rounded-xl p-6 md:p-10 shadow-[0_8px_30px_rgba(0,0,0,0.5)] bg-black/40 backdrop-blur-sm">
          <!-- Top Banner Label -->
          <div class="bg-orange-gradient py-4 px-6 md:px-6 rounded-lg mb-8 shadow-lg">
            <p class="text-sm md:text-base text-white text-center font-bold">
              ครั้งแรกของประเทศไทย โครงการหลักสูตรปริญญาตรีสองปริญญา (Dual
              Degree)
              ระหว่างคณะวิศวกรรมศาสตร์และคณะวิทยาศาสตร์สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
              ขับ.ค. วิศวกรรมระบบไอโอทีและสารสนเทศ และ วท.บ. ฟิสิกส์อุตสาหกรรม
            </p>
          </div>

          <!-- Intro Paragraph -->
          <div
            class="text-center text-sm md:text-base text-gray-300 leading-relaxed font-light mb-12 max-w-4xl mx-auto">
            <p>
              ในโลกยุค Disruption ได้เปลี่ยนแปลงทุกสิ่งไปอย่างรวดเร็ว
              การรู้เพียงศาสตร์ใดศาสตร์หนึ่งอาจไม่เพียงพอต่อการต่อสู้ในยุคแห่งการเปลี่ยนแปลงนี้แล้ว
              โดยเฉพาะอย่างยิ่งเทคโนโลยีแห่งอนาคตที่กำลังเป็นที่ต้องการ
              สถาบันจึงได้สร้างโครงการหลักสูตร "PhysIoT"
              ที่ตอบสนองต่อการเปลี่ยนแปลงในยุค Disruption
              นี้ขึ้นเพื่อผลิตบัณฑิตที่มีความรู้ความสามารถด้านวิทยาศาสตร์และวิศวกรรมศาสตร์ขับเคลื่อนประเทศชาติและสร้างนวัตกรรมเพื่อเป็นกำลังสำคัญให้ประเทศชาติต่อไปในอนาคต
              ตอบโจทย์ภาคอุตสาหกรรมในยุค Thailand 4.0 อุตสาหกรรม New S-Curve
              รวมทั้งอุตสาหกรรมแห่งอนาคต
            </p>
          </div>

          <!-- 3 Features Grid -->
          <div
            class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center max-w-4xl mx-auto border-t border-orange-900/30 pt-10">
            <!-- Feature 1 -->
            <div
              class="flex flex-col items-center border border-orange-900/30 p-6 rounded-xl hover:bg-orange-900/10 transition-colors">
              <div
                class="bg-orange-500 text-white rounded-full w-24 h-24 flex items-center justify-center text-4xl mb-6 shadow-[0_0_15px_rgba(234,88,12,0.5)]">
                <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <h3 class="font-bold text-white text-lg mb-4">
                เรียน 4 ปีได้ 2 ปริญญา
              </h3>
              <p class="text-sm text-gray-400 leading-relaxed font-light text-balance px-4">
                วศ.บ.วิศวกรรมระบบไอโอทีและสารสนเทศ<br />
                <span class="text-orange-500 font-bold mx-1">+</span><br />
                วท.บ. ฟิสิกส์อุตสาหกรรม
              </p>
            </div>

            <!-- Feature 2 -->
            <div
              class="flex flex-col items-center border border-orange-900/30 p-6 rounded-xl hover:bg-orange-900/10 transition-colors">
              <div
                class="bg-orange-500 text-white rounded-full w-24 h-24 flex items-center justify-center text-4xl mb-6 shadow-[0_0_15px_rgba(234,88,12,0.5)]">
                <i class="fa-solid fa-pen-ruler"></i>
              </div>
              <h3 class="font-bold text-white text-lg mb-4">
                ทลายกำแพงระหว่างคณะ
              </h3>
              <p class="text-sm text-gray-400 leading-loose font-light text-balance px-2">
                ศึกษาและปฏิบัติทางอิเล็กทรอนิกส์อัจฉริยะและสมาร์ทเซ็นเซอร์
                การออกแบบและควบคุมอุปกรณ์ทางฟิสิกส์ ที่เกี่ยวข้องกับวงจรไฟฟ้า
                อิเล็กทรอนิกส์ ระบบดิจิทัล และระบบสมองกลฝังตัว
              </p>
            </div>

            <!-- Feature 3 -->
            <div
              class="flex flex-col items-center border border-orange-900/30 p-6 rounded-xl hover:bg-orange-900/10 transition-colors">
              <div
                class="bg-orange-500 text-white rounded-full w-24 h-24 flex items-center justify-center text-4xl mb-6 shadow-[0_0_15px_rgba(234,88,12,0.5)]">
                <i class="fa-solid fa-mobile-alt"></i>
              </div>
              <h3 class="font-bold text-white text-lg mb-4">
                จบแล้วฮอตสุดไม่มีตกยุค
              </h3>
              <p class="text-sm text-gray-400 leading-loose font-light text-balance px-2">
                หากได้ลองค้นหาคำว่า "Top 10 อาชีพในอาเซียน"
                คุณต้องเจอกับอาชีพด้านไอโอทีอย่างแน่นอน
                เพราะเป็นสายงานที่มีความหลากหลายมากในยุคดิจิทัลไทยแลนด์ 4.0
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Section 2: Career Opportunities -->
      <div data-aos="flip-up" data-aos-duration="1000" class="mb-16">
        <div
          class="border border-orange-900/50 rounded-xl p-8 shadow-[0_8px_30px_rgba(0,0,0,0.5)] bg-black/40 backdrop-blur-sm flex flex-col justify-center items-center">
          <div class="text-orange-500 text-5xl mb-6">
            <i class="fa-solid fa-award"></i>
          </div>
          <h3
            class="text-xl md:text-2xl font-bold text-white mb-8 text-center border-b border-orange-900/50 pb-4 w-full max-w-2xl">
            อาชีพที่ประกอบได้หลังจบการศึกษา
          </h3>

          <ul class="text-sm md:text-base text-gray-300 space-y-3 list-disc pl-5 max-w-xl w-full text-left">
            <li>นักวิจัยในภาครัฐและเอกชน</li>
            <li>ผู้ประกอบการทางเทคโนโลยีวิศวกรรมไอโอที (IoT Engineer)</li>
            <li>วิศวกรซอฟต์แวร์ (Software Engineer)</li>
            <li>วิศวกรระบบสมองกลฝังตัว (Embedded Engineer)</li>
            <li>นักพัฒนาแอปพลิเคชัน (Application Developer)</li>
            <li>นักวิทยาการข้อมูล (Data Scientist)</li>
            <li>วิศวกรควบคุมคุณภาพ</li>
            <li>วิศวกรฝ่ายวิจัยและพัฒนา</li>
          </ul>
        </div>
      </div>

      <!-- Section 3: History / Background -->
      <div data-aos="fade-up" data-aos-duration="1000" class="mb-16">
        <div class="flex justify-center mb-6">
          <div class="bg-orange-gradient py-3 px-10 rounded-full shadow-lg border border-orange-500/30">
            <h2 class="text-xl md:text-2xl font-bold text-white text-center">
              ความเป็นมาของหลักสูตร
            </h2>
          </div>
        </div>

        <div
          class="border border-orange-900/50 rounded-xl p-6 md:p-10 shadow-[0_8px_30px_rgba(0,0,0,0.5)] bg-black/40 backdrop-blur-sm">
          <div class="space-y-4 text-xs md:text-sm text-gray-300 leading-relaxed font-light text-center">
            <p>
              ภาควิชาวิศวกรรมสารสนเทศ เป็นภาควิชาหนึ่งในคณะวิศวกรรมศาสตร์
              สถาบันเทคโนโลยีพระจอมเกล้า เจ้าคุณทหารลาดกระบัง
              เริ่มก่อตั้งจากสาขาวิชาเทคโนโลยีอุตสาหกรรม
              ซึ่งเปิดรับนักศึกษาในปี พ.ศ. 2517
              เป็นหลักสูตรอุตสาหกรรมศาสตรบัณฑิต
              ต่อมาได้เปลี่ยนโครงสร้างเป็นระดับปริญญาตรี
              จึงเป็นการสิ้นสุดการส่งหลักสูตรนี้ ต่อมาในปี พ.ศ. 2518
              ภาควิชาวิศวกรรม โทรคมนาคมได้มีการกำหนดลักษณะของวิชาและ
              สื่อสารเป็นภาควิชาวิศวกรโทรคมนาคม จนในปี 2518
              ก็มาเป็นภาควิชาวิศวกร โทรคมนาคม ซึ่งเดิมมีหลักสูตร
              แบะจัดการเรียนการสอนในสาขาวิศวกรรม คอมพิวเตอร์
              ได้รับความเห็นชอบจากสภา สถาบัน ในปี 2527 รับนักศึกษารุ่นแรกในปี
              2528 ภาควิชาได้ปรับปรุงหลักสูตรการเรียน การสอน ให้สอดคล้อง
              แผนพัฒนาเศรษฐกิจและสังคมแห่งชาติ
              และสภาสถาบันได้อนุมัติให้มีการจัดตั้ง ภาควิชาวิศวกรรมสารสนเทศ
              ตามพระราชกฤษฎีกา แบ่งส่วนราชการ สถาบันเทคโนโลยีพระจอมเกล้า
              และในปี พ.ศ. 2541
              ได้เปลี่ยนชื่อหลักสูตรให้เป็นหลักสูตรวิศวกรรมศาสตรบัณฑิต
              และปรับชื่อนักศึกษาที่เข้าสอบโครงการ ปรังปรุงหลักสูตร
              ให้เปิดการเรียนการสอน แบบเป็นหลักสูตร 4 ปี
              โดยเป็นการควบรวมเป็นสาขาวิศวกรรม สารสนเทศ 4 ปี
              โดยจัดสาขาวิชานี้เป็นการศึกษาหลักสูตรวิศวกรรมสารสนเทศ
              เป็นส่วนหนึ่งในการผลิต บัณฑิต ที่สาขาวิชา
              เกี่ยวข้องกับเครื่องมือ หลักสูตร โครงการเปลี่ยนชื่อหลักสูตร
              และปรับปรุงหลักสูตร ภาควิชาวิศวกรรมสารสนเทศ คณะวิศวกรรมศาสตร์ :
              2540 - 2544
            </p>
            <p>
              ในวันที่ 6 พฤศจิกายน 2544 ได้รับการประกาศจากราชกิจจานุเบกษาฉบับ
              ให้เปลี่ยนชื่อ "ภาควิชาวิศวกรรมสารสนเทศ" คณะวิศวกรรมศาสตร์
              สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
              รูปแบบโครงสร้างหลักสูตรภาควิชาวิศวกรรมสารสนเทศ ใหม่ในปี พ.ศ.
              2544
              ซึ่งเป็นการผลิตบัณฑิตวิศวกรรมสารสนเทศที่ต้องมีความรู้ครอบคลุมทั้งวิศวกรรม
              คอมพิวเตอร์ คมนาคม อิเล็กทรอนิกส์ การจัดการข้อมูล
              เพื่อรองรับความต้องการของตลาดแรงงานในสาขาวิชา เทคโนโลยีสารสนเทศ
              (IT) และพร้อมรับกับการเปลี่ยนแปลงระบบการศึกษาแบบใหม่
              ซึ่งมุ่งเน้นการนำสื่อ เทคโนโลยี
              มาใช้ประกอบการเรียนการสอนในทุกรูปแบบ และเพื่อตอบสนอง
              นโยบายของกระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม
              และสภาวิชาชีพวิศวกร ที่กำหนดมาตรฐาน โครงการพัฒนาหลักสูตร
              การเรียนการสอน ส่งผลให้หลักสูตรภาควิชาวิศวกรรมสารสนเทศ
              คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหาร
            </p>
            <p>
              ในปี พ.ศ. 2563
              คณะวิศวกรรมศาสตร์ได้มีการปรับปรุงโครงสร้างภาควิชาใหม่
              โดยควบรวมภาควิชา วิศวกรรมระบบสารสนเทศ (เดิม)
              เข้าเป็นส่วนหนึ่งของภาควิชาวิศวกรรมคอมพิวเตอร์ภายใต้ชื่อสาขาวิชา
              เกี่ยวกับ "ภาควิชาวิศวกรรมคอมพิวเตอร์"
              แต่ยังคงรับผิดชอบหลักสูตรวิศวกรรมสารสนเทศเช่นเดิม
              แต่วิชาปรับปรุงหลักสูตรให้มีความทันสมัยตามสภาพแวดล้อม
              และแนวทางการพัฒนาของ โลกยุคดิจิทัล
              และเพิ่มทักษะด้านเทคโนโลยีสารสนเทศ ที่สอดคล้อง
              กับบริบทของการปรับปรุงหลักสูตร คณะวิศวกรรมศาสตร์ ปีการศึกษา
              2563-2564
            </p>
            <p>
              จวบจนถึงปัจจุบัน พ.ศ. 2564
              หลักสูตรได้ปารับปรุงให้เป็นหลักสูตรวิศวกรรมระบบไอโอทีและสารสนเทศ
              โดยได้พัฒนากรอบหลักสูตรให้เป็นไปตามนโยบายอุตสาหกรรมเป้าหมายของประเทศ
              การเรียนรู้ ในรูปแบบจำเพาะตามความต้องการ (Minor)
              โดยเน้นกรอบหลักสูตรที่เป็น "Disruptive Curriculum"
              ในหลักสูตรวิศวกรรมระบบสารสนเทศเดิม มาปรับเป็นสาย Disruptive
              Curriculum ในส่วนของระบบฐานข้อมูล ระบบคลาวด์คอมพิวติ้ง
              ระบบปัญญาประดิษฐ์ การวิเคราะห์ข้อมูล หลักสูตรวิศวกรรมระบบ ไอโอที
              และหลักสูตรวิศวกรรมคอมพิวเตอร์
              ส่งเสริมให้นักศึกษาได้รับโอกาสในการศึกษา เพิ่มทักษะ
              และมีการปฏิบัติงานจริง รวมทั้งได้ ปริญญาวิชาโท (Minor Program)
              ในสาขาวิศวกรรมระบบไอโอทีและระบบดิจิทัล เพื่อให้นักศึกษาในสถาบัน
              เทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบังได้รับทางเลือกเป็นนวัตกร
              รองรับโลกยุคใหม่
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll to Top Icon -->
    <div class="flex justify-center items-center animate-bounce">
      <a href="#" id="scrollToTopBtn"
        class="flex items-center justify-center w-12 h-12 bg-orange-600 hover:bg-orange-500 text-white rounded-full shadow-lg hover:shadow-orange-500/50 transition-all hover:-translate-y-1"
        aria-label="Scroll to top">
        <i class="fa-solid fa-arrow-up text-xl"></i>
      </a>
    </div>
  </main>

  <!-- Footer Area -->
  <?php include 'footer.php'; ?>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/script.js"></script>
  <script>
    // Custom Smooth Scroll to Top Logic
    document
      .getElementById("scrollToTopBtn")
      .addEventListener("click", function (e) {
        e.preventDefault();
        const startY = window.scrollY;
        const duration = 600; // 600 milliseconds
        let startTime = null;

        function animation(currentTime) {
          if (startTime === null) startTime = currentTime;
          const timeElapsed = currentTime - startTime;
          const progress = Math.min(timeElapsed / duration, 1);

          // Easing (easeOutQuart)
          const ease = 1 - Math.pow(1 - progress, 4);

          window.scrollTo(0, startY * (1 - ease));

          if (timeElapsed < duration) {
            window.requestAnimationFrame(animation);
          }
        }
        window.requestAnimationFrame(animation);
      });
  </script>
  <!-- Floating Action Button -->
  <?php include 'floating-btn.php'; ?>

</body>

</html>