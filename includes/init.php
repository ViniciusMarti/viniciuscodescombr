<?php
$data = json_decode(file_get_contents(__DIR__ . '/../data/site_data.json'), true);

$categories_info = [
    "tecnologia-e-reviews" => [
        "title" => "Tecnologia e Reviews",
        "subtitle" => "Descubra reviews sinceros, guias de gadgets e as melhores dicas para dominar seus eletrônicos.",
        "promo_title" => "Evolua na carreira de TI dominando o inglês",
        "promo_text" => "O mercado de tecnologia fala inglês. Com o plano <strong>Pequenos Grupos</strong>, aprenda com tutores nativos e impulsione seu currículo global no conforto de casa."
    ],
    "nomadismo-e-viagens" => [
        "title" => "Nomadismo e Viagens",
        "subtitle" => "Descubra destinos incríveis, dicas de economia e como viver a liberdade do trabalho remoto.",
        "promo_title" => "Destrave seu inglês para ganhar o mundo",
        "promo_text" => "O plano <strong>Pequenos Grupos</strong> é a porta de entrada para a fluência. Aprenda e pratique na estrada com tutores 100% nativos e conecte-se com novas culturas."
    ],
    "financas-pessoais-e-economia" => [
        "title" => "Finanças Pessoais e Economia",
        "subtitle" => "Aprenda a cuidar do seu dinheiro, economizar nas compras e investir no seu futuro com dicas práticas.",
        "promo_title" => "Invista no seu inglês e multiplique oportunidades",
        "promo_text" => "Fluência é o melhor investimento. No plano <strong>Pequenos Grupos</strong> do Cambly, você pratica situações reais com nativos e acelera seu crescimento profissional."
    ],
    "lar-decoracao-e-vida-solo" => [
        "title" => "Lar, Decoração e Vida Solo",
        "subtitle" => "Dicas de decoração, organização e tudo o que você precisa para viver bem morando sozinho.",
        "promo_title" => "A casa é sua, o mundo também",
        "promo_text" => "O plano <strong>Pequenos Grupos</strong> do Cambly cabe na sua rotina de casa. Pratique inglês com nativos e sinta-se em qualquer lugar do mundo sem sair do sofá."
    ],
    "carreira-estudos-e-desenvolvimento" => [
        "title" => "Carreira, Estudos e Desenvolvimento",
        "subtitle" => "Acelere seu crescimento! Dicas de carreira, marketing digital e guias de estudo para o seu sucesso.",
        "promo_title" => "Chegue mais longe conversando com nativos",
        "promo_text" => "Um objetivo claro precisa de um plano claro. O plano <strong>Pequenos Grupos</strong> do Cambly oferece aulas guiadas com tutores estrangeiros para você alcançar a fluência mais rápido."
    ]
];

function get_category_info($slug) {
    global $categories_info;
    return isset($categories_info[$slug]) ? $categories_info[$slug] : null;
}
