<?php get_header();?>
<div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?php echo get_theme_mod("id_setting_nome",'NOME E COGNOME'); ?>
                    </h1>
					<?php if(!empty(get_theme_mod('id_setting_indirizzo','INDIRIZZO'))){?>
                    <div class="subheading mb-5">
                       <?php echo get_theme_mod("id_setting_indirizzo",'INDIRIZZO'); ?> ·  <?php echo get_theme_mod("id_setting_città",'CITTA'); ?> ·  <?php echo get_theme_mod("id_setting_cellulare",'CELLULARE'); ?> · <?php echo get_theme_mod("id_setting_email",'EMAIL'); ?>
                    </div>
                    <?php } ?>
					
					<p class="lead mb-5"><?php echo get_theme_mod("id_setting_descrizione",'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'); ?></p>
					
					
                    <div class="social-icons">
                        <a class="social-icon" href="<?php echo get_theme_mod("id_setting_linkedin"); ?>"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="<?php echo get_theme_mod("id_setting_github"); ?>"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="<?php echo get_theme_mod("id_setting_twitter"); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="<?php echo get_theme_mod("id_setting_facebook"); ?>"><i class="fab fa-facebook-f"></i></a>
                    </div>
					
                </div>
           </section>
<!--EXPERIENCE-->
<?php
$args = array(
'category_name' => 'experience'
);?>
<section class="resume-section" id="experience">
<div class="resume-section-content">
<h2 class="mb-5">Experience</h2>
<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
<div class="flex-grow-1">
<?php
$query = new WP_Query($args);
if($query-> have_posts()){
while($query-> have_posts()){

$query->the_post();
echo '<h3 class="mb-0">',the_title(),'</h3>';?>
<?php $infobox = get_post_meta(get_the_ID(),'_calendario_inizio_meta_key',
true);
echo $infobox;
?>
 - <!--spazio tra le date-->
<?php $infobox = get_post_meta(get_the_ID(),'_calendario_fine_meta_key',
true); 
echo $infobox;
?>
<?php
echo the_content();?>


<?php } ?> 
<?php } ?> 

</div>
</div>
</div>
</section>

<?php
wp_reset_postdata();
?>

<!--EDUCATION-->
<?php
$args = array(
'category_name' => 'education'
);?>
<section class="resume-section" id="education">
<div class="resume-section-content">
<h2 class="mb-5">Education</h2>
<div class="d-flex flex-column flex-md-row justify-content-between mb-5">
<div class="flex-grow-1">
<?php
$query = new WP_Query($args);
if($query-> have_posts()){
while($query-> have_posts()){

$query->the_post();
echo '<h3 class="mb-0">',the_title(),'</h3>';?>
<?php $infobox = get_post_meta(get_the_ID(),'_calendario_inizio_meta_key',
true);
echo $infobox;
?>
 - <!--spazio tra le date-->
<?php $infobox = get_post_meta(get_the_ID(),'_calendario_fine_meta_key',
true); 
echo $infobox;
?>
<?php
echo the_content();?>



<?php } ?> 
<?php } ?> 

</div>
</div>
</div>
</section>
<?php
wp_reset_postdata();
?>

<!--SKILLS-->
<?php
$args = array(
'category_name' => 'skills'
);?>
<section class="resume-section" id="skills">
<div class="resume-section-content">
<h2 class="mb-5">Skills</h2>

<?php
$query = new WP_Query($args);
if($query-> have_posts()){
while($query-> have_posts()){

$query->the_post();
echo '<div class="subheading mb-3">',the_title(),'</div>';
echo the_content();?>


<?php } ?> 
<?php } ?> 


</div>
</section>
<?php
wp_reset_postdata();
?>

<!--interests-->
<?php
$args = array(
'category_name' => 'interests'
);?>
<section class="resume-section" id="interests">
<div class="resume-section-content">
<h2 class="mb-5">Interests</h2>

<?php
$query = new WP_Query($args);
if($query-> have_posts()){
while($query-> have_posts()){

$query->the_post();
echo '<div class="subheading mb-3">',the_title(),'</div>';
echo the_content();?>

<?php } ?> 
<?php } ?> 


</div>
</section>
<?php
wp_reset_postdata();
?>
</div>          
     
<?php get_footer();?>