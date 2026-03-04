<!-- TCAS 1 Portfolio Modal -->
<div id="modal-tcas1"
    class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/70 backdrop-blur-sm px-4 opacity-0 transition-opacity duration-300"
    onclick="closeModal(event, 'modal-tcas1')">
    <div class="bg-white rounded-3xl p-6 md:p-8 w-full max-w-lg shadow-[0_0_40px_rgba(245,158,11,0.3)] relative border-4 border-amber-500 transform scale-95 transition-transform duration-300 modal-content"
        onclick="event.stopPropagation()">
        <button onclick="closeModal(event, 'modal-tcas1', true)"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 transition-colors w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
        <h3 class="text-xl md:text-2xl font-bold text-amber-600 mb-2 drop-shadow-sm"><i
                class="fa-solid fa-calendar-days mr-2"></i> TCAS 1 Portfolio</h3>

        <div class="flex flex-col gap-3 max-h-[60vh] overflow-y-auto pr-2 custom-scrollbar">
            <!-- 1. รับสมัคร -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=เปิดรับสมัคร+TCAS+1+Portfolio+KMITL&dates=20250901T000000Z/20250930T000000Z&details=เริ่มรับสมัครตั้งแต่+ก.ย.+68+เป็นต้นไป"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-amber-400 hover:bg-amber-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-amber-600">รับสมัคร</span>
                    <span class="text-xs text-gray-500 font-medium">ก.ย. 68 เป็นต้นไป</span>
                </div>
                <div
                    class="bg-amber-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 2. ประกาศผล -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ประกาศผลผู้ผ่านการคัดเลือก+TCAS+1+KMITL&dates=20260224T000000Z/20260225T000000Z&details=ประกาศผลภายในวันที่+24+ก.พ.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-amber-400 hover:bg-amber-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-amber-600">ประกาศผลผู้ผ่านการคัดเลือก</span>
                    <span class="text-xs text-gray-500 font-medium">ภายใน 24 ก.พ. 69</span>
                </div>
                <div
                    class="bg-amber-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 3. ยืนยันสิทธิ์ -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ยืนยันสิทธิ์+TCAS+1+KMITL+ในทปอ.&dates=20260304T000000Z/20260306T000000Z&details=ระบบกำหนดให้ยืนยันสิทธิ์ตั้งแต่วันที่+4-5+มี.ค.+69+ในระบบ+mytcas.com"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border-2 border-green-200 hover:border-green-500 hover:bg-green-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-green-600">ยืนยันสิทธิ์ผ่านระบบ ทปอ. <i
                            class="fa-solid fa-circle-check text-green-500 ml-1"></i></span>
                    <span class="text-xs text-gray-500 font-medium">4 - 5 มี.ค. 69</span>
                </div>
                <div
                    class="bg-green-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 4. สละสิทธิ์ -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=สละสิทธิ์+TCAS+1+KMITL+ในทปอ.&dates=20260306T000000Z/20260307T000000Z&details=ระบบกำหนดให้สละสิทธิ์วันที่+6+มี.ค.+69+ในระบบ+mytcas.com"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-red-400 hover:bg-red-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-red-500">สละสิทธิ์ผ่านระบบ ทปอ. <i
                            class="fa-solid fa-circle-xmark text-red-500 ml-1"></i></span>
                    <span class="text-xs text-gray-500 font-medium">6 มี.ค. 69</span>
                </div>
                <div
                    class="bg-red-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 5. ประกาศผู้มีสิทธิ์เข้าศึกษา -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ประกาศผู้มีสิทธิ์เข้าศึกษา+TCAS+1+KMITL&dates=20260313T000000Z/20260314T000000Z&details=กำหนดการวันที่+13+มี.ค.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-amber-400 hover:bg-amber-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-amber-600">ประกาศผู้มีสิทธิ์เข้าศึกษา</span>
                    <span class="text-xs text-gray-500 font-medium">13 มี.ค. 69</span>
                </div>
                <div
                    class="bg-amber-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 6. ชำระเงินยืนยันสิทธิ์เข้าศึกษา -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ชำระเงินยืนยันสิทธิ์เข้าศึกษา+TCAS+1+KMITL&dates=20260319T000000Z/20260326T000000Z&details=กำหนดการวันที่+19-25+มี.ค.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border-2 border-orange-200 hover:border-orange-400 hover:bg-orange-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span
                        class="font-bold text-gray-800 group-hover:text-orange-500">ชำระเงินยืนยันสิทธิ์เข้าศึกษา</span>
                    <span class="text-xs text-gray-500 font-medium">19 - 25 มี.ค. 69</span>
                </div>
                <div
                    class="bg-orange-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- TCAS 2 Quota Modal -->
