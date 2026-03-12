<?php
// Tenta pegar a categoria atual ou usa uma padrão
$cat_slug = isset($current_cat) ? $current_cat : 'default';
$promo = get_category_info($cat_slug);

// Valores padrão se não houver promoção específica
$promo_img = isset($promo['promo_img']) ? $promo['promo_img'] : '/images/cambly-01.webp';
$price_old = isset($promo['promo_price_old']) ? $promo['promo_price_old'] : '93';
$price_new = isset($promo['promo_price_new']) ? $promo['promo_price_new'] : '37';
?>
<section class="promo-banner">
    <div class="promo-content">
        <div class="promo-brand">
            <img src="/static/images/cambly-logo.png" alt="Cambly Logo">
        </div>
        <h3><?php echo $promo['promo_title']; ?></h3>
        <p><?php echo $promo['promo_text']; ?></p>
        
        <ul class="promo-benefits">
            <li><i class="fas fa-check-circle"></i> Tutores 100% nativos de língua inglesa</li>
            <li><i class="fas fa-check-circle"></i> Aulas em pequenos grupos com um tutor + 1 ou 2 outros alunos</li>
            <li><i class="fas fa-check-circle"></i> Atividades ilimitadas de pronúncia, gramática e vocabulário</li>
        </ul>


        <div class="promo-price">
            <div class="price-details">
                <span class="price-old">A partir de R$<?php echo $price_old; ?>/mês</span>
                <div class="price-new">
                    <span class="amount">R$ <?php echo $price_new; ?></span>
                    <span class="term">/mês</span>
                </div>
            </div>
            <span class="badge">MENOR PREÇO</span>
        </div>
        
        <a href="https://www.cambly.com/invite/VINICIUSCODES?st=031124&referralCode=VINICIUSCODES" class="promo-cta" target="_blank">
            Garanta Pequenos Grupos <i class="fas fa-arrow-right"></i>
        </a>
        
        <p class="disclaimer">
            * Preço sujeito a alteração sem aviso prévio.
        </p>
    </div>
    <div class="promo-image" style="background-image: url('<?php echo $promo_img; ?>');"></div>
</section>
