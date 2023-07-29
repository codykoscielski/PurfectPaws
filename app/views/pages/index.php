<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php';?>
<div class="hero bg-center bg-cover h-[450px] lg:h-[600px] flex items-center lg:items-center justify-center lg:justify-start lg:pl-10p" style="background-image: url('<?= URLROOT ?>/images/hero-image.png');">
    <div class="text-section">
        <h1 class="text-[56px] lg:text-[96px] text-soft-cream font-bold mb-4">WHERE LOVE AND<br>WHISKERS MEET!</h1>
        <button class="btn bg-muted-coral text-white font-bold px-6 py-3 rounded-full">Discover Your Purr-Fect Match</button>
    </div>
</div>
<?php require APPROOT . '/views/inc/newPets.php'; ?>
<section class="adoption-about mt-5 container mx-auto px-4">
    <h2 class="text-[50px] text-dusty-teal font-bold text-center mt-2 mb-0">Journey to Furever Love</h2>
    <div class="flex max-w-section mx-auto">
        <div>
            <p>
                PurfectPaws connects prospective pet owners with the ideal cat. Begin your journey by browsing our online cat gallery. After finding a potential match, complete our adoption application detailing your lifestyle. Our counselors review your application, arrange a meet-and-greet, and provide guidance. Post approval, you complete the adoption paperwork and welcome your new furry friend. Our team offers post-adoption support to ensure a smooth transition into your lifelong bond.
            </p>
            <div>
                <button class="mt-4 inline-flex items-center bg-muted-coral hover:bg-dusty-teal text-white font-bold py-2 px-4 rounded">Adoptions</button>
                <button class="mt-4 inline-flex items-center bg-muted-coral hover:bg-dusty-teal text-white font-bold py-2 px-4 rounded">Learn More</button>
            </div>
        </div>
        <img src="<?= URLROOT ?>/images/heart.svg" alt="">
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
