<?php 
$pageTitle = "Poradce výběru - Laboratoires.cz";
include 'header.php'; 
?>

<style>
    /* Vlastní styly pro posuvník */
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
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    input[type=range]::-moz-range-thumb {
        width: 24px;
        height: 24px;
        background: #2d332a;
        cursor: pointer;
        border-radius: 50%;
        border: 4px solid #f8f7f5;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
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
                    <div id="result-content" class="text-center">
                        <h3 class="text-2xl md:text-3xl font-serif text-brand-primary mb-6">Na míru pro vás doporučujeme:</h3>
                        <div id="result-products" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Doporučené produkty se vloží zde -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Načtení externího JavaScriptu pro kalkulačku -->
<script src="kalkulacka.js" defer></script>

<?php 
include 'footer.php'; 
?>