<div id="modal-tcas2"
    class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/70 backdrop-blur-sm px-4 opacity-0 transition-opacity duration-300"
    onclick="closeModal(event, 'modal-tcas2')">
    <div class="bg-white rounded-3xl p-6 md:p-8 w-full max-w-lg shadow-[0_0_40px_rgba(249,115,22,0.3)] relative border-4 border-orange-500 transform scale-95 transition-transform duration-300 modal-content"
        onclick="event.stopPropagation()">
        <button onclick="closeModal(event, 'modal-tcas2', true)"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 transition-colors w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
        <h3 class="text-xl md:text-2xl font-bold text-orange-600 mb-2 drop-shadow-sm"><i
                class="fa-solid fa-calendar-days mr-2"></i> TCAS 2 Quota</h3>

        <div class="flex flex-col gap-3 max-h-[60vh] overflow-y-auto pr-2 custom-scrollbar">
            <!-- 1. รับสมัคร -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=เปิดรับสมัคร+TCAS+2+Quota+KMITL&dates=20260309T000000Z/20260331T000000Z&details=เริ่มรับสมัครตั้งแต่+9+มี.ค.+69+เป็นต้นไป"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-orange-600">รับสมัคร</span>
                    <span class="text-xs text-gray-500 font-medium">9 มี.ค. 69 เป็นต้นไป</span>
                </div>
                <div
                    class="bg-orange-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 2. ประกาศผล -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ประกาศผลผู้ผ่านการคัดเลือก+TCAS+2+KMITL&dates=20260424T000000Z/20260425T000000Z&details=ประกาศผลภายในวันที่+24+เม.ย.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-orange-600">ประกาศผลผู้ผ่านการคัดเลือก</span>
                    <span class="text-xs text-gray-500 font-medium">ภายใน 24 เม.ย. 69</span>
                </div>
                <div
                    class="bg-orange-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 3. ยืนยันสิทธิ์ -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ยืนยันสิทธิ์+TCAS+2+KMITL+ในทปอ.&dates=20260502T000000Z/20260504T000000Z&details=ระบบกำหนดให้ยืนยันสิทธิ์ตั้งแต่วันที่+2-3+พ.ค.+69+ในระบบ+mytcas.com"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border-2 border-green-200 hover:border-green-500 hover:bg-green-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-green-600">ยืนยันสิทธิ์ผ่านระบบ ทปอ. <i
                            class="fa-solid fa-circle-check text-green-500 ml-1"></i></span>
                    <span class="text-xs text-gray-500 font-medium">2 - 3 พ.ค. 69</span>
                </div>
                <div
                    class="bg-green-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 4. สละสิทธิ์ -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=สละสิทธิ์+TCAS+2+KMITL+ในทปอ.&dates=20260504T000000Z/20260505T000000Z&details=ระบบกำหนดให้สละสิทธิ์วันที่+4+พ.ค.+69+ในระบบ+mytcas.com"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-red-400 hover:bg-red-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-red-500">สละสิทธิ์ผ่านระบบ ทปอ. <i
                            class="fa-solid fa-circle-xmark text-red-500 ml-1"></i></span>
                    <span class="text-xs text-gray-500 font-medium">4 พ.ค. 69</span>
                </div>
                <div
                    class="bg-red-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 5. ประกาศผู้มีสิทธิ์เข้าศึกษา -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ประกาศผู้มีสิทธิ์เข้าศึกษา+TCAS+2+KMITL&dates=20260508T000000Z/20260509T000000Z&details=กำหนดการวันที่+8+พ.ค.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-orange-500 hover:bg-orange-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-orange-600">ประกาศผู้มีสิทธิ์เข้าศึกษา</span>
                    <span class="text-xs text-gray-500 font-medium">8 พ.ค. 69</span>
                </div>
                <div
                    class="bg-orange-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 6. ชำระเงินยืนยันสิทธิ์เข้าศึกษา -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ชำระเงินยืนยันสิทธิ์เข้าศึกษา+TCAS+2+KMITL&dates=20260512T000000Z/20260520T000000Z&details=กำหนดการวันที่+12-19+พ.ค.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border-2 border-orange-200 hover:border-orange-400 hover:bg-orange-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span
                        class="font-bold text-gray-800 group-hover:text-orange-500">ชำระเงินยืนยันสิทธิ์เข้าศึกษา</span>
                    <span class="text-xs text-gray-500 font-medium">12 - 19 พ.ค. 69</span>
                </div>
                <div
                    class="bg-orange-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- TCAS 3 Admission Modal -->
