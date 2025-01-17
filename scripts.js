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
});
