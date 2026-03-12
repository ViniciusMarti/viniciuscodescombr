<?php
$data = json_decode(file_get_contents(__DIR__ . '/../data/site_data.json'), true);

$categories_info = [
    "tecnologia-e-reviews" => [
        "title" => "Tecnologia e Reviews",
        "subtitle" => "Descubra reviews sinceros, guias de gadgets e as melhores dicas para dominar seus eletrônicos.",
        "promo_title" => "Comece hoje. Aprenda para a vida.",
        "promo_text" => "Pequenos grupos no Cambly: Bom para quem quer melhorar suas habilidades de fala e escuta com uma combinação de falantes nativos de inglês e alunos com outros sotaques. Para adultos maiores de 21 anos.",
        "promo_img" => "/images/cambly-02.webp",
        "promo_price_old" => "93",
        "promo_price_new" => "37"
    ],
    "nomadismo-e-viagens" => [
        "title" => "Nomadismo e Viagens",
        "subtitle" => "Descubra destinos incríveis, dicas de economia e como viver a liberdade do trabalho remoto.",
        "promo_title" => "Domine o inglês e trabalhe de qualquer lugar",
        "promo_text" => "Com o plano Pequenos Grupos do Cambly, você pratica situações reais com nativos. Perfeito para quem quer melhorar a fala e escuta com uma combinação de sotaques globais.",
        "promo_img" => "/images/cambly-03.webp",
        "promo_price_old" => "93",
        "promo_price_new" => "37"
    ],
    "financas-pessoais-e-economia" => [
        "title" => "Finanças Pessoais e Economia",
        "subtitle" => "Aprenda a cuidar do seu dinheiro, economizar nas compras e investir no seu futuro com dicas práticas.",
        "promo_title" => "O melhor investimento no seu currículo",
        "promo_text" => "Invista no seu inglês com Pequenos Grupos. Aulas com nativos e alunos do mundo todo para acelerar seu desenvolvimento profissional e garantir melhores oportunidades.",
        "promo_img" => "/images/cambly-04.webp",
        "promo_price_old" => "93",
        "promo_price_new" => "37"
    ],
    "lar-decoracao-e-vida-solo" => [
        "title" => "Lar, Decoração e Vida Solo",
        "subtitle" => "Dicas de decoração, organização e tudo o que você precisa para viver bem morando sozinho.",
        "promo_title" => "A casa é sua, a fluência também",
        "promo_text" => "O plano Pequenos Grupos cabe na sua rotina. Pratique inglês no conforto do seu lar com tutores nativos e sinta-se preparado para qualquer conversa no mundo.",
        "promo_img" => "/images/cambly-05.webp",
        "promo_price_old" => "93",
        "promo_price_new" => "37"
    ],
    "carreira-estudos-e-desenvolvimento" => [
        "title" => "Carreira, Estudos e Desenvolvimento",
        "subtitle" => "Acelere seu crescimento! Dicas de carreira, marketing digital e guias de estudo para o seu sucesso.",
        "promo_title" => "Acelere sua carreira com inglês fluente",
        "promo_text" => "Um objetivo profissional pede o plano certo. No Pequenos Grupos, você pratica conversação real, gramática e vocabulário com especialistas nativos e alunos internacionais.",
        "promo_img" => "/images/cambly-06.webp",
        "promo_price_old" => "93",
        "promo_price_new" => "37"
    ],
    "default" => [
        "title" => "Aprenda Inglês no Cambly",
        "promo_title" => "Comece hoje. Aprenda para a vida.",
        "promo_text" => "Pequenos grupos: Bom para quem quer melhorar a fala e escuta com nativos e alunos do mundo todo. Planos que cabem no seu bolso e na sua rotina.",
        "promo_img" => "/images/cambly-01.webp",
        "promo_price_old" => "93",
        "promo_price_new" => "37"
    ],
    "institucional" => [
        "title" => "Invista no seu Futuro",
        "promo_title" => "Inglês real para o mundo real",
        "promo_text" => "No Pequenos Grupos do Cambly, você aprende com tutores 100% nativos em aulas dinâmicas. O empurrão que sua carreira e viagens precisam.",
        "promo_img" => "/images/cambly-07.webp",
        "promo_price_old" => "93",
        "promo_price_new" => "37"
    ]
];

function get_category_info($slug) {
    global $categories_info;
    if (isset($categories_info[$slug])) {
        return $categories_info[$slug];
    }
    return $categories_info['default'];
}
