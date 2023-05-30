
let toglebtn = document.querySelectorAll(".btntogle");
let btntogle = Array.from(toglebtn);


btntogle.forEach((el, i) => {
    el.addEventListener('click', function () {
        for (i = 0; i < btntogle.length; i++) {
            var sibling = btntogle[i];

            if (el !== sibling && !sibling.nextElementSibling.classList.contains('hidden')) {
                sibling.nextElementSibling.classList.add('hidden')
            }
        }

        el.nextElementSibling.classList.toggle("hidden");
    });
});
