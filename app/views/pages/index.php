<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php';?>
<div class="hero bg-center bg-cover h-[450px] lg:h-[600px] flex items-center lg:items-center justify-center lg:justify-start lg:pl-10p" style="background-image: url('<?= URLROOT ?>/images/hero-image.png');">
    <div class="text-section">
        <h1 class="text-[56px] lg:text-[96px] text-soft-cream font-bold mb-4">Streamlining Animal Adoption<br>from Shelter to Home</h1>
        <button class="btn bg-muted-coral text-white font-bold px-6 py-3 rounded-full hover:bg-pastel-orange transition duration-200">Request a Demo</button>
    </div>
</div>
<section class="adoption-about mt-5 container mx-auto px-4">
    <h2 class="text-[50px] text-dusty-teal font-bold text-center mt-2 mb-0">Bringing Efficiency to Animal Rescue Operations</h2>
    <div class="flex max-w-section mx-auto">
        <div>
            <p>
                At PurfectPaws, we provide animal shelters with an intuitive admin dashboard for efficient management, while offering future pet parents a seamless browsing experience. Our mission is to simplify the adoption journey, connecting loving families with animals in need.            </p>
            <div>
                <button class="mt-4 inline-flex items-center bg-muted-coral hover:bg-dusty-teal text-white font-bold py-2 px-4 rounded transition duration-200">Learn More</button>
            </div>
        </div>
        <img src="<?= URLROOT ?>/images/heart.svg" alt="">
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
