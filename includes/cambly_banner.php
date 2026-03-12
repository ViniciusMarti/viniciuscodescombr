<?php
// Tenta pegar a categoria atual ou usa uma padrão
$cat_slug = isset($current_cat) ? $current_cat : 'carreira-estudos-e-desenvolvimento';
$promo = get_category_info($cat_slug);
?>
<section class="promo-banner">
    <div class="promo-content">
        <div class="promo-brand">
            <img src="/static/images/cambly-logo.png" alt="Cambly Logo">
        </div>
        <h3><?php echo $promo['promo_title']; ?></h3>
        <p><?php echo $promo['promo_text']; ?></p>
        <div class="promo-price">
            <span class="term">A partir de</span>
            <span class="amount">R$ 74</span>
            <span class="term">/mês</span>
            <span class="badge">60% OFF</span>
        </div>
        <a href="https://www.cambly.com/invite/VINICIUSCODES?st=031124&referralCode=VINICIUSCODES" class="promo-cta" target="_blank">
            Quero minha aula grátis <i class="fas fa-arrow-right"></i>
        </a>
    </div>
    <div class="promo-image"></div>
</section>
