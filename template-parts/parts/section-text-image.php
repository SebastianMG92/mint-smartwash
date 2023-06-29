<?php 
$image_right = get_sub_field( "image_right" );
$image = get_sub_field( "image" );
$tag_line = get_sub_field( "tag_line" );
$title = get_sub_field( "title" );
$description = get_sub_field( "description" );
$link = get_sub_field( "link" );
?>

<div class="relative overflow-hidden py-10 lg:pt-24 lg:pb-20 <?php if($image_right): ?>bg-root-green<?php else: ?>bg-root-blue<?php endif; ?>">

    <div class="container relative z-10">
        <div class="md:w-6/12 <?php if($image_right): ?>md:mr-auto<?php else: ?>md:ml-auto md:text-right<?php endif; ?>">
            <?php if($tag_line): ?>
                <p class="text-xl font-bold mb-5 lg:text-3xl <?php if($image_right): ?>text-root-blue<?php else: ?>text-root-green<?php endif; ?>" data-aos="fade-up">
                    <?php echo $tag_line; ?>
                </p>
            <?php endif; ?>
        
            <?php if($title): ?>
                <h2 class="text-2xl text-white font-bold lg:text-5xl lg:leading-tight" data-aos="fade-up">
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>
        
            <?php if($description): ?>
                <div class="mt-3 text-white rich-text lg:mt-5" data-aos="fade-up">
                    <?php echo $description; ?>
                </div>
            <?php endif; ?>
        
        
            <?php if($link): ?>
                <a class="max-w-fit mt-10 font-semibold text-lg button button__icon <?php if($image_right): ?>button__blue md:mr-auto<?php else: ?>button__green md:ml-auto<?php endif; ?>" href="<?php echo $link["url"] ?>" <?php if ( ! empty( $link["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?> data-aos="fade-up">
                    <div class="mr-5 md:mr-6">
                        <?php echo $link["title"]; ?>
                    </div>
                    <?php do_action("get_icon", "arrow-right", "block w-9"); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
    


    <?php if($image_right): ?>
        <img class="absolute z-0 -right-32 lg:-right-44 bottom-0" src="<?php echo get_template_directory_uri(); ?>/dist/LightBlue.png" role="presentation" />

        <?php else: ?>

        <img class="absolute z-0 inset-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/dist/blue-design.png" role="presentation" />

    <?php endif; ?>

    <div class="mt-10 md:w-6/12 md:mt-0 md:absolute md:top-1/2 md:-translate-y-1/2 <?php if($image_right): ?>md:right-0<?php else: ?>md:left-0<?php endif; ?>">
        <?php if($image): ?>
            <figure class="relative z-0 w-full">
                <img class="<?php if($image_right): ?>ml-auto<?php else: ?>mr-auto<?php endif; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </figure>
        <?php endif; ?>
    </div>
</div>







