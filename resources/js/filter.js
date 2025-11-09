// filters.js — reusable filter setup for any page
export function setupFilters(buttonSelector, cardSelector) {
  const filterBtns = document.querySelectorAll(buttonSelector);
  const cards = document.querySelectorAll(cardSelector);
  if (!filterBtns.length || !cards.length) return;

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {

        filterBtns.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");

      const category = btn.textContent.trim();
      cards.forEach((card) => {
        const match = category === "All" || card.dataset.category === category;
        card.style.display = match ? "block" : "none";
      });
    });
  });
}
