<?php 
$pageTitle = "Naše Produkty - Laboratoires.cz";
include 'header.php'; 
?>

<section class="pt-24 pb-16 md:pt-32 md:pb-24 bg-brand-secondary">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif text-brand-primary mb-2">Naše produkty</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Každý z našich doplňků stravy vzniká jako odpověď na konkrétní potřeby moderního života. Spojujeme odborné znalosti biochemiků a farmaceutů s důrazem na kvalitu, čistotu a funkčnost.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Produkt 1 -->
            <a href="produkt-energie.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5">
                    <img loading="lazy" src="obrazky/Energie.jpg" alt="Energie & Paměť" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105">
                </div>
                <h4 class="font-bold text-xl text-brand-primary">Energie & Paměť</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Pro maximální soustředění a podporu kognitivních funkcí.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 2 -->
            <a href="produkt-magnesium.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5">
                    <img loading="lazy" src="obrazky/Magnesium.jpg" alt="Magnesium Komplex" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105">
                </div>
                <h4 class="font-bold text-xl text-brand-primary">Magnesium Komplex</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Proti únavě a pro normální činnost svalů a nervů.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 3 -->
            <a href="produkt-probiotika.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5">
                    <img loading="lazy" src="obrazky/Probiotika.jpg" alt="Probiotika" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105">
                </div>
                <h4 class="font-bold text-xl text-brand-primary">Probiotika</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Pro zdravou střevní mikroflóru a správné zažívání.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 4 -->
            <a href="produkt-vitamin-c.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5">
                    <img loading="lazy" src="obrazky/Vitamin.jpg" alt="Vitamín C" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105">
                </div>
                <h4 class="font-bold text-xl text-brand-primary">Vitamín C</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Klíčový antioxidant pro vaši vitalitu a imunitu.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 5 -->
            <a href="produkt-imunita.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5">
                    <img loading="lazy" src="obrazky/Imunita.jpg" alt="Imunita" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105">
                </div>
                <h4 class="font-bold text-xl text-brand-primary">Imunita</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Podpora obranyschopnosti s vitamíny C, D a zinkem.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>