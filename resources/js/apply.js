document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('ApplyForm');
  if (!form) return;

  const steps = [...document.querySelectorAll('.apply-step')];
  const prevBtn = document.getElementById('ApplyPrev');
  const nextBtn = document.getElementById('ApplyNext');
  const saveBtn = document.getElementById('ApplySave');
  const submitBtn = document.getElementById('ApplySubmit');
  const progress = document.getElementById('apply-progress');

  let step = 0;

  // Restore draft
  const DRAFT_KEY = 'yc_apply_draft';
  const draft = JSON.parse(localStorage.getItem(DRAFT_KEY) || '{}');
  [...form.elements].forEach(el => {
    if (el.name && draft[el.name] !== undefined) el.value = draft[el.name];
  });

  const showStep = (i) => {
    steps.forEach((s, idx) => {
      s.classList.toggle('hidden', idx !== i);
      s.classList.toggle('active', idx === i);
    });
    prevBtn.classList.toggle('hidden', i === 0);
    nextBtn.classList.toggle('hidden', i === steps.length - 1);
    submitBtn.classList.toggle('hidden', i !== steps.length - 1);
    progress.style.width = `${((i + 1) / steps.length) * 100}%`;
  };

  const fieldsForStep = (i) => {
    const container = steps[i];
    return [...container.querySelectorAll('input, textarea, select')];
  };

  const clearErrors = () => {
    form.querySelectorAll('.apply-error').forEach(e => { e.style.display = 'none'; e.textContent = ''; });
  };

  const validateStep = (i) => {
    // Minimal, green-styled warnings; tweak per your taste
    clearErrors();
    let ok = true;
    const requiredMap = {
      0: ['name','email','startup'],
      1: ['oneliner','description','stage'],
      2: ['funding'] // metrics, notes optional
    };
    const required = requiredMap[i] || [];
    required.forEach(name => {
      const el = form.elements[name];
      if (!el) return;
      const val = (el.value || '').trim();
      const isEmail = name === 'email';
      const bad = isEmail ? !/^\S+@\S+\.\S+$/.test(val) : (val.length === 0);
      if (bad) {
        ok = false;
        const err = form.querySelector(`.apply-error[data-for="${name}"]`);
        if (err) {
          err.textContent = isEmail ? 'Enter a valid email address.' : 'This field is required.';
          err.style.display = 'block';
        }
      }
    });
    return ok;
  };

  const saveDraft = () => {
    const data = {};
    [...form.elements].forEach(el => {
      if (el.name) data[el.name] = el.value;
    });
    localStorage.setItem(DRAFT_KEY, JSON.stringify(data));
  };

  nextBtn.addEventListener('click', () => {
    if (!validateStep(step)) return;
    saveDraft();
    if (step < steps.length - 1) {
      step += 1;
      showStep(step);
    }
  });

  prevBtn.addEventListener('click', () => {
    if (step > 0) {
      step -= 1;
      showStep(step);
    }
  });

  saveBtn.addEventListener('click', () => {
    saveDraft();
    // lightweight feedback
    saveBtn.textContent = 'Saved!';
    setTimeout(() => (saveBtn.textContent = 'Save draft'), 1200);
  });

  submitBtn.addEventListener('click', () => {
    if (!validateStep(step)) return;
    saveDraft(); // optional
    alert('Application submitted (mock). No data sent.');

    const banner = document.createElement('div');
    banner.textContent = '✅ Application submitted successfully!';
    banner.className = 'bg-button text-[#22421E] text-center py-2 rounded-md font-semibold mb-4';
    form.prepend(banner);
    setTimeout(() => banner.remove(), 2500);

    localStorage.removeItem(DRAFT_KEY);
    form.reset();
    clearErrors();

    step = 0;
    showStep(step);

    progress.style.width = '33%';
    nextBtn.textContent = 'Next';

  });

  // Live autosave on change (nice touch)
  form.addEventListener('input', () => saveDraft());

  // init
  showStep(step);
});