<div id="modal-tcas3"
    class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/70 backdrop-blur-sm px-4 opacity-0 transition-opacity duration-300"
    onclick="closeModal(event, 'modal-tcas3')">
    <div class="bg-white rounded-3xl p-6 md:p-8 w-full max-w-lg shadow-[0_0_40px_rgba(239,68,68,0.3)] relative border-4 border-red-500 transform scale-95 transition-transform duration-300 modal-content"
        onclick="event.stopPropagation()">
        <button onclick="closeModal(event, 'modal-tcas3', true)"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 transition-colors w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
        <h3 class="text-xl md:text-2xl font-bold text-red-600 mb-2 drop-shadow-sm"><i
                class="fa-solid fa-calendar-days mr-2"></i> TCAS 3 Admission</h3>

        <div class="flex flex-col gap-3 max-h-[60vh] overflow-y-auto pr-2 custom-scrollbar">
            <!-- 1. รับสมัคร -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=รับสมัคร+TCAS+3+Admission(ผ่าน+mytcas.com)+KMITL&dates=20260506T000000Z/20260513T000000Z&details=สมัครได้ผ่านระบบ+mytcas.com"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-red-500 hover:bg-red-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-red-600">รับสมัคร</span>
                    <span class="text-xs text-gray-500 font-medium">6 - 12 พ.ค. 69 (ผ่านระบบ mytcas.com)</span>
                </div>
                <div
                    class="bg-red-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 2. ประกาศผล -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ประกาศผลผู้ผ่านการคัดเลือก+TCAS+3+KMITL&dates=20260520T000000Z/20260527T000000Z&details=ครั้งที่+1:+20+พ.ค.+69,+ครั้งที่+2:+26+พ.ค.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-red-500 hover:bg-red-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-red-600">ประกาศผลผู้ผ่านการคัดเลือก</span>
                    <span class="text-xs text-gray-500 font-medium">ครั้งที่ 1 : 20 พ.ค. / ครั้งที่ 2 : 26 พ.ค.</span>
                </div>
                <div
                    class="bg-red-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 3. ยืนยันสิทธิ์ -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ยืนยันสิทธิ์+TCAS+3+KMITL+ในทปอ.&dates=20260520T000000Z/20260522T000000Z&details=ยืนยันสิทธิ์ครั้งที่+1:+20-21+พ.ค.+69.+หรือยืนยันสิทธิ์อัตโนมัติในครั้งที่+2"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border-2 border-green-200 hover:border-green-500 hover:bg-green-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-green-600">ยืนยันสิทธิ์ผ่านระบบ ทปอ. <i
                            class="fa-solid fa-circle-check text-green-500 ml-1"></i></span>
                    <span class="text-xs text-gray-500 font-medium">ครั้งที่ 1 : 20-21 พ.ค. 69</span>
                </div>
                <div
                    class="bg-green-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 4. สละสิทธิ์ -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=สละสิทธิ์+TCAS+3+KMITL+ในทปอ.&dates=20260527T000000Z/20260528T000000Z&details=กำหนดสละสิทธิ์วันที่+27+พ.ค.+69+เฉพาะผ่านการคัดเลือกรอบ+3"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-red-400 hover:bg-red-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-red-500">สละสิทธิ์ผ่านระบบ ทปอ. <i
                            class="fa-solid fa-circle-xmark text-red-500 ml-1"></i></span>
                    <span class="text-xs text-gray-500 font-medium">27 พ.ค. 69 (เฉพาะผู้ผ่าน ทปอ. รอบ 3)</span>
                </div>
                <div
                    class="bg-red-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 5. ประกาศผู้มีสิทธิ์เข้าศึกษา -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ประกาศผู้มีสิทธิ์เข้าศึกษา+TCAS+3+KMITL&dates=20260605T000000Z/20260606T000000Z&details=กำหนดการวันที่+5+มิ.ย.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border border-gray-200 hover:border-red-500 hover:bg-red-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-800 group-hover:text-red-600">ประกาศผู้มีสิทธิ์เข้าศึกษา</span>
                    <span class="text-xs text-gray-500 font-medium">5 มิ.ย. 69</span>
                </div>
                <div
                    class="bg-red-500 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>

            <!-- 6. ชำระเงินยืนยันสิทธิ์เข้าศึกษา -->
            <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=ชำระเงินยืนยันสิทธิ์เข้าศึกษา+TCAS+3+KMITL&dates=20260608T000000Z/20260611T000000Z&details=กำหนดการวันที่+8-10+มิ.ย.+69"
                target="_blank"
                class="flex justify-between items-center p-3 md:p-4 rounded-xl border-2 border-orange-200 hover:border-orange-400 hover:bg-orange-50 transition-all group shadow-sm hover:shadow-md">
                <div class="flex flex-col">
                    <span
                        class="font-bold text-gray-800 group-hover:text-orange-500">ชำระเงินยืนยันสิทธิ์เข้าศึกษา</span>
                    <span class="text-xs text-gray-500 font-medium">8 - 10 มิ.ย. 69</span>
                </div>
                <div
                    class="bg-orange-400 text-white w-10 h-10 flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform shadow-md">
                    <i class="fa-solid fa-plus text-lg"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden');
            // Slight delay for animation to trigger
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                const content = modal.querySelector('.modal-content');
                if (content) {
                    content.classList.remove('scale-95');
                    content.classList.add('scale-100');
                }
            }, 10);

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(event, modalId, force = false) {
        // If the click is on the modal background or forced closer
        if (force || event.target.id === modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('opacity-0');
                const content = modal.querySelector('.modal-content');
                if (content) {
                    content.classList.remove('scale-100');
                    content.classList.add('scale-95');
                }

                // Wait for animation to finish before hiding
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto'; // Restore body scroll
                }, 300);
            }
        }
    }
</script>