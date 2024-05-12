const dashboard = document.querySelector(".admin-dashboard");
const dashboardItems = dashboard.querySelectorAll(".btn");
const content = document.querySelector(".admin-content");
const contentForms = content.querySelectorAll(".content-form");

if (sessionStorage.length > 0) {
    dashboardItems.forEach((tab) => {
        if (Array.prototype.includes.call(tab.classList, "active")) {
            tab.classList.remove("active");
        }
    });
    contentForms.forEach((item) => {
        if (Array.prototype.includes.call(item.classList, "active")) {
            item.classList.remove("active");
        }
    });

    dashboardItems[sessionStorage.getItem("tab")].classList.add("active");
    contentForms[sessionStorage.getItem("tab")].classList.add("active");
}

dashboard.addEventListener("click", (e) => {
    dashboardItems.forEach((item) => {
        if (e.target === item) {
            dashboard.querySelectorAll(".btn").forEach((tab) => {
                if (Array.prototype.includes.call(tab.classList, "active")) {
                    tab.classList.remove("active");
                }
            });
            e.target.classList.add("active");
        }
    });
    contentForms.forEach((item) => {
        dashboardItems.forEach((tab) => {
            if (e.target === tab) {
                if (Array.prototype.includes.call(item.classList, "active")) {
                    item.classList.remove("active");
                }
                contentForms[
                    Array.prototype.indexOf.call(dashboardItems, e.target)
                ].classList.add("active");
            }
        });
    });
    sessionStorage.setItem(
        "tab",
        Array.prototype.indexOf.call(dashboardItems, e.target)
    );
});
