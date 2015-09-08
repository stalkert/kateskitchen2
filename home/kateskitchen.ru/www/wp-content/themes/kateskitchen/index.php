<?php get_header(); ?> 
        <div class="row">
            <div class="col-md-3" id="left_sidebar">
                <button type="button" id="button_left_menu" class="btn btn-default title1 red btn-lg">Рецепты<span id="caret_left_menu" class="caret"></span></button>
                <ul id="recepty" class="nav nav-pills nav-stacked">

                    <h2 class="title1 red" id="title_recepty">Рецепты</h2>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="<?php echo get_category_link(12); ?>">Напитки, Коктейли, Пунши и Гроги</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Горячие закуски, Легкие закуски и Маленькие блюда</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Супы</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Салаты</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Картофель, Кукуруза, Бобы</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Паста,Рис, Зерновые и Фарши(Начинки)</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Сендвичи, Пицца и Закусочные Пироги</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Домашняя птица и Дичь</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Говядина,Телятина, Баранина, Свинина</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Соусы, Приправы, Специи, Маринады и Консервы </a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Завтраки и Бранчи</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Хлеб и Выпечка </a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Печенья и Конфеты </a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Холодные Десерты</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Кексы, пироги </a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Пироги, Торты, и Другие Десерты</a></li>
                    <li class="divider"></li>
                    <span class="glyphicon glyphicon-star-empty left_menu"></span>
                    <li><a href="#">Наши рецепты для американцев</a></li>

                </ul>

            </div>
            <div class="col-md-6" id="content">
                <div id="carousel-example-generic" class="carousel slide">
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="active item"><img src="<?php bloginfo( 'template_url' ); ?>/img/50.jpg"></div>
                        <div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/60.jpg"></div>
                        <div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/70.jpg"></div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

                <div>
                    <h2>
                        Свежие рецепты этой недели
                    </h2>
                    <div class="dotted"></div>
                    <?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
					<div class="post">
					
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_content(); ?>
                    </div>
					<?php endwhile; ?>			
					<?php endif; ?>
                    <div class="post">
                        <h3>ПЕЧЕНЬЕ С МАННОЙ КРУПОЙ "ЗАГАДКА"</h3>
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/pre_50.JPG" class="foto_prev">
                        <p>Удивительное, суперхрустящее, печенье загадка! </p>
                        <p class="post_amount_photo">13 фото</p>
                        <p class="amount_comment">»Подробнее  0 Comment</p>
                    </div>
                    <div class="post">
                        <h3>ГРЕНКИ НЕМЕЦКИЕ</h3>
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/pre_50.JPG" class="foto_prev">
                        <p>Горячие, мягкие и хрустящие, сладкие и сочные, это гренки! Это лакомство!</p>
                        <p class="post_amount_photo">20 фото</p>
                        <p class="amount_comment">»Подробнее  2 Comment</p>
                    </div>

                </div>
                <div id="pagination">
                    <ul class="pagination pagination-lg">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" id="right_sidebar">
                <div>
                    <h2 class="title1">О проекте</h2>
                    <p>Сайт Катина Кухня посвящен книге  The Essential New York Times Cook Book .</p>
                    <p>По рецептам которой, я с друзьями готовлю и рассказываю об этом.</p>
                    <p>Смотрите, готовьте, комментируйте  и  ешьте с любовью - будет вкуснее!</p>
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/p2.jpg" id="kate">
                    <p>Подробнее о проекте можно прочитать тут.</p>
                </div>
                <div>
                    <h2 class="title1">Лайкнуть</h2>
                </div>
                <div>
                    <h3> Последние комментарии</h3>
                    <ul>
                        <li> <i class="glyphicon glyphicon-user"></i> <p>мими	Обалденно вкусный пирог, нежный, ароматный и не сухой, получилось как раз то, что я хотела! Спасибо вам за рецепт</p></li>
                        <li><i class="glyphicon glyphicon-user"></i><p>Дана	Мнямммм!!! Ждем с нетерпением новых рецептов, Катюша!!!</p></li>
                        <li><i class="glyphicon glyphicon-user"></i><p>Дана	Обязательно приготовим, может моя вреднуля доця такое съест?!!! Супер просто и вкусно!!! Спасибо Катюша!!!</p></li>
                        <li><i class="glyphicon glyphicon-user"></i><p>Ирина	Приготовила, это очень вкусно, и еще вспомнила, как мама гренки готовила с вареньем. Вкуснота, а дети у вас такие веселые.</p></li>

                    </ul>
                </div>
            </div>

        </div>
     <?php get_footer(); ?>    