<?php
$directory = __DIR__;

// Exclude these files 
$exclude_files = [
    'chat.php',
    'navbar.php',
    'floating-btn.php',
    'footer.php',
    'replace-footer.php'
];

$include_statement = "<?php include 'footer.php'; ?>\n";
// Robust regex to match `<footer...` to `</footer>` across multiple lines
// The 's' modifier allows '.' to match newline characters
$regex_pattern = '/<footer\b[^>]*>.*?<\/footer>/is';

$php_files = glob($directory . '/*.php');

$success_count = 0;
$skipped_count = 0;
$error_count = 0;

foreach ($php_files as $file) {
    if (in_array(basename($file), $exclude_files))
        continue;

    $content = file_get_contents($file);
    if ($content === false) {
        $error_count++;
        continue;
    }

    if (strpos($content, "include 'footer.php'") !== false) {
        echo "Skipped " . basename($file) . " (already has footer.php include)<br>";
        $skipped_count++;
        continue;
    }

    $new_content = preg_replace($regex_pattern, $include_statement, $content, -1, $count);

    if ($count > 0 && $new_content !== null) {
        if (file_put_contents($file, $new_content) !== false) {
            echo "Successfully replaced footer in " . basename($file) . "<br>";
            $success_count++;
        } else {
            $error_count++;
        }
    } else {
        echo "Skipped " . basename($file) . " (No footer tag found)<br>";
        $skipped_count++;
    }
}

echo "<h3>Summary:</h3>";
echo "Successfully updated: $success_count files<br>";
echo "Skipped: $skipped_count files<br>";
echo "Errors: $error_count files<br>";
?>