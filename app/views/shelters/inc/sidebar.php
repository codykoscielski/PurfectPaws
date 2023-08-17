<div id="sidebar-background" class="bg-dusty-teal fixed h-full top-0 left-0 z-50 md:hidden p-5">
    <!-- Sidebar Button -->
    <button id="sidebarToggleBtn" class="text-white focus:outline-none">
        <!-- Hamburger icon -->
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="menu w-6 h-6">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
</div>
<div id="sidebar" class="bg-dusty-teal text-white w-64 space-y-6 px-4 py-7 fixed h-full transform translate-x-[-100%] md:translate-x-0 transition-transform duration-300 z-40">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="<?= URLROOT ?>/shelters">
            <img class="mx-auto h-[100px] w-auto" src="<?= URLROOT ?>/images/vert-logo.svg" alt="Purfect Paws Logo">
        </a>
    </div>
    <nav>
        <a href="<?= URLROOT ?>/shelters" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-pastel-orange hover:text-white">
            Dashboard
        </a>
        <a href="<?= URLROOT ?>/shelters/pets" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-pastel-orange hover:text-white">
            Pets
        </a>
        <a href="<?= URLROOT ?>/shelters/applications" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-pastel-orange hover:text-white">
            Adoption Applications
        </a>
        <a href="<?= URLROOT ?>/shelters/reports" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-pastel-orange hover:text-white">
            Reports
        </a>
    </nav>
</div>