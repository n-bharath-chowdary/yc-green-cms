import './bootstrap';
import './navbar.js';
import './animations.js';
import './apply.js';
import './companies.js';

import { setupFilters } from './filter.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener("DOMContentLoaded", () => {
  // Companies Page
  setupFilters(".filter-btn", ".company-card");
  // Library Page
  setupFilters(".filter-btn", ".blog-card");
  // Work Page
  setupFilters(".filter-btn", ".job-card");
});
