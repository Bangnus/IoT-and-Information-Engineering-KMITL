<?php
$page_title = "IoT Chatbot";
?>
<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IoT Chatbot - KMITL</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Tailwind CSS v4 CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ea580c',
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
        .chat-container::-webkit-scrollbar {
            width: 6px;
        }

        .chat-container::-webkit-scrollbar-track {
            background: transparent;
        }

        .chat-container::-webkit-scrollbar-thumb {
            background: rgba(234, 88, 12, 0.5);
            border-radius: 10px;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .message-anim {
            opacity: 0;
            animation: slideUp 0.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }
    </style>
</head>

<body class="bg-black text-gray-200 min-h-screen flex flex-col font-sans radial-bg">
    <!-- Navigation Bar -->

    <!-- Chat UI -->
    <main class="flex-grow flex flex-col w-full relative z-10 h-[calc(100vh-80px)]">
        <div class="w-full h-full bg-[#111827] flex flex-col overflow-hidden">

            <!-- Chat Header -->
            <div class="bg-gray-900 border-b border-orange-500/30 p-4 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-orange-500/10 flex items-center justify-center border border-orange-500/50 shrink-0">
                        <img src="assets/images/logo-kmitl.png" alt="Bot" class="w-8 h-8 object-contain opacity-80"
                            onerror="this.src='https://cdn-icons-png.flaticon.com/512/4712/4712035.png'">
                    </div>
                    <div>
                        <h2 class="text-white font-bold text-lg leading-tight">IoT Assistant</h2>
                        <p class="text-xs text-orange-400 flex items-center gap-1 mt-0.5">
                            <span class="w-2 h-2 rounded-full bg-green-500 inline-block animate-pulse"></span>
                            พร้อมให้คำปรึกษา
                        </p>
                    </div>
                </div>
                <div>
                    <a href="index.php"
                        class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 transition">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>
            </div>

            <!-- Chat Messages Area -->
            <div id="chat-messages" class="flex-grow p-4 sm:p-6 overflow-y-auto chat-container flex flex-col gap-4">
                <!-- Initial Bot Message -->
                <div class="flex gap-3 justify-start opacity-0 translate-y-4 animate-[slideUp_0.3s_ease-out_forwards]">
                    <div
                        class="w-8 h-8 rounded-full bg-orange-500/10 flex items-center justify-center border border-orange-500/50 shrink-0 mt-1">
                        <i class="fa-solid fa-robot text-sm text-orange-500"></i>
                    </div>
                    <div class="max-w-[85%] sm:max-w-[75%]">
                        <div
                            class="bg-gray-800 text-gray-200 p-3.5 rounded-2xl rounded-tl-none border border-gray-700/50 text-sm sm:text-base shadow-sm leading-relaxed">
                            สวัสดีครับ! 👋 ผมคือผู้ช่วยอัจฉริยะของหลักสูตรวิศวกรรมระบบไอโอทีและสารสนเทศ
                            สจล.<br><br>มีอะไรให้ผมช่วยไหมครับ? คุณสามารถเลือกหัวข้อที่คุณสนใจจากเมนูด้านล่าง
                            หรือพิมพ์คำถามของคุณเพื่อค้นหาคำตอบได้เลยครับ!
                        </div>
                    </div>
                </div>

                <!-- Options Container -->
                <div id="chat-options-container" class="flex flex-col gap-2 mt-2 ml-11 max-w-[85%] sm:max-w-[75%]">
                    <div class="text-xs text-gray-400 flex items-center gap-2" id="loading-dataset">
                        <i class="fa-solid fa-circle-notch fa-spin text-orange-500"></i> กำลังเตรียมข้อมูลอัจฉริยะ...
                    </div>
                </div>
            </div>

            <!-- Chat Input Area -->
            <div class="bg-gray-900 border-t border-gray-800 p-4">
                <form id="chat-form" class="flex gap-2 relative">
                    <input type="text" id="chat-input" placeholder="พิมพ์คำถามของคุณเกี่ยวกับหลักสูตร IoT ที่นี่..."
                        class="w-full bg-gray-800 text-white text-sm sm:text-base rounded-full pl-5 pr-14 py-3 border border-gray-700 focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition-all placeholder-gray-500"
                        disabled />
                    <button type="submit" id="chat-submit"
                        class="absolute right-2 top-1/2 transform -translate-y-1/2 w-10 h-10 rounded-full bg-orange-600 hover:bg-orange-500 text-white flex items-center justify-center transition-colors disabled:opacity-50 disabled:cursor-not-allowed shadow-[0_0_10px_rgba(234,88,12,0.4)]"
                        disabled>
                        <i class="fa-solid fa-paper-plane text-sm ml-0.5"></i>
                    </button>
                </form>
            </div>
        </div>
    </main>

    <script src="js/chat.js"></script>
</body>

</html>