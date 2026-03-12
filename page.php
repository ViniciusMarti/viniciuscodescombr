<?php
require_once __DIR__ . '/includes/init.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$page = isset($data['pages'][$slug]) ? $data['pages'][$slug] : null;

if (!$page) {
    header("HTTP/1.0 404 Not Found");
    include '404.php';
    exit;
}

$page_title = $page['title'];
$page_description = $page['description'];
require_once __DIR__ . '/includes/header.php';
?>

<article class="container">
    <h1><?php echo $page['h1']; ?></h1>
    <div class="content">
        <?php echo $page['content']; ?>
    </div>
</article>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
