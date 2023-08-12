<?php
    /*
     * This inc file is meant to create a new pets
     * listed section. It's an inc, so we can use it
     * on multiple pages
     * */
?>

<section class="new-pets container mx-auto px-6">
    <h2 class="text-[50px] text-dusty-teal font-bold text-center mt-2 mb-0">adopt-a-star: our new furry celebrities</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4">
        <!-- Card 1 -->
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img class="w-fit mx-auto object-cover" src="<?= URLROOT ?>/images/cat-card.png" alt="Card image">
            <div class="p-6">
                <h2 class="font-bold text-[32px] mb-2">Card Title</h2>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, voluptas.
                </p>
                <button class="mt-4 inline-flex items-center bg-muted-coral hover:bg-dusty-teal text-white font-bold py-2 px-4 rounded transition duration-200">
                    Learn more
                </button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img class="w-fit mx-auto object-cover" src="<?= URLROOT ?>/images/cat-card.png" alt="Card image">
            <div class="p-6">
                <h2 class="font-bold text-[32px] mb-2">Card Title</h2>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, voluptas.
                </p>
                <button class="mt-4 inline-flex items-center bg-muted-coral hover:bg-dusty-teal text-white font-bold py-2 px-4 rounded transition duration-200">
                    Learn more
                </button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img class="w-fit mx-auto object-cover" src="<?= URLROOT ?>/images/cat-card.png" alt="Card image">
            <div class="p-6">
                <h2 class="font-bold text-[32px] mb-2">Card Title</h2>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, voluptas.
                </p>
                <button class="mt-4 inline-flex items-center bg-muted-coral hover:bg-dusty-teal text-white font-bold py-2 px-4 rounded transition duration-200">
                    Learn more
                </button>
            </div>
        </div>
    </div>
</section>

