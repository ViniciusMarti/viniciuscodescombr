<?php
require_once __DIR__ . '/includes/init.php';
$slug = isset($_GET['slug']) ? strtolower($_GET['slug']) : '';
$video = isset($data['videos'][$slug]) ? $data['videos'][$slug] : null;

if (!$video) {
    header("HTTP/1.0 404 Not Found");
    include '404.php';
    exit;
}

// Tenta encontrar a categoria do vídeo para o banner
$current_cat = 'default';
if (isset($data['categories_videos'])) {
    foreach ($data['categories_videos'] as $cat => $v_list) {
        foreach ($v_list as $v_info) {
            if (isset($v_info['slug']) && $v_info['slug'] === $slug) {
                $current_cat = $cat;
                break 2;
            }
        }
    }
}

$page_title = $video['seo_title'];
$page_description = $video['description'];
require_once __DIR__ . '/includes/header.php';

// Split content for banner insertion
$content = $video['content'];
$p_end = strpos($content, '</p>');
if ($p_end !== false) {
    $content_before = substr($content, 0, $p_end + 4);
    $content_after = substr($content, $p_end + 4);
} else {
    $content_before = $content;
    $content_after = '';
}
?>

<article class="container">
    <h1><?php echo $video['h1']; ?></h1>
    <div class="video-wrapper">
        <div class="video-container">
            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" frameborder="0" height="100%" src="https://www.youtube.com/embed/<?php echo $video['yt_id']; ?>?enablejsapi=1" title="<?php echo $video['h1']; ?>" width="100%"></iframe>
        </div>
    </div>
    
    <div class="content">
        <?php echo $content_before; ?>
        
        <?php include __DIR__ . '/includes/cambly_banner.php'; ?>
        
        <?php echo $content_after; ?>
    </div>
</article>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
