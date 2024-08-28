<?php get_header()?>



    <section class="menuList bg--primary">
      <div class="container">
        <div class="menuList__wrapper">
          <div class="menuList__content">
            <div class="menuList__title">
              <h2>Indian Beef Items</h2>
            </div>


            <div class="menuList__menu">

            <?php $beef = new WP_Query(array(
            'post_type' => 'menus',
            'posts_per_page' => -1, 
            'meta_key' => "Grouping",
            'meta_value' => "Beef"
            ))?>

            <?php if($beef->have_posts()) : while($beef->have_posts()) : ($beef->the_post())?>
            
                <div class="menuList__food">
                    <ul>
                        <li><?php the_title()?></li>
                        <li>PHP <?php echo get_post_meta(get_the_ID(), 'Price', true)?></li>
                    </ul>
                    <p><?php echo get_the_content()?></p>
                </div>
            
            <?php endwhile;
            else :
                echo "no menus";
            endif;
            wp_reset_postdata();
            ?>


            </div>
            <img src="<?php echo get_post_meta(get_the_ID(), "Banner Beef", true)?>" alt="" />

            
          </div>

          <div class="menuList__content">
            <div class="menuList__title">
              <h2>Chicken Items</h2>
            </div>


            <div class="menuList__menu">

            <?php $chicken = new WP_Query(array(
            'post_type' => 'menus',
            'posts_per_page' => -1, 
            'meta_key' => "Grouping",
            'meta_value' => "Chicken"
            ))?>

            <?php if($chicken->have_posts()) : while($chicken->have_posts()) : ($chicken->the_post())?>
            
                <div class="menuList__food">
                    <ul>
                        <li><?php the_title()?></li>
                        <li>PHP <?php echo get_post_meta(get_the_ID(), 'Price', true)?></li>
                    </ul>
                    <p><?php echo get_the_content()?></p>
                </div>
            
            <?php endwhile;
            else :
                echo "no menus";
            endif;
            wp_reset_postdata();
            ?>


            </div>
            <img src="<?php echo get_post_meta(get_the_ID(), "Banner Chicken", true)?>" alt="" />

            
          </div>

          <div class="menuList__content">
            <div class="menuList__title">
              <h2>Salad Items</h2>
            </div>


            <div class="menuList__menu">

            <?php $salad = new WP_Query(array(
            'post_type' => 'menus',
            'posts_per_page' => -1, 
            'meta_key' => "Grouping",
            'meta_value' => "Salad"
            ))?>

            <?php if($salad->have_posts()) : while($salad->have_posts()) : ($salad->the_post())?>
            
                <div class="menuList__food">
                    <ul>
                        <li><?php the_title()?></li>
                        <li>PHP <?php echo get_post_meta(get_the_ID(), 'Price', true)?></li>
                    </ul>
                    <p><?php echo get_the_content()?></p>
                </div>
            
            <?php endwhile;
            else :
                echo "no menus";
            endif;
            wp_reset_postdata();
            ?>


            </div>
            <img src="<?php echo get_post_meta(get_the_ID(), "Banner Salad", true)?>" alt="" />

            
          </div>
        </div>
      </div>
    </section>




<?php get_footer()?>