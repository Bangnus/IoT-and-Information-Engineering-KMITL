<?php
$current_page = basename($_SERVER['PHP_SELF']);

// Fix for sub-pages to show active background on parent menu
if (strpos($current_page, 'iot-faculty-member') !== false || strpos($current_page, 'physics-faculty-member') !== false) {
    $current_page = 'faculty.php';
} else if (strpos($current_page, 'about-') !== false) {
    $current_page = 'about.php';
} else if (strpos($current_page, 'cybersecurity-') !== false || strpos($current_page, 'performance-') !== false) {
    $current_page = 'performance.php';
}

$nav_items = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'academic.php' => 'Academic',
    'admission.php' => 'Admission',
    'contact.php' => 'Contact',
    'faculty.php' => 'Faculty',
    'performance.php' => 'Performance',
];

// Classes for Desktop
$desktop_active = "px-5 py-2 bg-primary text-white rounded-md shadow-[0_0_10px_rgba(234,88,12,0.5)] hover:bg-orange-500 transition-colors";
$desktop_inactive = "px-3 py-2 text-gray-300 hover:text-orange-500 transition-colors";

// Classes for Mobile
$mobile_active = "bg-orange-600/20 text-primary block px-4 py-3 rounded-md text-base font-medium border-l-4 border-orange-500";
$mobile_inactive = "text-gray-300 hover:bg-gray-800 hover:text-orange-400 block px-4 py-3 rounded-md text-base font-medium transition-colors";
?>
<nav class="border-y border-orange-500/20 relative z-20 bg-black/50 backdrop-blur-md sticky top-0">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 w-full">
            <!-- Mobile Brand Logo/Text -->
            <div class="md:hidden flex flex-1 items-center pr-4">
                <span class="font-semibold text-white text-sm sm:text-base line-clamp-1">
                    IoT and Information Engineering, KMITL
                </span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex flex-1 justify-center items-center">
                <ul class="flex space-x-4 lg:space-x-8 text-sm font-medium items-center">
                    <?php foreach ($nav_items as $url => $label): ?>
                        <?php $is_active = ($current_page == $url); ?>
                        <li>
                            <a href="<?= $url ?>" class="<?= $is_active ? $desktop_active : $desktop_inactive ?>">
                                <?= $label ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Desktop Search Bar -->
            <div class="hidden md:flex items-center">
                <div class="relative">
                    <input type="text" id="desktop-search-input" placeholder="Search..."
                        class="bg-gray-800/80 text-white text-sm rounded-full pl-4 pr-10 py-1.5 border border-gray-700 focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition-all w-40 lg:w-48 placeholder-gray-500" />
                    <button id="desktop-search-btn"
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden items-center justify-end">
                <button id="mobile-menu-btn" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-lg bg-[#141a21] text-gray-300 hover:text-white hover:bg-gray-800 focus:outline-none transition-colors"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <!-- FontAwesome Icons (Menu & X) -->
                    <div id="fa-menu-icon" class="w-6 h-6 flex items-center justify-center">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </div>
                    <div id="fa-close-icon" class="w-6 h-6 hidden items-center justify-center">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="md:hidden hidden bg-gray-900/95 backdrop-blur-lg border-b border-gray-800 absolute w-full shadow-2xl"
        id="mobile-menu">
        <div class="px-4 py-3 border-b border-gray-800">
            <div class="relative">
                <input type="text" id="mobile-search-input" placeholder="Search..."
                    class="w-full bg-gray-800/80 text-white text-sm rounded-md pl-4 pr-10 py-2 border border-gray-700 focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition-all placeholder-gray-500" />
                <button id="mobile-search-btn"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        <div class="px-2 pt-2 pb-6 space-y-1 sm:px-3 shadow-inner">
            <?php foreach ($nav_items as $url => $label): ?>
                <?php $is_active = ($current_page == $url); ?>
                <a href="<?= $url ?>" class="<?= $is_active ? $mobile_active : $mobile_inactive ?>">
                    <?= $label ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>