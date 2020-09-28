document.addEventListener("DOMContentLoaded", function () {
    chkHey.addEventListener("click", function () {
        if (chkHey.checked) {
            lblHey.classList.remove("hidden")
        } else {
            lblHey.classList.add("hidden")
        }
    })
})