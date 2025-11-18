
<?php

$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getPosts() {
    return [
        [
            'album-title' => 'The new abnormal',
            'artist' => 'The Strokes',
            'type-review' => 'Album',
            'cover-img' => 'portada_the_new_abnormal_strokes.jpg',
            'user-img' => 'https://img.daisyui.com/images/profile/demo/yellingcat@192.webp',
            'user-name' => 'Daniel_azul13',
            'review-title' => 'Lo mejor que he escuchado en un tiempo',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus officia eligendi soluta adipisci minima eaque quos corporis tempore voluptas itaque culpa quidem blanditiis quae velit, nihil dignissimos error recusandae reiciendis?',
            'likes' => '14',
            'comments' => '5'
        ],
        [
            'album-title' => 'Dont tap the glass',
            'artist' => 'Tyler, the creater',
            'type-review' => 'Album',
            'cover-img' => 'dont_tap_the_glass_cover.jpg',
            'user-img' => 'https://img.daisyui.com/images/profile/demo/yellingcat@192.webp',
            'user-name' => 'Alejandro_chromium',
            'review-title' => 'Buen sonido, pero sin impacto',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus officia eligendi soluta adipisci minima eaque quos corporis tempore voluptas itaque culpa quidem blanditiis quae velit, nihil dignissimos error recusandae reiciendis?',
            'likes' => '20',
            'comments' => '3'
        ],
        [
            'album-title' => 'DAMN',
            'artist' => 'Kendrick Lamar',
            'type-review' => 'Album',
            'cover-img' => 'DAMN.jpg',
            'user-img' => 'https://img.daisyui.com/images/profile/demo/yellingcat@192.webp',
            'user-name' => 'User_name',
            'review-title' => 'Sin duda demuestra por que es un hito en la historia del rap ',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus officia eligendi soluta adipisci minima eaque quos corporis tempore voluptas itaque culpa quidem blanditiis quae velit, nihil dignissimos error recusandae reiciendis?',
            'likes' => '18',
            'comments' => '8'
        ],
        [
            'album-title' => 'En El Palacio de Bellas Artes',
            'artist' => 'Juan Gabriel',
            'type-review' => 'Album',
            'cover-img' => 'juan_gabriel_bellas_artes.jpg',
            'user-img' => 'https://img.daisyui.com/images/profile/demo/yellingcat@192.webp',
            'user-name' => 'Alicia_chamoy',
            'review-title' => 'La cima del divo de Juarez',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus officia eligendi soluta adipisci minima eaque quos corporis tempore voluptas itaque culpa quidem blanditiis quae velit, nihil dignissimos error recusandae reiciendis?',
            'likes' => '32',
            'comments' => '10'
        ]

    ];
}

function getCards(){
    return [
        [
            'activity' => 'Sube tu Música',
            'img' => 'portada_the_new_abnormal_strokes.jpg',
            'description' => 'Comparte tus creaciones musicales en esta gran comunidad de artistas.',
            'text-btn' => 'Subir'
        ]
    ];
}


?>