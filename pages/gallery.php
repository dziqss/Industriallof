
<div>
<div class="image-set container">
    <section>
        <article >
            <h1 class="gallery"> GALERIA</h1>
            <p></p>
        </article>
    </section>
<?php
$dirimage = "media/img/gallery/";
$images = glob("$dirimage*.{png,jpeg,jpg,gif}", GLOB_BRACE);

foreach ($images as $img) {

    ?>

    <a class="example-image-link col-xs-12 col-sm-6 col-md-4" href="<?php echo $img; ?>"
     data-lightbox="example-set" data-title="">
    <img class="example-image img-responsive" src="<?php echo $img; ?>" />
    </a>
    <?php
}
?>
</div>
</div>


