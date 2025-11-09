document.addEventListener('DOMContentLoaded', () => {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.company-card');
  const modal = document.getElementById('company-modal');
  const closeBtn = document.getElementById('modal-close');
  const title = document.getElementById('modal-title');
  const body = document.getElementById('modal-body');
  const link = document.getElementById('modal-link');

  // Filter logic (mock)
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const category = btn.textContent.trim();
      cards.forEach(card => {
        card.style.display = category === 'All' || card.dataset.category === category ? 'block' : 'none';
      });
    });
  });

  // Modal open
  cards.forEach(card => {
    card.addEventListener('click', () => {
      title.textContent = card.querySelector('h2').textContent;
      body.textContent = card.querySelector('p').textContent;
      link.href = '#';
      modal.classList.remove('hidden');
    });
  });

  // Modal close
  closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
  modal.addEventListener('click', (e) => {
    if (e.target === modal) modal.classList.add('hidden');
  });
});

const setupFilters = (filterBtns, cards) => {
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const cat = btn.textContent.trim();
      cards.forEach(card => {
        card.style.display = cat === 'All' || card.dataset.category === cat ? 'block' : 'none';
      });
    });
  });
};

document.addEventListener('DOMContentLoaded', () => {
  const libBtns = document.querySelectorAll('.filter-btn');
  const libCards = document.querySelectorAll('.blog-card');
  if (libBtns.length && libCards.length) setupFilters(libBtns, libCards);
});