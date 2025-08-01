console.log('Hello World');

document.addEventListener("DOMContentLoaded", function () {
	const toggle = document.querySelector(".nav--toggle");
	const menu = document.querySelector(".nav--container");

	if (toggle && menu) {
		toggle.addEventListener("click", () => {
			menu.classList.toggle("active");
			toggle.setAttribute("aria-expanded", menu.classList.contains("active"));
		});
	}

	document.querySelectorAll(".nav--item > a").forEach(link => {
		link.addEventListener("click", (e) => {
			const parent = link.parentElement;
			const submenu = parent.querySelector(".nav--submenu");

			if (submenu && window.innerWidth <= 768) {
				e.preventDefault();
				document.querySelectorAll(".nav--item.open").forEach(item => {
					if (item !== parent) item.classList.remove("open");
				});
				parent.classList.toggle("open");
			}
		});
	});
});
