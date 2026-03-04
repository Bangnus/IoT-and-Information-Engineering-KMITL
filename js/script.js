// ไฟล์สำหรับเขียน JavaScript
document.addEventListener("DOMContentLoaded", () => {
  console.log("Hello! หน้าเว็บและไฟล์ JS โหลดเสร็จเรียบร้อยแล้ว");

  // จัดการเมนู Hamburger สำหรับมือถือ
  const btn = document.getElementById("mobile-menu-btn");
  const menu = document.getElementById("mobile-menu");

  // FontAwesome Icons Wrappers
  const iconMenu = document.getElementById("fa-menu-icon");
  const iconClose = document.getElementById("fa-close-icon");

  let isMenuOpen = false;

  if (btn && menu) {
    btn.addEventListener("click", () => {
      isMenuOpen = !isMenuOpen;
      menu.classList.toggle("hidden");

      if (isMenuOpen) {
        iconMenu.classList.add("hidden");
        iconMenu.classList.remove("flex");
        iconClose.classList.add("flex");
        iconClose.classList.remove("hidden");
      } else {
        iconMenu.classList.add("flex");
        iconMenu.classList.remove("hidden");
        iconClose.classList.add("hidden");
        iconClose.classList.remove("flex");
      }
    });
  }

  // Custom Smooth Scroll to Top Logic
  const scrollBtn = document.getElementById("scrollToTopBtn");
  if (scrollBtn) {
    scrollBtn.addEventListener("click", function (e) {
      e.preventDefault();
      const startY = window.scrollY;
      const duration = 600;
      let startTime = null;

      function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const progress = Math.min(timeElapsed / duration, 1);
        const ease = 1 - Math.pow(1 - progress, 4);
        window.scrollTo(0, startY * (1 - ease));
        if (timeElapsed < duration) {
          window.requestAnimationFrame(animation);
        }
      }
      window.requestAnimationFrame(animation);
    });
  }

  // Make sure contact is active in mobile menu as well
  const currentUrl = window.location.pathname.split("/").pop();
  const mobileLinks = document.querySelectorAll("#mobile-menu a");
  mobileLinks.forEach((link) => {
    if (link.getAttribute("href") === currentUrl) {
      link.className =
        "bg-orange-600/20 text-primary block px-4 py-3 rounded-md text-base font-medium border-l-4 border-orange-500";
    } else {
      link.className =
        "text-gray-300 hover:bg-gray-800 hover:text-orange-400 block px-4 py-3 rounded-md text-base font-medium transition-colors";
    }
  });

  // Global Search Logic
  console.log("Initializing Global Search...");

  const searchMap = {
    iot: "academic.php",
    ไอโอที: "academic.php",
    วิศวกรรมไอโอที: "academic.php",
    วิศวะไอโอที: "academic.php",
    อาจารย์: "faculty.php",
    ครู: "faculty.php",
    บุคลากร: "faculty.php",
    บุคลากรสายสนับสนุน: "faculty.php",
    faculty: "faculty.php",
    รับสมัคร: "admission.php",
    admission: "admission.php",
    tcas: "admission.php",
    พอร์ต: "admission.php",
    ค่าเทอม: "admission.php",
    ติดต่อ: "contact.php",
    contact: "contact.php",
    ที่อยู่: "contact.php",
    เบอร์: "contact.php",
    โทร: "contact.php",
    ผลงาน: "performance.php",
    performance: "performance.php",
    ความสำเร็จ: "performance.php",
    วิจัย: "performance.php",
    หลักสูตร: "academic.php",
    academic: "academic.php",
    วิชา: "academic.php",
    เรียน: "academic.php",
    ฟิสิกส์: "physics-faculty-member.php",
    physics: "physics-faculty-member.php",
    อุตสาหกรรม: "about-industry-physics.php",
    ไซเบอร์: "cybersecurity-def.php",
    cybersecurity: "cybersecurity-def.php",
    cyber: "cybersecurity-def.php",
    สองปริญญา: "about-dual-degree.php",
    ปริญญาคู่: "about-dual-degree.php",
    dual: "about-dual-degree.php",
    ควบ: "about-dual-degree.php",
  };

  function performSearch(query) {
    console.log("Searching for:", query);
    if (!query || !query.trim()) return;

    const qLower = query.toLowerCase().trim();

    // 1. Try routing to a specific targeted page using keyword mapping
    let shouldRedirect = false;
    for (const [keyword, url] of Object.entries(searchMap)) {
      if (qLower.includes(keyword) || keyword.includes(qLower)) {
        if (!window.location.pathname.endsWith(url)) {
          console.log("Routing to:", url);
          window.location.href = url;
          return; // Stop execution to redirect
        } else {
          console.log("Already on mapped page:", url);
          shouldRedirect = true; // Still allow window.find to run since we are on the correct page
          break;
        }
      }
    }

    // 2. Try finding it on the current page using the browser's built-in find
    if (
      window.find &&
      window.find(query, false, false, true, false, false, false)
    ) {
      console.log("Found on current page via window.find");
      return;
    }

    // 3. Fallback: Ask the AI Chatbot only if we didn't just route somewhere
    if (!shouldRedirect) {
      console.log("No match found, redirecting to chatbot");
      window.location.href = "chat.php?q=" + encodeURIComponent(query);
    }
  }

  const dInput = document.getElementById("desktop-search-input");
  const dBtn = document.getElementById("desktop-search-btn");
  const mInput = document.getElementById("mobile-search-input");
  const mBtn = document.getElementById("mobile-search-btn");

  if (dInput && dBtn) {
    dBtn.addEventListener("click", () => performSearch(dInput.value));
    dInput.addEventListener("keypress", (e) => {
      if (e.key === "Enter") performSearch(dInput.value);
    });
  }

  if (mInput && mBtn) {
    mBtn.addEventListener("click", () => performSearch(mInput.value));
    mInput.addEventListener("keypress", (e) => {
      if (e.key === "Enter") performSearch(mInput.value);
    });
  }
});
