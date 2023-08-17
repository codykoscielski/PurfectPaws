<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="flex h-full">
        <!-- Sidebar -->
        <?php require APPROOT . '/views/shelters/inc/sidebar.php' ?>
        <!-- Main content -->
        <div class="main-content ml-20 md:ml-64 p-8">
            <!-- Your dashboard content goes here -->
            <h1 class="text-[48px] font-semibold mb-6">Pets</h1>
            <a href="<?= URLROOT ?>/shelters/addNewRescue">Add Rescue</a>
        </div>
    </div>
<?php require APPROOT . '/views/shelters/inc/footer.php' ?>