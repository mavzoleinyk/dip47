<?php
/*
 * This is the child theme for Total theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'neurochild_enqueue_styles' );
function neurochild_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array('parent-style'));
    wp_enqueue_style( 'font-icons', get_stylesheet_directory_uri() . '/assets/css/font-icons.css', array('parent-style'));
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/theme-style.css', array('parent-style'));
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    //wp_enqueue_script('bootstrap-theme', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    //wp_enqueue_script('flickity-js', get_stylesheet_directory_uri() . '/assets/js/flickity.pkgd.min.js', array('jquery'), false, true);
    //wp_enqueue_script('easing-js', get_stylesheet_directory_uri() . '/assets/js/easing.min.js', array('jquery'), false, true);
    //wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl-carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script('modernizr-js', get_stylesheet_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), false, true);
    wp_enqueue_script('calc_script-js', get_stylesheet_directory_uri() . '/assets/js/calc_script.js', array('jquery'), false, true);
    wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, true);
}
/*
 * Your code goes below
 */

//  Actions
add_action( 'widgets_init', 'cust_widgets' );


// Some weare
function cust_widgets(){
    register_sidebar([
        'name' => 'Виджет для размещения копирайта',
        'id' => 'cust_footer_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 1',
        'id' => 'cust_sidebar_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 2',
        'id' => 'cust_sidebar_2',
		'before_widget' => '<aside id="%1$s" class="footer-widget widget widget__custom-block %2$s clr">',
		'after_widget'  => '</aside>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
    ]);
}

function mw_faqhook_page_1666717451586() { 
    if(is_page ("393")){ 
    ?> 
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Вопрос такой - можно ли пробить документ по какой-то единой базе для его проверки ? Будут с этим проблемы?","acceptedAnswer":[{"@type":"Answer","text":"Единого реестра дипломов в России не существует - каждый ВУЗ ведёт свой учёт в бумажном виде и индивидуально. Поэтому проверить для проверки подлинности работодателю придётся отправлять письменный запрос в учебное заведение."}]},{"@type":"Question","name":"Добрый день. Интересует возможность приобретения документа о высшем образовании - он доступен для покупки?","acceptedAnswer":[{"@type":"Answer","text":"Да, вы можете заказать любой документ о высшем образовании по выбранной специальности как онлайн, так и по телефону."}]},{"@type":"Question","name":"Вопрос по поводу работодателя - проверяют ли купленные дипломы и если да, то можно ли выявить, что он изготовлен у вас?","acceptedAnswer":[{"@type":"Answer","text":"В большинстве случаев диплом не проверяют - это формальность, на которую часто даже не отвечают ВУЗы. Кроме того, мы обеспечиваем полную конфиденциальность и не передаём данные клиентов в третьи руки."}]},{"@type":"Question","name":"Со специальностью диплома всё понятно, но что делать с дипломной работой? Указать её можно или вы сами всё делаете?","acceptedAnswer":[{"@type":"Answer","text":"Мы выбираем тему дипломной работы на основе специальности, указанной в нём. Однако вы можете выбрать её и самостоятельно, если она будет соответствовать данным."}]},{"@type":"Question","name":"Можно срочно заказать диплом?","acceptedAnswer":[{"@type":"Answer","text":"Сроки изготовления диплома занимают от 2 до 3 дней, остальное время - доставка, которая зависит от расстояния. Подробнее можно узнать у менеджера."}]},{"@type":"Question","name":"Вкладыш с оценками входит в стоимость диплома или это отдельный документ?","acceptedAnswer":[{"@type":"Answer","text":"При заказе диплома он входит в его комплект, как и обложка. Однако вы можете заказать вкладыш отдельно для уже существующего диплома - для этого нам нужна отсканированная копия документа. "}]},{"@type":"Question","name":"Смотрел другие сайты по заказу дипломов и хочу узнать - какие тут гарантии и преимущества?","acceptedAnswer":[{"@type":"Answer","text":"Мы отвечаем всем запросам клиента, учитываем его пожелания, а также гарантируем высокое качество и подлинность документа."}]},{"@type":"Question","name":"Нахожусь в Красноярске, тут ожидаемо существуют проблемы с доставкой. Можно ли заказать сюда диплом?","acceptedAnswer":[{"@type":"Answer","text":"Да, наша компания изготавливает и доставляет дипломы в любой город России"}]},{"@type":"Question","name":"","acceptedAnswer":[{"@type":"Answer","text":""}]},{"@type":"Question","name":"Здравствуйте. Какая стоимость диплома?","acceptedAnswer":[{"@type":"Answer","text":"Зависит от многих индивидуальных факторов - подробнее можно узнать у менеджера после оформления заявки."}]},{"@type":"Question","name":"Допустим, я заказал диплом, а он пришёл с ошибкой, т.к. использовать его нельзя. Заказывать новый или жаловаться в поддержку?","acceptedAnswer":[{"@type":"Answer","text":"Если вы нашли ошибку в своём документе, сообщите об этом нашим специалистам и мы бесплатно заменим документ на верный."}]}]}</script><!-- Generated by https://www.matthewwoodward.co.uk/ --> 
    <?php 
    } 
} 
add_action("wp_head", "mw_faqhook_page_1666717451586");

