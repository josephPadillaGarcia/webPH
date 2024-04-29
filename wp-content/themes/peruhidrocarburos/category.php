<?php
get_header();

// Obtenemos la categoría actual
$categoria = get_queried_object();
?>

<?php
// Obtener las categorías de los posts
$categories = get_categories();

// Comprobar si hay categorías
if ($categories) {
    //echo '<pre>'.json_encode($categories).'</pre>';
    echo '<ul>';
    foreach ($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        //echo '<pre>'.$category->name.'</pre>';
    }
    echo '</ul>';
}
?>

<hr>

<h3>Categoria</h3>

<?php if (have_posts()) : ?>
   <div class="container">
      <h1><?php echo $categoria->name; ?></h1>
      <ul>
         <?php while (have_posts()) : the_post(); ?>
            <li>
               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               
            <figure class="card__figure">
                <?php $imagen = get_field('imagen_post'); ?>
                <img class="card__image" src="<?php echo $imagen['url']; ?>">
            </figure>
               
                <p><?php the_field('title_post'); ?></p>
                <p><?php the_field('autor_post'); ?></p>
                <p><?php the_field('fecha_post'); ?></p>
            </li>
         <?php endwhile; ?>
      </ul>
   </div>
<?php endif; ?>


<?php 
get_footer(); 