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
