function showContacts() {
    const contactsCard = document.querySelector(".contacts-card");
    const closeIcon = document.querySelector(".contacts-close");
    const TabletMediaQuery = window.matchMedia(
        "(max-height: 585px) or (max-width: 768px)"
    );
    if (TabletMediaQuery.matches) {
        contactsCard.addEventListener("click", (e) => {
            e.target.classList.add("active");
            if (e.target === closeIcon) {
                contactsCard.classList.remove("active");
            }
        });
    }
}

showContacts();
