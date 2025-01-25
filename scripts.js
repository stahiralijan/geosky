document.addEventListener("DOMContentLoaded", function () {
    // Select all menu items with children
    const menuItems = document.querySelectorAll(".menu-item-has-children");

    menuItems.forEach((menuItem) => {
        const subMenu = menuItem.querySelector("ul");

        if (subMenu) {
            // Add hover event listeners to parent menu items
            menuItem.addEventListener("mouseenter", () => {
                subMenu.classList.remove("hidden");
            });

            menuItem.addEventListener("mouseleave", () => {
                subMenu.classList.add("hidden");
            });
        }
    });

    const menuIcon = document.querySelector('.mobile-menu-icon');
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuOverlay = document.querySelector('.menu-overlay');
    const closeBtn = document.querySelector('.mobile-menu-close');

    menuIcon.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        menuOverlay.style.display = 'block';
    });

    menuOverlay.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        menuOverlay.style.display = 'none';
    });

    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        menuOverlay.style.display = 'none';
    });

    // Close menu on link click
    document.querySelectorAll('.mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            menuOverlay.style.display = 'none';
        });
    });
});
