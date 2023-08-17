document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn')
    const sidebar = document.getElementById('sidebar')
    const sidebarBg = document.querySelector('#sidebar-background')
    const mainContent = document.querySelector(".main-content")

    sidebarToggleBtn.addEventListener('click', function() {
        if (sidebar.style.transform === "translateX(0px)" || sidebar.style.transform === "") {
            sidebar.style.transform = "translateX(-100%)";
            sidebarBg.classList.add('bg-dusty-teal')

        } else {
            sidebar.style.transform = "translateX(0px)";
            sidebarBg.classList.remove('bg-dusty-teal')

        }
    });

    // Hide the sidebar when clicking outside of it on mobile views
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768) { // Assuming 768px is the breakpoint for 'md'
            if (!sidebar.contains(event.target) && !sidebarToggleBtn.contains(event.target)) {
                sidebar.style.transform = "translateX(-100%)";
            }
        }
    });
});
