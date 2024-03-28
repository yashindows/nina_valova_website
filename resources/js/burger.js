function burger() {
    const icon = document.querySelector(".menu-icon");
    const menu = document.querySelector(".menu__body");

    icon.addEventListener("click", () => {
        menu.classList.toggle("active");
        icon.classList.toggle("active");
        document.body.classList.toggle("lock");
    });
}

burger();