// Отключаем любые CSS стили плагинов
// function custom_dequeue() {
//     wp_dequeue_style('wpex-style');
//     wp_dequeue_style('tablepress-default');
//     wp_dequeue_style('wpex-tablepress');
//     wp_dequeue_style('mediaelement');
//     wp_dequeue_style('wp-mediaelement');
//     wp_dequeue_style('');
//     wp_dequeue_style('');
//     wp_dequeue_style('wpex-mobile-menu-breakpoint-max');
//     wp_dequeue_style('wpex-mobile-menu-breakpoint-min');
//     wp_dequeue_style('');
//     wp_dequeue_style('ticons');
//     wp_dequeue_style('');
//     wp_dequeue_style('');
//     if ( is_page(10) ) {
// 		wp_dequeue_style( 'wpcdt-public-css' );
//         wp_dequeue_style( 'vcex-shortcodes' );
//         wp_dequeue_style( '' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );

//Отключаем любые js скрипты
// function project_dequeue_unnecessary_scripts() {
//     wp_deregister_script('mediaelement-core');
//     wp_deregister_script('mediaelement-migrate');
//     wp_deregister_script('wp-mediaelement');
//     wp_deregister_script('mediaelement-vimeo');
//     wp_deregister_script('');
//     wp_deregister_script('');
//     wp_deregister_script('sidr');
//     wp_deregister_script('hoverintent');
//     wp_deregister_script('supersubs');
//     wp_deregister_script('superfish');
//     wp_deregister_script('easing');
//     if ( is_page(10) ) {
// 		wp_dequeue_script( '' );
//         wp_dequeue_script( 'image_zoooom' );
//         wp_dequeue_script( 'image_zoooom-init' );
//         wp_dequeue_script( '' );
// 	}
// }
// add_action( 'wp_print_scripts', 'project_dequeue_unnecessary_scripts', 9999 );





/**
 * Изменяет хлебные крошки Yoast.
 *
 * Вывести в шаблоне: do_action('pretty_breadcrumb');
 * https://wp-kama.ru/plugin/yoast/kak-izmenit-vyorstku-hlebnyh-kroshek-yoast-na-svoyu
 */
class Pretty_Breadcrumb
{

    /**
     * Какую позицию занимает элемент в цепочке хлебных крошек.
     *
     * @var int
     */
    private $el_position = 0;

    public function __construct()
    {
        add_action('pretty_breadcrumb', [$this, 'render']);
    }

    /**
     * Выводит на экран сгенерированные крошки.
     *
     * @return void
     */
    public function render()
    {
        if (!function_exists('yoast_breadcrumb')) {
            return;
        }

        // Регистрируем фильтры для изменения дефолтной вёрстки крошек
        add_filter('wpseo_breadcrumb_single_link', [$this, 'modify_yoast_items'], 10, 2);
        add_filter('wpseo_breadcrumb_output', [$this, 'modify_yoast_output']);
        add_filter('wpseo_breadcrumb_output_wrapper', [$this, 'modify_yoast_wrapper']);
        add_filter('wpseo_breadcrumb_separator', '__return_empty_string');

        // Выводим крошки на экран
        yoast_breadcrumb();

        // Отключаем фильтры
        remove_filter('wpseo_breadcrumb_single_link', [$this, 'modify_yoast_items']);
        remove_filter('wpseo_breadcrumb_output', [$this, 'modify_yoast_output']);
        remove_filter('wpseo_breadcrumb_output_wrapper', [$this, 'modify_yoast_wrapper']);
        remove_filter('wpseo_breadcrumb_separator', '__return_empty_string');

        // Обнуляем счётчик
        $this->el_position = 0;
    }

    /**
     * Изменяет html код li элементов.
     *
     * @param string $link_html Дефолтная вёрстка элемента хлебных крошек.
     * @param array $link_data Массив данных об элементе хлебных крошек.
     *
     * @return string
     */
    function modify_yoast_items($link_html, $link_data)
    {
        // Шаблон контейнера li
        $li = '<span itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem" %s>%s</span>';

        // Содержимое li в зависимости от позиции элемента
        if (strpos($link_html, 'breadcrumb_last') === false) {
            $li_inner = sprintf('
                <a itemprop="item" href="%s" class="pathway">
                    <span itemprop="name">%s</span>
                </a>
            ', $link_data['url'], $link_data['text']);
            $li_inner .= '<span class="divider"> / </span>';
            $li_class = '';
        } else {
            $li_inner = sprintf('<span itemprop="name">%s</span>', $link_data['text']);
            $li_class = 'class="active"';
        }

        $li_inner .= sprintf('<meta itemprop="position" content="%d"/>', ++$this->el_position);

        // Вкладываем сформированное содержание в li и возвращаем полученный элемент хлебных крошек.
        return sprintf($li, $li_class, $li_inner);
    }

    /**
     * Возвращает псевдо wrapper, который в будущем будет вырезан из вёрстки.
     * Если этого не сделать, то будущие li будут обёртнуты в единый span Yoast'ом.
     *
     * @return string
     */
    function modify_yoast_wrapper()
    {
        return 'wrapper'; // Будущий "уникальный" тег для вырезки из html
    }

    /**
     * Изменяет дефолтный html код крошек Yoast.
     *
     * @param string $html
     *
     * @return string
     */
    function modify_yoast_output($html)
    {
        // Убираем псевдо wrapper
        $html = str_replace(['<wrapper>', '</wrapper>'], '', $html);

        // Формируем контейнер для li элементов
        $ul = '<nav itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList" class="breadcrumb site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix">%s</nav>';

        // Вставляем в контейнер li элменты
        $html = sprintf($ul, $html);

        return $html;
    }
}

new Pretty_Breadcrumb();



