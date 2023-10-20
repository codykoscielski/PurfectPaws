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
                PurfectPaws simplifies the adoption process for animal shelters and potential pet parents. We bring you an intuitive admin dashboard for efficient management and a seamless browsing experience for adoptions.
            </p>
            <div>
                <button class="mt-4 inline-flex items-center bg-muted-coral hover:bg-dusty-teal text-white font-bold py-2 px-4 rounded transition duration-200">Learn More</button>
            </div>
        </div>
        <img src="<?= URLROOT ?>/images/heart.svg" alt="">
    </div>
</section>
<section class="about-us mt-5 container mx-auto px-4">
    <h2 class="text-[50px] text-dusty-teal font-bold mt-2 mb-0">Who We Are</h2>
    <div class="flex max-w-section ">
        <div>
            <p>
                At PurfectPaws, we are committed to connecting loving families with animals in need. Our easy-to-use interface and powerful tools make pet adoption effortless for both shelters and future pet parents.
            </p>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
