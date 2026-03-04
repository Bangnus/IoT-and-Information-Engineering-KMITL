<?php
$files = glob('*.php');
$exclude = ['chat.php', 'navbar.php', 'floating-btn.php', 'find.php', 'index.php', 'contact.php', 'faculty.php', 'academic.php'];

foreach ($files as $file) {
    if (in_array($file, $exclude))
        continue;

    $content = file_get_contents($file);
    if (strpos($content, '<!-- Floating Action Button -->') === false) {
        $content = str_replace('</body>', "    <!-- Floating Action Button -->\n    <?php include 'floating-btn.php'; ?>\n\n  </body>", $content);
        file_put_contents($file, $content);
        echo "Updated $file\n";
    } else {
        echo "Skipped $file (already has btn)\n";
    }
}
