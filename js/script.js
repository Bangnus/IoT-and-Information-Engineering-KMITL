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
    iot: "academic",
    ไอโอที: "academic",
    วิศวกรรมไอโอที: "academic",
    วิศวะไอโอที: "academic",
    อาจารย์: "faculty",
    ครู: "faculty",
    บุคลากร: "faculty",
    บุคลากรสายสนับสนุน: "faculty",
    faculty: "faculty",
    รับสมัคร: "admission",
    admission: "admission",
    tcas: "admission",
    พอร์ต: "admission",
    ค่าเทอม: "admission",
    ติดต่อ: "contact",
    contact: "contact",
    ที่อยู่: "contact",
    เบอร์: "contact",
    โทร: "contact",
    ผลงาน: "performance",
    performance: "performance",
    ความสำเร็จ: "performance",
    วิจัย: "performance",
    หลักสูตร: "academic",
    academic: "academic",
    วิชา: "academic",
    เรียน: "academic",
    ฟิสิกส์: "physics-faculty-member",
    physics: "physics-faculty-member",
    อุตสาหกรรม: "about-industry-physics",
    ไซเบอร์: "cybersecurity-def",
    cybersecurity: "cybersecurity-def",
    cyber: "cybersecurity-def",
    สองปริญญา: "about-dual-degree",
    ปริญญาคู่: "about-dual-degree",
    dual: "about-dual-degree",
    ควบ: "about-dual-degree",
  };

  function performSearch(query) {
    console.log("Searching for:", query);
    if (!query || !query.trim()) return;

    const qLower = query.toLowerCase().trim();

    // Determine current extension (.php or .html)
    const isPhp = window.location.pathname.endsWith(".php");
    const extension = isPhp ? ".php" : ".html";

    // 1. Try routing to a specific targeted page using keyword mapping
    let shouldRedirect = false;
    for (const [keyword, pageName] of Object.entries(searchMap)) {
      if (qLower.includes(keyword) || keyword.includes(qLower)) {
        const targetUrl = pageName + extension;
        if (!window.location.pathname.endsWith(targetUrl)) {
          console.log("Routing to:", targetUrl);
          window.location.href = targetUrl;
          return; // Stop execution to redirect
        } else {
          console.log("Already on mapped page:", targetUrl);
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
      window.location.href =
        "chat" + extension + "?q=" + encodeURIComponent(query);
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

// AOS
AOS.init();
