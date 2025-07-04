const dataset = {
  "questions": [
    { "id": "Q1", "text": "Jak se cítíte po probuzení?", "scale": { "1": "Velmi unaveně, těžko vstávám", "5": "Plný/á energie, odpočatý/á" } },
    { "id": "Q2", "text": "Jakou máte úroveň energie kolem třetí hodiny odpoledne?", "scale": { "1": "Velký útlum, chce se mi spát", "5": "Stále plný/á síly" } },
    { "id": "Q3", "text": "Jak dobře se dokážete soustředit na práci nebo učení?", "scale": { "1": "Vůbec, myšlenky mi utíkají", "5": "Výborně, nic mě nerozptýlí" } },
    { "id": "Q4", "text": "Jak dobře zvládáte stresové situace během dne?", "scale": { "1": "Velmi špatně, snadno mě něco rozhodí", "5": "S klidem a přehledem" } },
    { "id": "Q5", "text": "Jak kvalitní je váš spánek?", "scale": { "1": "Špatný, často se budím", "5": "Vynikající, spím celou noc" } },
    { "id": "Q6", "text": "Jak se cítí vaše svaly po běžném dni nebo po sportu?", "scale": { "1": "Často unavené, napjaté nebo mívám křeče", "5": "Uvolněné a v pohodě" } },
    { "id": "Q7", "text": "Jak odolný/á se cítíte vůči běžnému nachlazení?", "scale": { "1": "Chytnu skoro všechno", "5": "Jsem velmi odolný/á" } },
    { "id": "Q8", "text": "Jak se cítíte po jídle?", "scale": { "1": "Často cítím těžkost nebo nadýmání", "5": "Lehce a plný/á energie" } },
    { "id": "Q9", "text": "Jaká je vaše pravidelná fyzická zátěž?", "scale": { "1": "Minimální, sedavé zaměstnání", "5": "Vysoká, pravidelně sportuji" } },
    { "id": "Q10", "text": "Jak byste celkově ohodnotil/a svou životní energii a vitalitu?", "scale": { "1": "Velmi nízká", "5": "Velmi vysoká" } }
  ],
  "profiles": [
    { "profileName": "Student / Manažer", "scores": [2, 2, 1, 2, 3, 4, 3, 4, 2, 2], "recommendedProducts": ["Energie & Paměť"], "justification": "Nízká mentální energie (Q2, Q3) a špatné zvládání stresu (Q4) ukazují na potřebu podpořit kognitivní funkce." },
    { "profileName": "Sportovec", "scores": [4, 3, 4, 3, 2, 1, 4, 5, 5, 3], "recommendedProducts": ["Magnesium Komplex"], "justification": "Vysoká fyzická zátěž (Q9) v kombinaci se svalovými problémy (Q6) a horším spánkem (Q5) jasně indikuje potřebu hořčíku." },
    { "profileName": "Oslabená imunita", "scores": [2, 2, 3, 3, 3, 4, 1, 1, 2, 1], "recommendedProducts": ["Imunita", "Probiotika"], "justification": "Velmi nízké skóre u imunity (Q7) a zároveň špatné trávení (Q8) naznačují, že je třeba řešit obranyschopnost komplexně, od střev." },
    { "profileName": "Problémy s trávením", "scores": [3, 3, 4, 3, 4, 5, 3, 1, 3, 2], "recommendedProducts": ["Probiotika"], "justification": "Dominantní problém je špatné trávení (Q8). Pokud by byla zároveň nízká i imunita (Q7), byla by vhodná kombinace s produktem Imunita." },
    { "profileName": "Unavený rodič / Stres", "scores": [1, 2, 2, 1, 2, 2, 2, 3, 2, 1], "recommendedProducts": ["Magnesium Komplex", "Energie & Paměť"], "justification": "Kombinace řeší jak fyzické vyčerpání (stres, spánek, svaly - Q4, Q5, Q6), tak mentální únavu a špatné soustředění (Q3)." },
    { "profileName": "Preventivní péče", "scores": [4, 4, 4, 4, 5, 5, 3, 4, 4, 4], "recommendedProducts": ["Vitamín C"], "justification": "Uživatel se cítí dobře, ale má mírně nižší skóre u imunity (Q7). Vitamín C je ideální pro dlouhodobou prevenci a podporu." },
    { "profileName": "Mentální vyhoření", "scores": [1, 1, 1, 1, 2, 3, 2, 3, 1, 1], "recommendedProducts": ["Energie & Paměť", "Magnesium Komplex"], "justification": "Extrémní mentální únava (Q1,Q2,Q3) vyžaduje podporu kognice, zatímco hořčík pomůže se spánkem (Q5) a zvládáním vysokého stresu (Q4)." },
    { "profileName": "Celkové vyčerpání", "scores": [1, 1, 2, 2, 2, 2, 1, 2, 2, 1], "recommendedProducts": ["Imunita", "Magnesium Komplex"], "justification": "Tento profil ukazuje na naprosté vyčerpání na všech frontách - nízká energie, špatný spánek, nízká imunita. Kombinace řeší jak obranyschopnost, tak relaxaci a regeneraci." }
  ]
};

