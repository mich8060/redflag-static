document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".nav-menu");

  if (toggle && menu) {
    toggle.addEventListener("click", () => {
      menu.classList.toggle("active");
      toggle.setAttribute("aria-expanded", menu.classList.contains("active"));
    });
  }

  // Expand submenus on tap (optional)
  document.querySelectorAll(".menu-item-has-children > a").forEach(link => {
    link.addEventListener("click", (e) => {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const parent = link.parentElement;
        parent.classList.toggle("open");
      }
    });
  });
});
