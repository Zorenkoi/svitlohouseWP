<?php

/*

Template Name: home

*/

?>

<!DOCTYPE html>
<html lang="ua">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

    <title>svitlohouse</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="main-img-container">
          <img
            src="<?php the_field("image-top"); ?>"
            alt="main product image"
            class="img-cover"
          />
        </div>

        <div class="header-item-container">
          <div class="header-item">
            <img src="<?php bloginfo("template_url") ?>/assets/images/lamp-icon-1.jpeg" alt="" class="header-item-img">

            <h2 class="header-item-text">Космічне сяйво</h2>
          </div>

          <div class="header-item">
            <img src="<?php bloginfo("template_url") ?>/assets/images/lamp-icon-2.jpeg" alt="" class="header-item-img">

            <h2 class="header-item-text">Bluetooth колонка</h2>
          </div>
          
          <div class="header-item">
            <img src="<?php bloginfo("template_url") ?>/assets/images/lamp-icon-3.jpeg" alt="" class="header-item-img">

            <h2 class="header-item-text">21 режим</h2>
          </div>

        </div>

        <div class="bg-black header-content">
          <h1 itemprop="name">Проектор світло</h1>

          <p class="header-price">
            <span itemprop="price"> <?php the_field("discounted-price"); ?>грн </span>
            <span class="crossed"><?php the_field("lamp-initial-price"); ?>грн </span>
          </p>

          <p class="header-additional-price">Другий проектор — <?php the_field("lamp-additional-price"); ?>грн</p>

          <a class="go-form-link" href="#form-section">
            <button class="go-form-button white-shadow"><?php the_field("go-form"); ?></button>
          </a>
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <section class="description-section">
          <div class="description-content">
            <h2><?php the_field("top-header"); ?></h2>

            <?php the_field("top-text"); ?>
          </div>
        </section>

        <section class="examples-section">
          <div class="swiper examples-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <?php 
              global  $post ;
              $myposts = get_posts ([
                  'numberposts' => -1 ,
                  'category' => 5 ,
              ]);

              if ( $myposts ) {
                  foreach ( $myposts  as  $post ) {
                      setup_postdata ( $post );
                      ?>

                      <div class="swiper-slide slide">
                        <div class="examples-slide-content">
                          <?php the_post_thumbnail(
                            array(1920, 1920),
                            array("class" => "img-cover")
                            ) ?>
                        </div>
                      </div>

                  <?php }} wp_reset_postdata (); ?>
              <!-- Slides -->
              
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination examples-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev examples-prev"></div>
            <div class="swiper-button-next examples-next"></div>
          </div>
        </section>

        <section class="about-section about-section-add">
          <div class="about-body">
            <div class="about-item">
              <img
                src="<?php bloginfo("template_url") ?>/assets/images/descriptions-0.png"
                alt="about image 1"
              />

              <div class="about-item-content">
                <h2>21 режим роботи</h2>
                <p>
                  Обирай між одноколірним та багатоколірним режимом. З лазером
                  або без. Додавай ефект хвилі і ще декілька секретних ефектів.
                </p>
              </div>
            </div>

            <div class="about-item">
              <img
                src="<?php bloginfo("template_url") ?>/assets/images/descriptions-1.png"
                alt="about image 2"
              />

              <div class="about-item-content">
                <h2>Дистанційне управління</h2>
                <p>Керуй проектором пультом на відстані до 10 метрів.</p>
              </div>
            </div>

            <div class="about-item">
              <img
                src="<?php bloginfo("template_url") ?>/assets/images/descriptions-2.png"
                alt="about image 3"
              />

              <div class="about-item-content">
                <h2>Вбудована Bluetooth колонка</h2>
                <p>
                  Включай свою улюблену музику і насолоджуйся яскравими
                  кольорами.
                </p>
              </div>
            </div>

            <div class="about-item">
              <img
                src="<?php bloginfo("template_url") ?>/assets/images/descriptions-3.png"
                alt="about image 4"
              />

              <div class="about-item-content">
                <h2>Налаштування таймера</h2>
                <p>
                  Проектор буде працювати, коли ти будеш засинати, а потім сам
                  вимкнеться.
                </p>
              </div>
            </div>

            <div class="about-item">
              <img
                src="<?php bloginfo("template_url") ?>/assets/images/descriptions-4.png"
                alt="about image 5"
              />

              <div class="about-item-content">
                <h2>Автоматична зміна кольорів</h2>
                <p>відповідно до музичного ритму</p>
              </div>
            </div>
          </div>
        </section>

        <section class="usage-section">
          <div class="usage-body">
            <h2><?php the_field("usage-header"); ?></h2>

            <div class="usage-list-container">
              <?php the_field("usage-list"); ?>
            </div>
          </div>
        </section>

        <section class="instructions-section instructions-section-add">
          <div class="instructions-body">
            <h2>інструкція</h2>
            <h3>
              Привіт! Раді, що наші проектори опинилися у ваших надійних руках.
              Щоб зоряне небо сяяло в кожному домі без перешкод, ми підготували
              декілька підказок:
            </h3>

            <div class="instructions-list-container">
              <ul>
                <li>
                  <p>
                    Приєднайте кінець кабелю зі штекером Туре-С до проектора.
                    Інший кінець з USB-штекером - блоку живлення або павербанку.
                  </p>
                </li>
                <li>
                  <p>Вставте 2 батарейки типу ААА в пульт.</p>
                </li>
                <li>
                  <p>Увімкніть пристрій за допомогою перемикача ON/OFF.</p>
                </li>
                <li>
                  <p>
                    Користуйтесь пультом, наводячи його на інфрачервоний порт,
                    який розташований на передній панелі проектора.
                  </p>
                </li>
                <li>
                  <p>
                    Проектор має вбудований динамік. Слухайте музику через
                    USB-флешку або під'єднайте свій смартфон через Bluetooth.
                    Оберіть ВТК10 або IGB-001 у списку доступних пристроїв на
                    телефоні.
                  </p>
                </li>
              </ul>
            </div>

            <small>
              Примітка: пристрій автоматично вимикається через 4 години
              використання.
            </small>
          </div>

          <div class="remote-img-container">
            <img
              src="<?php the_field("remote-image"); ?>"
              alt="remote controller image"
              class="img-cover"
            />
          </div>
        </section>

        <section class="questions-section">
          <div class="questions-body">
            <h2><?php the_field("question-header"); ?></h2>

            <div class="accordion-container">
              <div class="accordion">
                <div class="accordion-header">
                  <h3><?php the_field("question1"); ?></h3>
                  <div class="toggle-icon">+</div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-inner-content">
                    <?php the_field("answer1"); ?>
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion-header">
                  <h3><?php the_field("question2"); ?></h3>
                  <div class="toggle-icon">+</div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-inner-content">
                    <?php the_field("answer2"); ?>
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion-header">
                  <h3><?php the_field("question3"); ?></h3>
                  <div class="toggle-icon">+</div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-inner-content">
                    <?php the_field("answer3"); ?>
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion-header">
                  <h3><?php the_field("question4"); ?></h3>
                  <div class="toggle-icon">+</div>
                </div>
                <div class="accordion-content">
                  <div class="accordion-inner-content">
                    <?php the_field("answer4"); ?>
                  </div>
                </div>
              </div>
            </div>

            <a class="go-form-link questions-button" href="#form-section">
              <button class="go-form-button gray-shadow"><?php the_field("go-form"); ?></button>
            </a>
          </div>
        </section>

        <section class="reviews-section">
          <div class="reviews-body">
            <h2 class="reviews-header">відгуки наших клієнтів</h2>
            <div class="swiper reviews-swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                    global  $post ;

                    $myposts = get_posts ([
                        'numberposts' => -1 ,
                        'category' => 6 ,
                    ]);

                    if ( $myposts ) {
                        foreach ( $myposts  as  $post ) {
                            setup_postdata ( $post );
                            ?>

                        <div class="swiper-slide slide">
                            <div class="reviews-slide-content">
                              <?php the_post_thumbnail(
                              array(576, 1280),
                              array("class" => "img-contain")
                              ) ?>
                            </div>
                        </div>

                    <?php }} wp_reset_postdata (); ?>

              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination reviews-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev reviews-prev"></div>
              <div class="swiper-button-next reviews-next"></div>
            </div>
          </div>
        </section>

        <section class="delivery-section">
          <h2><?php the_field("order-details-header"); ?>а</h2>

          <div class="delivery-body">
            <div class="delivery-row">
              <div class="delivery-circle">
                <img
                  src="<?php bloginfo("template_url") ?>/assets/images/list.svg"
                  alt="delivery icon 1"
                  class="delivery-icon"
                />
              </div>

              <div class="delivery-text"><?php the_field("order-step1"); ?></div>
            </div>

            <div class="delivery-space"></div>

            <div class="delivery-row">
              <div class="delivery-circle">
                <img
                  src="<?php bloginfo("template_url") ?>/assets/images/user.svg"
                  alt="delivery icon 1"
                  class="delivery-icon"
                />
              </div>

              <div class="delivery-text">
                <?php the_field("order-step2"); ?>
              </div>
            </div>

            <div class="delivery-space"></div>

            <div class="delivery-row">
              <div class="delivery-circle">
                <img
                  src="<?php bloginfo("template_url") ?>/assets/images/truck.svg"
                  alt="delivery icon 1"
                  class="delivery-icon"
                />
              </div>

              <div class="delivery-text">
                <?php the_field("order-step3"); ?>
              </div>
            </div>

            <div class="delivery-space"></div>

            <div class="delivery-row">
              <div class="delivery-circle">
                <img
                  src="<?php bloginfo("template_url") ?>/assets/images/camera.svg"
                  alt="delivery icon 1"
                  class="delivery-icon"
                />
              </div>

              <div class="delivery-text">
                <?php the_field("order-step4"); ?>
              </div>
            </div>
          </div>
        </section>

        <article class="spaceman-article">
          <h2 class="spaceman-header"><?php the_field("spaceman-header"); ?></h2>

          <div class="spaceman-img-container">
            <img
              src="<?php the_field("img-spaceman-bottom"); ?>"
              alt="Проектор «Астронавт»"
              class="img-cover"
            />
          </div>

          <div class="spaceman-body">
            <p class="spaceman-price">Ціна — <span><?php the_field("spaceman-price"); ?>грн</span></p>

            <div class="spaceman-list-container">
              <?php the_field("spaceman-list"); ?>
            </div>
          </div>

          <div class="swiper spaceman-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
                <?php 
                  global  $post ;

                  $myposts = get_posts ([
                      'numberposts' => -1 ,
                      'category' => 7 ,
                  ]);

                  if ( $myposts ) {
                      foreach ( $myposts  as  $post ) {
                          setup_postdata ( $post );
                          ?>

                      <div class="swiper-slide slide">
                          <div class="spaceman-slide-content">
                            <?php the_post_thumbnail(
                            array(576, 1280),
                            array("class" => "img-cover")
                            ) ?>
                          </div>
                      </div>

                <?php }} wp_reset_postdata (); ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination spaceman-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev spaceman-prev"></div>
            <div class="swiper-button-next spaceman-next"></div>
          </div>

          <div class="spaceman-table-wrapper">
            <table class="spaceman-table">
              <thead>
                <tr>
                  <th><img src="<?php bloginfo("template_url") ?>/assets/images/table-logo.jpg" alt="logo image" /></th>
                  <th><img src="<?php bloginfo("template_url") ?>/assets/images/table-lamp.jpg" alt="lamp image" /></th>
                  <th>
                    <img src="<?php bloginfo("template_url") ?>/assets/images/table-spaceman.jpg" alt="spaceman image" />
                  </th>
                </tr>
                <tr>
                  <th>Назва</th>
                  <th>Проектор Svitlo</th>
                  <th>Проектор Астронавт</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">Ефект світіння</th>
                  <td>+</td>
                  <td>-</td>
                </tr>
                <tr>
                  <th scope="row">Кольорове небо</th>
                  <td>+</td>
                  <td>+</td>
                </tr>
                <tr>
                  <th scope="row">Космічна туманність</th>
                  <td>+</td>
                  <td>+</td>
                </tr>
                <tr>
                  <th scope="row">Вбудована колонка</th>
                  <td>+</td>
                  <td>-</td>
                </tr>
                <tr>
                  <th scope="row">Кількість кольорів</th>
                  <td>4</td>
                  <td>3</td>
                </tr>
                <tr>
                  <th scope="row">Поєднання кольорів між собою</th>
                  <td>+</td>
                  <td>+</td>
                </tr>
                <tr>
                  <th scope="row">Управління</th>
                  <td>Пульт</td>
                  <td>Пульт</td>
                </tr>
                <tr>
                  <th scope="row">Живлення</th>
                  <td>Розетка, павербенк</td>
                  <td>Розетка, павербенк</td>
                </tr>
                <tr>
                  <th scope="row">Площа покриття</th>
                  <td>Більша</td>
                  <td>Менша</td>
                </tr>
                <tr>
                  <th scope="row">Напрям Проекції</th>
                  <td>Тільки вгору</td>
                  <td>В будь яку точку</td>
                </tr>
                <tr>
                  <th scope="row">Ціна</th>
                  <td><?php the_field("discounted-price"); ?>грн</td>
                  <td><?php the_field("spaceman-price"); ?>грн</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>
      </div>

      <section class="form-section" id="form-section">
        <img
          src="<?php the_field("form-bg"); ?>"
          alt="form background"
          class="form-background"
        />
        <div class="form-blure"></div>

        <div class="container">
          <div class="form-body">
            <h3 class="form-header">
              Ціна <br />
              <span class="price"><?php the_field("discounted-price"); ?>грн</span>
              <span class="crossed"><?php the_field("lamp-initial-price"); ?>грн</span>
            </h3>

            <p>Другий проектор — <?php the_field("lamp-additional-price"); ?>грн</p>

            <div class="form-container">
              <?php echo do_shortcode('[contact-form-7 id="4e7b012" title="Форма"]') ?>
            </div>

            
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer-body">
        <address class="footer-contact-info">
          <p class="footer-address">Адреса: <span><?php the_field("address"); ?></span></p>
          <p><a href="tel:<?php the_field("real-phone1"); ?>"><?php the_field("phone1"); ?></a></p>
          <p class="footer-phone-2">
            <a href="tel:<?php the_field("real-phone2"); ?>"><?php the_field("phone2"); ?></a>
          </p>
          <p><time>Пн-Пт <?php the_field("time1"); ?></time></p>
          <p><time>Сб-Нд <?php the_field("time2"); ?></time></p>
        </address>

        <ul class="social-links">
          <li>
            <a
              href="<?php the_field("facebook"); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >Facebook</a
            >
          </li>
          <li>
            <a
              href="<?php the_field("twitter"); ?>"
              target="_blank"
              rel="noopener noreferrer"
              >Twitter</a
            >
          </li>
          <li>
            <a
              href="<?php the_field("instagram"); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class=""
              >Instagram</a
            >
          </li>
        </ul>
      </div>
    </footer>

    <!-- <script src="./assets/scripts/index.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    
    <?php wp_footer(); ?>
  </body>
</html>
