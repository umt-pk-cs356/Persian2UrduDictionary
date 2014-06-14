<?php get_header(); ?>

<h3><i><b>Enter your Word Here.....<b><i></h3>
<div id="search-box">
                <form method="get" id="searchform" action="" > 
                    <input type="text" value="Search..." onfocus="if(this.value == this.defaultValue) this.value = ''" name="s" id="s" /> 
                </form>
            </div>
<?php while (have_posts()):the_post();?>
 
<div class="post">

    
                        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="meta">Posted by <a href="#"><?php the_author_posts_link(); ?> on </a><?php the_time('F jS,Y'); ?>
                            &nbsp;&bull;&nbsp; <a href="<?php comments_link(); ?>" class="comments">
                            <?php comments_number('0 Comments','1 comment','% responses'); ?>
                            </a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink(); ?>" class="permalink">Full article</a></p>
                        <div class="entry"> <a href="<?php the_permalink(); ?>" class="image image-full">
                                <?php the_post_thumbnail('full'); ?>
                        </a>
                            <?php the_content('Read More'); ?>
                        </div>
                    </div>

<?php endwhile; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>
