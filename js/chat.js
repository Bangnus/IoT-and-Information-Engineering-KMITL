document.addEventListener("DOMContentLoaded", async () => {
  const messagesContainer = document.getElementById("chat-messages");
  const optionsContainer = document.getElementById("chat-options-container");
  const chatForm = document.getElementById("chat-form");
  const chatInput = document.getElementById("chat-input");
  const chatSubmit = document.getElementById("chat-submit");
  const loadingIndicator = document.getElementById("loading-dataset");

  let dataset = [];

  // dynamically build categorized questions from dataset
  const categoryKeywords = {
    "📱 ข้อมูลหลักสูตร (About Program)": [
      "จบแล้ว",
      "เงินเดือน",
      "บริษัท",
      "สายงาน",
      "อาชีพ",
      "ทำงาน",
    ],
    "📚 การเรียนการสอน (Curriculum)": [
      "วิชา",
      "คอมพิวเตอร์",
      "การเรียน",
      "ฮาร์ดแวร์",
      "ซอฟต์แวร์",
    ],
    "🎓 การรับสมัครและค่าใช้จ่าย (Admission)": [
      "พอร์ต",
      "สัมภาษณ์",
      "ค่าเทอม",
      "คะแนน",
      "สอบเข้า",
    ],
    "🚀 หลักสูตร 2 ปริญญา (Dual Degree)": [
      "สองปริญญา",
      "ปริญญาคู่",
      "ควบ",
      "2 ปริญญา",
    ],
  };

  let categories = {
    "📱 ข้อมูลหลักสูตร (About Program)": [],
    "📚 การเรียนการสอน (Curriculum)": [],
    "🎓 การรับสมัครและค่าใช้จ่าย (Admission)": [],
    "🚀 หลักสูตร 2 ปริญญา (Dual Degree)": [],
  };

  try {
    // Dynamically handle GitHub pages subdirectory
    const basePath = window.location.pathname.substring(
      0,
      window.location.pathname.lastIndexOf("/")
    );
    const fetchPath = `${basePath}/iot_dataset_gemini-2.5-flash_5000_real.json`;

    const response = await fetch(fetchPath);
    if (response.ok) {
      dataset = await response.json();

      // Populate categories dynamically from dataset
      for (const [cat, keywords] of Object.entries(categoryKeywords)) {
        let added = 0;
        for (const item of dataset) {
          if (!item.input) continue;
          const q = item.input;
          if (q.length < 15 || q.length > 80) continue; // reasonably sized questions

          if (keywords.some((k) => q.includes(k))) {
            if (!categories[cat].includes(q)) {
              categories[cat].push(q);
              added++;
            }
          }
          if (added >= 4) break;
        }

        // fallback if not found
        if (categories[cat].length === 0) {
          categories[cat] = dataset.slice(0, 4).map((x) => x.input);
        }
      }

      loadingIndicator.style.display = "none";
      chatInput.disabled = false;
      chatSubmit.disabled = false;

      // Check if we came from the global navbar search
      const urlParams = new URLSearchParams(window.location.search);
      const query = urlParams.get("q");
      if (query) {
        optionsContainer.innerHTML = "";
        setTimeout(() => {
          chatInput.value = query;
          handleUserSearch(query);
        }, 300);
        // Clean up URL so refresh doesn't trigger it again
        window.history.replaceState(
          {},
          document.title,
          window.location.pathname
        );
      } else {
        showCategories();
      }
    } else {
      loadingIndicator.innerHTML =
        '<i class="fa-solid fa-triangle-exclamation text-red-500"></i> ไม่สามารถโหลดข้อมูลได้ในขณะนี้';
    }
  } catch (error) {
    console.error(error);
    loadingIndicator.innerHTML =
      '<i class="fa-solid fa-triangle-exclamation text-red-500"></i> มีข้อผิดพลาดในการโหลดข้อมูล';
  }

  function addMessage(text, isUser = false) {
    const msgDiv = document.createElement("div");
    msgDiv.className = `flex gap-3 ${
      isUser ? "justify-end" : "justify-start"
    } message-anim mb-4 w-full`;

    let avatar = "";
    if (!isUser) {
      avatar = `
                <div class="w-8 h-8 rounded-full bg-orange-500/10 flex items-center justify-center border border-orange-500/50 shrink-0 mt-1">
                    <i class="fa-solid fa-robot text-sm text-orange-500"></i>
                </div>`;
    }

    const bubbleClass = isUser
      ? "bg-orange-600 text-white p-3 md:px-4 rounded-2xl rounded-tr-none shadow-md"
      : "bg-gray-800 text-gray-200 p-3 md:px-4 rounded-2xl rounded-tl-none border border-gray-700/50 shadow-md";

    msgDiv.innerHTML = `
                ${!isUser ? avatar : ""}
                <div class="max-w-[85%] sm:max-w-[75%]">
                    <div class="${bubbleClass} text-sm sm:text-base leading-relaxed">
                        ${text.replace(/\\n/g, "<br>")}
                    </div>
                </div>
            `;

    messagesContainer.insertBefore(msgDiv, optionsContainer);
    scrollToBottom();
  }

  function scrollToBottom() {
    setTimeout(() => {
      messagesContainer.scrollTo({
        top: messagesContainer.scrollHeight,
        behavior: "smooth",
      });
    }, 50);
  }

  function showCategories() {
    optionsContainer.innerHTML = "";
    const wrapDiv = document.createElement("div");
    wrapDiv.className = "flex flex-wrap gap-2 w-full"; // removed message-anim

    Object.keys(categories).forEach((cat, index) => {
      const btn = document.createElement("button");
      btn.className =
        "message-anim px-4 py-2 bg-[#1f2937] hover:bg-orange-600 hover:text-white border border-gray-600 hover:border-orange-500 rounded-full text-sm text-gray-300 transition-all duration-300 text-left shadow-sm hover:shadow-orange-500/20";
      // stagger the delay
      btn.style.animationDelay = `${index * 0.08}s`;
      btn.innerText = cat;
      btn.onclick = () => handleCategoryClick(cat);
      wrapDiv.appendChild(btn);
    });

    optionsContainer.appendChild(wrapDiv);
    scrollToBottom();
  }

  function showSubQuestions(category) {
    optionsContainer.innerHTML = "";
    const questions = categories[category];
    const wrapDiv = document.createElement("div");
    wrapDiv.className = "flex flex-col gap-2 w-full pr-2";

    questions.forEach((q, index) => {
      const btn = document.createElement("button");
      btn.className =
        "message-anim px-4 py-3 bg-[#1f2937] hover:bg-orange-600 hover:text-white border border-gray-600 hover:border-orange-500 rounded-xl text-sm text-gray-300 transition-all duration-300 text-left shadow-sm hover:shadow-orange-500/20 w-fit";
      btn.style.animationDelay = `${index * 0.08}s`;
      btn.innerText = q;
      btn.onclick = () => handleQuestionClick(q);
      wrapDiv.appendChild(btn);
    });

    const backBtn = document.createElement("button");
    backBtn.className =
      "message-anim px-4 py-2 mt-2 bg-transparent hover:text-orange-400 text-gray-400 text-sm transition-colors duration-200 text-left flex items-center gap-2 w-max rounded-lg hover:bg-gray-800";
    backBtn.style.animationDelay = `${questions.length * 0.08}s`;
    backBtn.innerHTML =
      '<i class="fa-solid fa-arrow-left"></i> ย้อนกลับไปหัวข้อหลัก';
    backBtn.onclick = showCategories;
    wrapDiv.appendChild(backBtn);

    optionsContainer.appendChild(wrapDiv);
    scrollToBottom();
  }

  function handleCategoryClick(category) {
    addMessage(category, true);
    setTimeout(() => {
      addMessage(
        `นี่คือหัวข้อย่อยสำหรับหมวดหมู่ "${category}" ครับ เลือกคำถามที่คุณต้องการได้เลย หรือจะพิมพ์ถามผมก็ได้เช่นกันครับ:`
      );
      showSubQuestions(category);
    }, 400);
  }

  function simulateTyping(callback) {
    optionsContainer.style.display = "none";

    const typingId = "typing-" + Date.now();
    const typingDiv = document.createElement("div");
    typingDiv.id = typingId;
    typingDiv.className = "flex gap-3 justify-start message-anim mb-4";
    typingDiv.innerHTML = `
                <div class="w-8 h-8 rounded-full bg-orange-500/10 flex items-center justify-center border border-orange-500/50 shrink-0 mt-1">
                    <i class="fa-solid fa-robot text-sm text-orange-500"></i>
                </div>
                <div class="bg-gray-800 p-3 rounded-2xl rounded-tl-none border border-gray-700/50 flex gap-1.5 items-center h-[42px]">
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0ms"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 150ms"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 300ms"></div>
                </div>
            `;
    messagesContainer.insertBefore(typingDiv, optionsContainer);
    scrollToBottom();

    setTimeout(() => {
      document.getElementById(typingId).remove();
      optionsContainer.style.display = "flex";
      callback();
    }, 500 + Math.random() * 1000);
  }

  function handleQuestionClick(question) {
    addMessage(question, true);

    simulateTyping(() => {
      const exactMatch = dataset.find((item) => item.input === question);
      const answer = exactMatch ? exactMatch.output : findBestMatch(question);

      addMessage(answer);
      setTimeout(showCategories, 100);
    });
  }

  function handleUserSearch(query) {
    if (!query.trim()) return;

    addMessage(query, true);
    chatInput.value = "";

    simulateTyping(() => {
      const answer = findBestMatch(query);
      addMessage(answer);
      setTimeout(showCategories, 100);
    });
  }

  function findBestMatch(query) {
    // Basic cleanup
    const cleanQuery = query.toLowerCase().trim();
    if (!cleanQuery)
      return "ขออภัยครับ คำถามเฉพาะทางนี้ผมยังไม่แน่ใจ รบกวนเลือกจากหัวข้อที่ผมเตรียมไว้ หรือลองเปลี่ยนคำค้นหาดูนะครับ 🙇‍♂️";

    let bestMatch = null;
    let maxScore = 0;

    for (let i = 0; i < dataset.length; i++) {
      const item = dataset[i];
      const input = item.input.toLowerCase();

      // 1. Exact match is always best
      if (input === cleanQuery) {
        return item.output;
      }

      let score = 0;

      // 2. Direct substring match (Query is inside Input)
      if (input.includes(cleanQuery)) {
        score += 20;
      }

      // 3. Direct substring match (Input is inside Query)
      if (cleanQuery.includes(input)) {
        score += 15;
      }

      // 4. Character overlap matching (Fuzzy logic for Thai)
      // Break both into chunks of 3 characters (n-grams) to find similarities without spaces
      const n = 3;
      const queryGrams = [];
      for (let j = 0; j <= cleanQuery.length - n; j++) {
        queryGrams.push(cleanQuery.substring(j, j + n));
      }

      let gramScore = 0;
      for (const gram of queryGrams) {
        if (input.includes(gram)) {
          gramScore += 1;
        }
      }

      // Weight the gram score based on how much of the query it covers
      if (queryGrams.length > 0) {
        score += (gramScore / queryGrams.length) * 10;
      }

      // Keep track of the highest score
      if (score > maxScore) {
        maxScore = score;
        bestMatch = item;
      }
    }

    // Threshold to prevent completely unrelated answers
    if (bestMatch && maxScore > 3) {
      return bestMatch.output;
    }

    return "ขออภัยครับ คำถามเฉพาะทางนี้ผมยังไม่แน่ใจ รบกวนเลือกจากหัวข้อที่ผมเตรียมไว้ หรือลองเปลี่ยนคำค้นหาดูนะครับ 🙇‍♂️";
  }

  chatForm.addEventListener("submit", (e) => {
    e.preventDefault();
    handleUserSearch(chatInput.value);
  });
});
