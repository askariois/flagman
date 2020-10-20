<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <title></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
   <!-- Заголовочный блок Header block-->
   <header>
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="d-flex align-items-end">
                  <h1 class="header__heading mr-3"><?php echo carbon_get_post_meta('7', 'crb_bl_title'); ?></h1>
                  <?php
                  if (carbon_get_post_meta('7', 'crb_show_hit')) {
                     echo '
                     <div class="header__hit">
                     Хит продаж
                  </div>';
                  } else {
                     echo '';
                  }
                  ?>

               </div>
            </div>
         </div>
      </div>
   </header>



   <!-- Заголовочный блок Header block-->



   <!-- Основной блок Home block -->
   <section class="wp__home">
      <div class="container">
         <div class="row">
            <div class="col-lg-auto col-md-6 col-sm-6 order-xl-1 order-lg-1 order-1">
               <div class="home__price">
                  <div class="home__price-heading">
                     Цена (без НДС)
                  </div>
                  <span><?php echo carbon_get_post_meta('7', 'crb_bl_price'); ?> </span>
               </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6  ml-xl-2 order-xl-2 order-lg-3 order-3">
               <div class="home__diametr">
                  <div class="home__diametr-heading">
                     Диаметр
                  </div>
                  <ul>
                     <?php
                     $diametrs = carbon_get_post_meta('7', 'crb_bl_diametr');
                     foreach ($diametrs as $diametr) :
                     ?>
                        <li>
                           <span><?php echo $diametr['crb_bl_diametr_raz']; ?></span>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6  ml-xl-3 order-xl-3 order-lg-2 order-2">
               <div class="home__pack">
                  <div class="home__pack-heading">
                     Упаковка
                  </div>
                  <ul>
                     <?php
                     $packs = carbon_get_post_meta('7', 'crb_bl_pack');
                     foreach ($packs as $pack) :
                     ?>
                        <li>
                           <span><?php echo $pack['crb_bl_pack_ves']; ?></span>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
            </div>
            <div class="col-lg-auto col-md-6 col-sm-6  ml-xl-2 order-xl-4 order-lg-4 order-4">
               <div class="home__electro">
                  <div class="home__electro-heading">
                     Тип электродов Э50А
                  </div>
                  <div class="home__electro-img">

                  </div>
                  <!-- <img src="img/electro-img.svg" alt=""> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-5 col-12 order-lg-5 order-5">
               <div class="home__callback">
                  <a href="#popup" class="popup-link">оформить заявку</a>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- Основной блок Home block -->

   <!-- Модальное окно modal -->
   <div id="popup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <div class="popup__content-heading">
               <a href="#header" class="popup__close close-popup"><img src="img/close.svg" alt=""></a>
               <div class="popup__title">заявка на ПЭ LB-52U ГОСТ</div>
            </div>
            <div class="popup__text">
               <form action="#" method="post" id="new-form">
                  <input name="user_name" type="text" placeholder="Имя" required="">
                  <input name="user_phone" type="text" placeholder="Телефон" required="">
                  <input name="user_offer" type="text" placeholder="Email" required="">
                  <label class="callback__checkbox-second">
                     <input type="checkbox" required="">
                     <span class="checkmark"></span>
                     <a href="#popup" class="popup__politic">Даю согласие на обработку персональных данных</a><br><br>
                  </label>
                  <input type="submit" name="submit" class="btn send-btn" value="Отправить">
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- Модальное окно modal -->


   <?php wp_footer(); ?>
</body>

</html>