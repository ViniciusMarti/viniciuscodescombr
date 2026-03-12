<?php
require_once __DIR__ . '/includes/init.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$category = get_category_info($slug);

if (!$category) {
    header("HTTP/1.0 404 Not Found");
    include '404.php';
    exit;
}

$videos = isset($data['categories_videos'][$slug]) ? $data['categories_videos'][$slug] : [];
$page_title = $category['title'] . " | Vinícius Codes";
$current_cat = $slug;

require_once __DIR__ . '/includes/header.php';
?>

<div class="hero container">
    <div class="section-label">Categoria</div>
    <h1><?php echo $category['title']; ?></h1>
    <p class="subtitle"><?php echo $category['subtitle']; ?></p>
</div>

<div class="container">
    <div class="video-grid" style="margin-bottom: 40px;">
        <?php foreach ($videos as $v): ?>
            <a href="/videos/<?php echo $v['slug']; ?>" class="card">
                <div class="card-img-wrapper">
                    <img src="<?php echo $v['img']; ?>" alt="<?php echo $v['title']; ?>" class="card-img" loading="lazy">
                </div>
                <div class="card-title"><?php echo $v['title']; ?></div>
            </a>
        <?php endforeach; ?>
    </div>

    <?php include __DIR__ . '/includes/cambly_banner.php'; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
