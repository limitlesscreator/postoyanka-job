<?php

/**
 * GalleryWidget виджет отрисовки галереи изображений
 *
 * @category YupeWidget
 * @package  yupe.modules.gallery.widgets
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.5.3
 * @link     http://yupe.ru
 *
 */

Yii::import('application.modules.gallery.models.*');

class OwlCarouselWidget extends yupe\widgets\YWidget
{
    // сколько изображений выводить на одной странице
    public $limit = 30;

    // ID-галереи
    public $galleryId;

    // Галерея
    public $gallery;

    public $view = 'owlview';

    public $options = [
        'items'					=> 1,
		'loop'					=> true,	
		'autoplay'				=> true,
		'autoplaySpeed'			=> 1300,
		'autoplayHoverPause'	=> false,
		'smartSpeed'			=> 350,
		'fluidSpeed'			=> 150,
		'dragEndSpeed'			=> 150,
		'animateOut'			=> 'fadeOut',
		'animateIn'				=> 'fadeIn',
		'nav'					=> false,
		'responsiveClass'		=> false,
    ];
	
    /**
     * Запускаем отрисовку виджета
     *
     * @return void
     */
    public function run()
    {
        Yii::app()->clientScript->registerCssFile(
            Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('application.modules.gallery.views.assets.css') . '/owl.carousel.min.css'
            )
        );
		
        Yii::app()->clientScript->registerCssFile(
            Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('application.modules.gallery.views.assets.css') . '/owl.theme.default.min.css'
            )
        );
		
		$options = CJavaScript::encode($this->options);
		
		Yii::app()->getClientScript()->registerScript($this->galleryId, "$('.owl-carousel-{$this->galleryId}').owlCarousel({$options})");
		
        $dataProvider = new CActiveDataProvider(
            'ImageToGallery', [
                'criteria'   => [
                    'condition' => 't.gallery_id = :gallery_id',
                    'params'    => [':gallery_id' => $this->galleryId],
                    'limit'     => $this->limit,
                    'order'     => 't.position ASC',
                    'with'      => 'image',
                ],
                'pagination' => ['pageSize' => $this->limit],
            ]
        );

        $this->render(
            $this->view,
            [
				'id'			=> $this->galleryId,
                'dataProvider' 	=> $dataProvider,
                'gallery'      	=> $this->gallery,
            ]
        );
    }
}
