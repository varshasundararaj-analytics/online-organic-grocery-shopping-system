document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".filter-button-group button");
    const items = document.querySelectorAll(".special-grid");

    buttons.forEach(function (button) {

        button.addEventListener("click", function () {

            buttons.forEach(function (btn) {
                btn.classList.remove("active");
            });

            button.classList.add("active");

            const filter = button.getAttribute("data-filter");

            items.forEach(function (item) {

                if (filter === "*") {
                    item.style.display = "block";
                    return;
                }

                const className = filter.replace(".", "");

                if (item.classList.contains(className)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }

            });

        });

    });

});