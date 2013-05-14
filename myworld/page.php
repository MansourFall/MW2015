<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage MyWorld2015
 * @since MyWorld2015 1.0
 */

include_once 'header_common.php'; ?>


		<section class="row page-wrap about-my-world-wrap" style="">

                	<header id="page-about-my-world-title"> 
                         <?php echo $lang['PAGE_ARTICLE_TITLE']; ?>  <!-- ref: header_common.php -->
                        </header>

                	<article id="page-about-my-world-content" class="mobile_style_article">
                	<?php include_once 'page_content/'.$page.".".$lang_file;?> 
                	
                	</article>
                	
                        
           </section>
           
           <?php include_once 'footer_common.php';?>
</body>

