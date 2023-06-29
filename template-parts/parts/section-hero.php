<?php 
$title = get_sub_field( "title" );
$description = get_sub_field( "description" );
$link = get_sub_field( "link" );
$hero_image = get_sub_field( "image" );
$icons = get_sub_field( "icons" );
?>

<div class="relative pt-64 bg-root-blue text-white lg:pb-16">

    <div class="container">
        <div class="max-w-xl mx-auto lg:mr-auto lg:ml-0">
            <?php if($title): ?>
                <div 
                    class="text-center text-4xl font-bold mb-3 md:text-5xl lg:text-left rich-text hero--title"
                    data-aos="fade-in"
                >
                    <?php echo $title; ?>
                </div>
            <?php endif; ?>
    
            <div class="max-w-md mx-auto lg:mr-auto lg:ml-0">
                <?php if($description): ?>
                    <div class="text-center text-lg mb-8 md:text-xl md:leading-normal lg:text-left rich-text">
                        <?php echo $description; ?>
                    </div>
                <?php endif; ?>
        
                <?php if($link): ?>
                    <a class="font-semibold text-lg button button__green button__icon" href="<?php echo $link["url"] ?>" <?php if ( ! empty( $link["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
                        <div class="mr-5 md:mr-6">
                            <?php echo $link["title"]; ?>
                        </div>
                        <?php do_action("get_icon", "arrow-right", "block w-9"); ?>
                    </a>
                <?php endif; ?>

            </div>

            <?php if( $icons ): ?>	
                <div class="grid grid-cols-3 gap-2 mt-12 max-w-lg mx-auto lg:flex lg:justify-between lg:gap-0 lg:mr-auto lg:ml-0">
                    <?php foreach( $icons as $name=>$icon ): 
                        $image = $icon["icon"];
                        $description = $icon["description"];
        
                    ?>
                        <div class="text-center">
                            <figure class="w-10 h-10 mx-auto mb-3 lg:w-16 lg:h-16">
                                <img class="object-contain object-center" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                            <p class="text-sm lg:text-base">
                                <?php echo $description; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
    
    <?php if($hero_image): ?>
        <figure class="z-1 pointer-events-none w-full max-w-3xl ml-auto lg:absolute lg:bottom-0 lg:right-0 lg:max-w-none lg:w-6/12 xl:w-7/12">
            <img role="presentation" class="w-full object-contain object-center" src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
        </figure>
    <?php endif; ?>
</div>






