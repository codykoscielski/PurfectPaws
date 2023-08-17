<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="flex bg-gray-800">
        <!-- Sidebar -->
        <?php require APPROOT . '/views/shelters/inc/sidebar.php' ?>
        <!-- Main content -->
        <div class="main-content ml-20 md:ml-64 p-8">
            <!-- Your dashboard content goes here -->
            <div class="flex items-center justify-between">
                <h1 class="text-[48px] font-semibold mb-6 text-white">Pets</h1>
                <div class="px-3 mb-6 md:mb-0">
                    <label class="block tracking-widetext-xs font-bold mb-2 text-white" for="grid-first-name">
                        Search
                    </label>
                    <input class="appearance-none block bg-gray-400 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text">
                </div>
                <a href="<?= URLROOT ?>/shelters/addNewRescue" class="bg-soft-cream text-dusty-teal font-bold p-3 rounded hover:bg-pastel-orange hover:text-white transition duration-200">Add Rescue</a>
            </div>
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-4"">
                    <?php foreach($data['cats'] as $cat) : ?>
                        <div class="card max-w-sm w-full bg-white rounded-lg overflow-hidden shadow-lg p-3">
                            <div class="flex justify-center">
                                <img src="<?= $cat->imageURL ?>" alt="Cat Name" class="w-32 h-32 object-cover rounded-full border-2 border-gray-300">
                            </div>
                            <div class="p-4">
                                <h2 class="text-3xl font-semibold text-center"><?= $cat->name ?></h2>
                                <p class="mb-2"><?= $cat->description ?></p>
                                <ul>
                                    <li>Age: <?= $cat->age ?></li>
                                    <li>Adoption Status: <?= $cat->status ?></li>
                                </ul>
                                <div class="mt-4 flex justify-end">
                                    <button class="bg-dusty-teal text-white p-2 rounded">Edit</button>
                                    <button class="bg-dusty-teal text-white p-2 rounded ml-2">Archive</button>
                                    <button class="bg-muted-coral text-white p-2 rounded ml-2">Remove</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/shelters/inc/footer.php' ?>