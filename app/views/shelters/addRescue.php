<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="flex h-screen bg-gray-800 text-white">
        <?php require APPROOT . '/views/shelters/inc/sidebar.php' ?>
        <div class="main-content md:ml-64 p-12 flex items-center justify-start h-screen flex-col w-full">
            <div class="flex items-center">
                <h1 class="text-[48px] font-semibold mb-6">Add Rescue</h1>
            </div>
            <form class="w-full">
                <div class="flex flex-wrap mb-6">
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="animalName">
                            Animals Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="animalName" type="text" placeholder="Tuffy">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="breed">
                            Breed
                        </label>
                        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="breed">
                            <option value="none">Select Breed</option>
                            <?php foreach ($data['breeds'] as $breed) : ?>
                                <option value="<?= $breed->id ?>"><?= $breed->breed_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="age">
                            Age
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="age" type="text" placeholder="Adult">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="Sex">
                            Sex
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Male">
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="size">
                            Size
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="size" type="text" placeholder="small">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="coatLength">
                            Coat Length
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="coatLength" type="text" placeholder="Short">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="trained">
                            House Trained
                        </label>
                        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="trained">
                            <option value="NULL">Select Option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="goodHome">
                            Good in a home with
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="goodHome" type="text" placeholder="Other cats and dogs">
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="size">
                            Health Notes
                        </label>
                        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="healthNotes" placeholder="Fixed, has all shots"></textarea>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="about">
                            About Animal
                        </label>
                        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="about" placeholder="Super friendly, loves to play, add more information here"></textarea>
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-1/4 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-xs mb-2" for="about">
                            Image Upload
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-1/4 px-3 mb-6 md:mb-0">
                        <input class="appearance-none block bg-dusty-teal text-gray-700 rounded py-3 px-4 mb-3 leading-tight hover:bg-pastel-orange text-soft-cream transition duration-200 cursor-pointer" type="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require APPROOT . '/views/shelters/inc/footer.php' ?>