// for search header
const searchToggle = document.getElementById("search-toggle");
const searchForm = document.getElementById("header-search-form");
const searchInput = document.getElementById("header-search-input");

if (searchToggle && searchForm && searchInput) {
  const closeSearch = () => {
    searchForm.classList.remove("is-open");
    searchToggle.setAttribute("aria-expanded", "false");
    searchToggle.setAttribute("aria-label", "Open search");
  };

  searchToggle.addEventListener("click", () => {
    const isOpen = searchForm.classList.toggle("is-open");

    searchToggle.setAttribute("aria-expanded", String(isOpen));
    searchToggle.setAttribute(
      "aria-label",
      isOpen ? "Close search" : "Open search",
    );

    if (isOpen) {
      searchInput.focus();
    }
  });

  document.addEventListener("click", (event) => {
    if (
      event.target instanceof Node &&
      !searchForm.contains(event.target) &&
      !searchToggle.contains(event.target)
    ) {
      closeSearch();
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeSearch();
    }
  });
}

// for open mobile menu

const menuToggle = document.getElementById("mobile-menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");

if (menuToggle && mobileMenu) {
  const menuLines = menuToggle.querySelectorAll(".menu-line");

  const closeMenu = () => {
    mobileMenu.classList.add(
      "pointer-events-none",
      "invisible",
      "-translate-y-2",
      "scale-95",
      "opacity-0",
    );

    mobileMenu.classList.remove(
      "pointer-events-auto",
      "visible",
      "translate-y-0",
      "scale-100",
      "opacity-100",
    );

    menuToggle.classList.remove("text-primary");
    menuToggle.setAttribute("aria-expanded", "false");
    menuToggle.setAttribute("aria-label", "Open menu");

    menuLines[0]?.classList.remove("top-1/2", "rotate-45");
    menuLines[0]?.classList.add("top-0");

    menuLines[1]?.classList.remove("opacity-0");
    menuLines[1]?.classList.add("opacity-100");

    menuLines[2]?.classList.remove("bottom-auto", "top-1/2", "-rotate-45");
    menuLines[2]?.classList.add("bottom-0");
  };

  const openMenu = () => {
    mobileMenu.classList.remove(
      "pointer-events-none",
      "invisible",
      "-translate-y-2",
      "scale-95",
      "opacity-0",
    );

    mobileMenu.classList.add(
      "pointer-events-auto",
      "visible",
      "translate-y-0",
      "scale-100",
      "opacity-100",
    );

    menuToggle.classList.add("text-primary");
    menuToggle.setAttribute("aria-expanded", "true");
    menuToggle.setAttribute("aria-label", "Close menu");

    menuLines[0]?.classList.remove("top-0");
    menuLines[0]?.classList.add("top-1/2", "rotate-45");

    menuLines[1]?.classList.remove("opacity-100");
    menuLines[1]?.classList.add("opacity-0");

    menuLines[2]?.classList.remove("bottom-0");
    menuLines[2]?.classList.add("bottom-auto", "top-1/2", "-rotate-45");
  };

  menuToggle.addEventListener("click", () => {
    const isOpen = menuToggle.getAttribute("aria-expanded") === "true";

    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  mobileMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  document.addEventListener("click", (event) => {
    if (
      event.target instanceof Node &&
      !mobileMenu.contains(event.target) &&
      !menuToggle.contains(event.target)
    ) {
      closeMenu();
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeMenu();
    }
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) {
      closeMenu();
    }
  });
}