document.addEventListener('DOMContentLoaded', function() {
  const questionsContainer = document.getElementById('calculator-questions');
  const calculateButton = document.getElementById('calculate-button');
  const resultSection = document.getElementById('result-section');

  if (!questionsContainer) return; // Pouze na stránce kalkulačky

  // Generate questions with frosted-glass cards & dynamic fill
  dataset.questions.forEach(q => {
    const questionEl = document.createElement('div');
    questionEl.className = 'question-card';
    questionEl.innerHTML = `
      <label for="${q.id}" class="block text-lg font-medium text-white mb-3 text-center">${q.text}</label>
      <input type="range" id="${q.id}" min="1" max="5" value="3">
      <div class="flex justify-between text-xs text-gray-300 px-1">
        <span>${q.scale['1']}</span>
        <span>${q.scale['5']}</span>
      </div>
    `;
    questionsContainer.appendChild(questionEl);

    // Dynamic fill update
    const slider = questionEl.querySelector('input[type=range]');
    const updateFill = () => {
      const pct = ((slider.value - slider.min) / (slider.max - slider.min)) * 100;
      slider.style.setProperty('--value', pct + '%');
    };
    slider.addEventListener('input', updateFill);
    updateFill();
  });

  // Calculate result
  calculateButton.addEventListener('click', () => {
    const userAnswers = dataset.questions.map(q => parseInt(document.getElementById(q.id).value, 10));
    let bestMatch = null;
    let minDistance = Infinity;

    dataset.profiles.forEach(profile => {
      let distance = profile.scores.reduce((sum, score, i) => sum + Math.abs(userAnswers[i] - score), 0);
      if (distance < minDistance) {
        minDistance = distance;
        bestMatch = profile;
      }
    });

    displayResult(bestMatch);
  });

  // Display result
  function displayResult(profile) {
    const productsContainer = document.getElementById('result-products');
    productsContainer.innerHTML = '';

    profile.recommendedProducts.forEach(productName => {
      const productEl = document.createElement('a');
      const slug = productName.toLowerCase()
        .replace(/ & /g, '-')
        .replace(/ /g, '-')
        .replace(/[^\w-]+/g, '');

      productEl.href = `produkt-${slug}.php`;
      productEl.className = 'group bg-brand-secondary p-4 rounded-lg flex items-center gap-4 text-left hover:shadow-md transition-shadow duration-300';
      productEl.innerHTML = `
        <img src="obrazky/${productName}.jpg" alt="${productName}" class="w-20 h-20 rounded-md object-cover flex-shrink-0" onerror="this.onerror=null;this.src='https://placehold.co/80x80/2d332a/ffffff?text=${productName.charAt(0)}';">
        <span class="font-semibold text-lg text-brand-primary group-hover:text-brand-accent transition-colors">${productName}</span>
      `;
      productsContainer.appendChild(productEl);
    });

    resultSection.classList.remove('hidden');
    resultSection.classList.add('fade-in');
    resultSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
});
