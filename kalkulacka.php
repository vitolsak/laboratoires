<?php 
$pageTitle = "Poradce výběru - Laboratoires.cz";
include 'header.php'; 
?>

<style>
    /* Custom styles for the slider */
    input[type=range] {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 8px;
        background: #e5e7eb; /* gray-200 */
        border-radius: 5px;
        outline: none;
        opacity: 0.7;
        transition: opacity .2s;
    }

    input[type=range]:hover {
        opacity: 1;
    }

    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 24px;
        height: 24px;
        background: #2d332a; /* brand-primary */
        cursor: pointer;
        border-radius: 50%;
        border: 4px solid #f8f7f5; /* brand-secondary */
    }

    input[type=range]::-moz-range-thumb {
        width: 24px;
        height: 24px;
        background: #2d332a;
        cursor: pointer;
        border-radius: 50%;
        border: 4px solid #f8f7f5;
    }
</style>

<main class="fade-in">
    <section class="py-16 md:py-24 bg-brand-secondary">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-serif text-brand-primary mb-2">Poradce výběru doplňků</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Odpovězte na několik otázek a my vám pomůžeme najít ten správný produkt pro vaše potřeby. Posuňte jezdcem podle toho, jak se cítíte.</p>
            </div>

            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div id="calculator-questions" class="space-y-8">
                    <!-- Otázky se vygenerují zde pomocí JavaScriptu -->
                </div>
                <div class="text-center mt-10">
                    <button id="calculate-button" class="bg-brand-primary hover:bg-brand-text text-white font-bold py-3 px-12 rounded-full text-lg shadow-lg transition-colors duration-300">
                        Najít doporučení
                    </button>
                </div>
            </div>

            <div id="result-section" class="max-w-3xl mx-auto mt-12 hidden">
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-brand-accent">
                    <h3 class="text-2xl md:text-3xl font-serif text-brand-primary mb-4 text-center">Naše doporučení pro vás</h3>
                    <div id="result-content" class="text-center">
                        <p class="text-lg text-gray-700 mb-2">Na základě vašich odpovědí se nejvíce podobáte profilu:</p>
                        <p id="result-profile" class="text-2xl font-bold text-brand-accent mb-6"></p>
                        
                        <h4 class="font-bold text-brand-primary text-xl mb-3">Doporučené produkty:</h4>
                        <div id="result-products" class="flex justify-center flex-wrap gap-4 mb-6">
                            <!-- Doporučené produkty se vloží zde -->
                        </div>

                        <h4 class="font-bold text-brand-primary text-xl mb-2">Zdůvodnění:</h4>
                        <p id="result-justification" class="text-gray-600 italic"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
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

    // Generate questions
    dataset.questions.forEach(q => {
        const questionEl = document.createElement('div');
        questionEl.innerHTML = `
            <label for="${q.id}" class="block text-lg font-medium text-brand-text mb-3 text-center">${q.text}</label>
            <input type="range" id="${q.id}" min="1" max="5" value="3" class="w-full">
            <div class="flex justify-between text-xs text-gray-500 mt-2 px-1">
                <span>${q.scale['1']}</span>
                <span>${q.scale['5']}</span>
            </div>
        `;
        questionsContainer.appendChild(questionEl);
    });

    // Calculate result
    calculateButton.addEventListener('click', () => {
        const userAnswers = dataset.questions.map(q => {
            return parseInt(document.getElementById(q.id).value, 10);
        });

        let bestMatch = null;
        let minDistance = Infinity;

        dataset.profiles.forEach(profile => {
            let distance = 0;
            for (let i = 0; i < userAnswers.length; i++) {
                distance += Math.abs(userAnswers[i] - profile.scores[i]);
            }

            if (distance < minDistance) {
                minDistance = distance;
                bestMatch = profile;
            }
        });
        
        displayResult(bestMatch);
    });
    
    // Display result
    function displayResult(profile) {
        document.getElementById('result-profile').textContent = profile.profileName;
        document.getElementById('result-justification').textContent = profile.justification;
        
        const productsContainer = document.getElementById('result-products');
        productsContainer.innerHTML = ''; // Clear previous results
        
        profile.recommendedProducts.forEach(productName => {
            const productEl = document.createElement('div');
            productEl.className = 'bg-brand-secondary p-4 rounded-lg flex items-center gap-4';
            
            // Map product name to image file
            const imageName = productName.replace(/ & /g, '-').replace(/ /g, '-').toLowerCase();
            
            productEl.innerHTML = `
                <img src="https://placehold.co/64x64/2d332a/ffffff?text=${productName.charAt(0)}" alt="${productName}" class="w-16 h-16 rounded-md object-cover">
                <span class="font-semibold text-brand-primary">${productName}</span>
            `;
            productsContainer.appendChild(productEl);
        });

        resultSection.classList.remove('hidden');
        resultSection.classList.add('fade-in');
        resultSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>

<?php 
include 'footer.php'; 
?>
