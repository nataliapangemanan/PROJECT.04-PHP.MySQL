document.addEventListener("DOMContentLoaded", function() {
    const showMoreButtons = document.querySelectorAll(".show-more");

    showMoreButtons.forEach(button => {
        button.addEventListener("click", function() {
            const targetId = this.getAttribute("data-target");
            const content = document.querySelector(`.${targetId}`);

            if (content) {
                content.classList.toggle("expandable-content");

                if (content.classList.contains("expandable-content")) {
                    this.textContent = "Show More";
                } else {
                    this.textContent = "Hide";
                }
            }
        });
    });
});
