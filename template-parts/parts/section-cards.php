<?php 
$cards = get_sub_field( "cards" );
?>

<div class="container py-10 lg:py-24">
    <?php if( $cards ): ?>	
        <div class="grid gap-10 sm:grid-cols-2">
            <?php foreach( $cards as $name=>$card ): 
                $image = $card["image"];
                $link = $card["link"];
                $align_center = $card["align_image_to_center"];
            ?>
                <div data-aos="fade-up">
                    <a 
                        class="flex items-center relative bg-root-green text-white rounded-xl duration-150 ease-in-out group hover:bg-root-green-tertiary" href="<?php echo $link["url"] ?>" <?php if ( ! empty( $link["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>
                        
                    >
                        <figure class="block relative basis-4/12 h-full md:basis-5/12 <?php if ( $align_center ): ?>cards--card-image__center<?php else: ?>cards--card-image__left<?php endif; ?>">
                            <img  class="block absolute top-1/2 -translate-y-1/2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </figure>

                        <div class="flex items-center justify-between basis-8/12 px-3 py-5 md:basis-7/12 lg:pr-3 lg:py-7 xl:pr-7">
                            <h2 class="mr-3 font-bold leading-tight md:text-xl lg:text-2xl xl:mr-13">
                                <?php echo $link["title"]; ?>
                            </h2>
                            <div class="flex items-center justify-center bg-root-green-secondary w-10 h-10 min-w-[2.5rem] rounded-lg duration-150 ease-in-out group-hover:bg-root-green lg:w-14 lg:h-14 lg:min-w-[3.5rem] xl:w-20 xl:h-20 xl:min-w-[5rem]">
                                <?php do_action("get_icon", "arrow-short-right", "block w-5 duration-150 ease-in-out lg:w-9 rotate-0 group-hover:-rotate-45"); ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>






