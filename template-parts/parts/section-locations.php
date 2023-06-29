<?php 
$title = get_sub_field( "title" );
$subtitle = get_sub_field( "subtitle" );
$link = get_sub_field( "link" );
$locations = get_sub_field( "location" );
?>

<div class="pb-10 lg:pb-20">

    <div class="container text-center mb-10">
        <?php if($title): ?>
            <h2 class="text-root-blue font-bold text-2xl lg:text-4xl" data-aos="fade-up">
                <?php echo $title; ?>
            </h2>
        <?php endif; ?>

        <?php if($subtitle): ?>
            <p class="mt-4 text-root-grey-secondary font-semibold text-lg lg:text-2xl" data-aos="fade-up">
                <?php echo $subtitle; ?>
            </p>
        <?php endif; ?>
    </div>

    <div data-slider class="swiper w-full locations--slide" data-aos="fade-up">
        <div class="swiper-wrapper">
            <?php foreach( $locations as $location ) : 
                $location_name = $location->post_title;
                $distance = get_field( 'distance', $location);
                $main_address = get_field( 'main_address', $location);
                $second_address = get_field( 'second_address', $location);
                $phone = get_field( 'phone', $location);
                $hours = get_field( 'hours', $location);
                $feature_image = get_the_post_thumbnail_url($location); 
    
            ?>
                <div class="swiper-slide">
                    <div class="shadow-md p-1.5 rounded-2xl group locations--location">
                        <?php if($feature_image): ?>
                            <figure class="relative rounded-t-2xl overflow-hidden locations--location-image">
                                <img class="block object-cover h-full w-full" src="<?php echo $feature_image; ?>" alt="<?php echo $location_name; ?>" />
        
                                <div class="absolute top-3 left-3 text-white z-10 flex locations--location-box">
                                    <?php if($distance): ?>
                                        <div class="flex items-center border border-white border-solid rounded-md py-px px-1.5 mr-2">
                                            <?php do_action("get_icon", "location-line", "block w-3 mr-2"); ?>
                                            <?php echo $distance; ?>
                                        </div>
                                    <?php endif; ?>
                                        
                                    <div class="flex items-center border border-white border-solid rounded-md pt-px px-1.5">
                                        <?php do_action("get_icon", "heart", "block w-3"); ?>
                                    </div>
                                </div>
                            </figure>
                        <?php endif; ?>
        
                        <div class="pt-3.5 px-2 lg:px-7">
                            <div class="pb-4">
                                <h2 class="text-root-blue font-bold text-lg lg:text-xl">
                                    <?php echo $location_name; ?>
                                </h2>
                    
                                <div class="leading-snug">
                                    <?php if($main_address): ?>
                                        <p>
                                            <?php echo $main_address; ?>
                                        </p>
                                    <?php endif; ?>
                        
                                    <?php if($second_address): ?>
                                        <p>
                                            <?php echo $second_address; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                
                            <div class="lg:max-h-0 overflow-hidden ease-in duration-150 lg:group-hover:max-h-36">
                                <div class="pt-4 border-t border-root-grey-secondary">
                                    <div class="flex items-start">
                                        <?php if($phone): ?>
                                            <?php do_action("get_icon", "phone", "block w-6 text-root-blue mt-px"); ?>
                                            <div class="ml-3.5">
                                                <a href="tel:<?php echo $phone; ?>">
                                                    <?php echo $phone; ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
    
                                    <?php if( $hours ): ?>	
                                        <div class="flex items-start mt-3.5">
                                            <?php do_action("get_icon", "clock", "block w-6 text-root-blue mt-px"); ?>
                                            
                                            <div class="ml-3.5 w-full">
                                                <?php foreach( $hours as $hour ): 
                                                    $days = $hour["days"];
                                                    $time = $hour["hour"];
                                                ?>
                                                    <p class="sm:flex">
                                                        <?php if($days): ?>
                                                            <b class="block font-medium mr-2 basis-20">
                                                                <?php echo $days; ?>
                                                            </b>
                                                        <?php endif; ?>
            
                                                        <?php if($hour): ?>
                                
                                                                <?php echo $time; ?>
                    
                                                        <?php endif; ?>
                                                    </p>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container flex justify-center lg:mt" data-aos="fade-up">
        <?php if($link): ?>
            <a class="max-w-fit mt-10 font-semibold text-lg button button__green button__icon button__icon-top" href="<?php echo $link["url"] ?>" <?php if ( ! empty( $link["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
                <div class="mr-5 md:mr-6">
                    <?php echo $link["title"]; ?>
                </div>
                <?php do_action("get_icon", "location", "block w-4"); ?>
            </a>
        <?php endif; ?>
    </div>
</div>







