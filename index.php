<?php 
$pageTitle = "Laboratoires.cz - Chytré doplňky stravy pro váš život";
include 'header.php'; 
?>

<section class="bg-white pt-16 pb-20 md:py-24">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-serif font-semibold text-brand-primary mb-6 leading-tight">Doplňky stravy inspirované vědou. Vytvořené pro každý den.</h1>
                <p class="text-lg text-gray-600 max-w-xl mx-auto md:mx-0 mb-8">Tým biochemiků a farmaceutů z Laboratoires of Functional Nutrition přináší chytrá řešení pro moderní život – promyšlené složení, kvalitní ingredience a dostupnou cenu. Od cílených monosupplementů po komplexní směsi pro studenty, manažery, maminky i aktivní seniory.</p>
                <a href="produkty.php" class="btn-primary inline-block bg-brand-primary hover:bg-brand-text text-white font-bold py-3 px-10 rounded-full text-lg shadow-lg">Objevit produkty</a>
            </div>
            <div class="md:w-1/2 w-full h-80 md:h-[450px] mt-8 md:mt-0 relative">
                 <div class="absolute inset-0 bg-contain bg-no-repeat bg-center" style="background-image: url('obrazky/kompozice.jpg');"></div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h4 class="text-sm font-semibold text-gray-500 tracking-wider uppercase mb-10">Kde naše produkty najdete</h4>
            <div class="flex flex-wrap justify-center items-center gap-x-12 sm:gap-x-16 gap-y-8">
                <img loading="lazy" src="https://logo.clearbit.com/lidl.com" alt="Lidl" class="h-12 grayscale hover:grayscale-0 transition-all duration-300">
                <img loading="lazy" src="https://logo.clearbit.com/penny.cz" alt="Penny Market" class="h-12 grayscale hover:grayscale-0 transition-all duration-300">
                <img loading="lazy" src="https://logo.clearbit.com/tesco.com" alt="Tesco" class="h-12 grayscale hover:grayscale-0 transition-all duration-300">
                <img loading="lazy" src="https://logo.clearbit.com/rohlik.cz" alt="Rohlík.cz" class="h-10 grayscale hover:grayscale-0 transition-all duration-300">
                <img loading="lazy" src="https://logo.clearbit.com/globus.cz" alt="Globus" class="h-12 grayscale hover:grayscale-0 transition-all duration-300">
                <img loading="lazy" src="https://logo.clearbit.com/mojehruska.cz" alt="Hruška" class="h-12 grayscale hover:grayscale-0 transition-all duration-300">
                <img loading="lazy" src="https://logo.clearbit.com/cba.cz" alt="CBA" class="h-12 grayscale hover:grayscale-0 transition-all duration-300">
            </div>
        </div>
    </section>
    <section id="home-produkty" class="py-16 md:py-24 bg-brand-secondary">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-serif text-brand-primary mb-2">Naše produkty</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Každý z našich doplňků stravy vzniká jako odpověď na konkrétní potřeby moderního života. Spojujeme odborné znalosti biochemiků a farmaceutů s důrazem na kvalitu, čistotu a funkčnost.</p>
        </div>

        <!-- Mobilní zobrazení (grid) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 md:hidden">
            <!-- Produkt 1 -->
            <a href="produkt-energie.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Energie.jpg" alt="Energie & Paměť" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                <h4 class="font-bold text-xl text-brand-primary">Energie & Paměť</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Pro maximální soustředění a podporu kognitivních funkcí.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 2 -->
            <a href="produkt-magnesium.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Magnesium.jpg" alt="Magnesium Komplex" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                <h4 class="font-bold text-xl text-brand-primary">Magnesium Komplex</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Proti únavě a pro normální činnost svalů a nervů.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 3 -->
            <a href="produkt-probiotika.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Probiotika.jpg" alt="Probiotika" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                <h4 class="font-bold text-xl text-brand-primary">Probiotika</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Pro zdravou střevní mikroflóru a správné zažívání.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 4 -->
            <a href="produkt-vitamin-c.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5"><img loading="lazy" src="obrazky/Vitamin.jpg" alt="Vitamín C" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                <h4 class="font-bold text-xl text-brand-primary">Vitamín C</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Klíčový antioxidant pro vaši vitalitu a imunitu.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
            <!-- Produkt 5 -->
            <a href="produkt-imunita.php" class="group bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="overflow-hidden rounded-md mb-5"><img loading="lazy" src="obrazky/Imunita.jpg" alt="Imunita" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                <h4 class="font-bold text-xl text-brand-primary">Imunita</h4>
                <p class="text-gray-500 text-sm my-3 flex-grow">Podpora obranyschopnosti s vitamíny C, D a zinkem.</p>
                <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
            </a>
        </div>

        <!-- Desktopový karusel -->
        <div class="relative hidden md:block">
            <button id="scroll-left" class="absolute -left-4 top-1/2 -translate-y-1/2 z-10 bg-white/80 backdrop-blur-sm rounded-full p-2 shadow-md hover:bg-white transition"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg></button>
            <button id="scroll-right" class="absolute -right-4 top-1/2 -translate-y-1/2 z-10 bg-white/80 backdrop-blur-sm rounded-full p-2 shadow-md hover:bg-white transition"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></button>
            <div id="product-carousel" class="flex items-stretch overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hide -mx-4 px-4">
                <div class="flex items-stretch snap-start space-x-8">
                    <!-- Produkt 1 -->
                    <a href="produkt-energie.php" class="group w-80 flex-none">
                        <div class="product-card h-full flex flex-col bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300">
                            <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Energie.jpg" alt="Energie & Paměť" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                            <h4 class="font-bold text-xl text-brand-primary">Energie & Paměť</h4>
                            <p class="text-gray-500 text-sm my-3 flex-grow">Pro maximální soustředění a podporu kognitivních funkcí.</p>
                            <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
                        </div>
                    </a>
                    <!-- Produkt 2 -->
                    <a href="produkt-magnesium.php" class="group w-80 flex-none">
                        <div class="product-card h-full flex flex-col bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300">
                            <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Magnesium.jpg" alt="Magnesium Komplex" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                            <h4 class="font-bold text-xl text-brand-primary">Magnesium Komplex</h4>
                            <p class="text-gray-500 text-sm my-3 flex-grow">Proti únavě a pro normální činnost svalů a nervů.</p>
                            <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
                        </div>
                    </a>
                    <!-- Produkt 3 -->
                    <a href="produkt-probiotika.php" class="group w-80 flex-none">
                        <div class="product-card h-full flex flex-col bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300">
                            <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Probiotika.jpg" alt="Probiotika" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                            <h4 class="font-bold text-xl text-brand-primary">Probiotika</h4>
                            <p class="text-gray-500 text-sm my-3 flex-grow">Pro zdravou střevní mikroflóru a správné zažívání.</p>
                            <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
                        </div>
                    </a>
                    <!-- Produkt 4 -->
                    <a href="produkt-vitamin-c.php" class="group w-80 flex-none">
                        <div class="product-card h-full flex flex-col bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300">
                            <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Vitamin.jpg" alt="Vitamín C" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                            <h4 class="font-bold text-xl text-brand-primary">Vitamín C</h4>
                            <p class="text-gray-500 text-sm my-3 flex-grow">Klíčový antioxidant pro vaši vitalitu a imunitu.</p>
                            <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
                        </div>
                    </a>
                    <!-- Produkt 5 -->
                    <a href="produkt-imunita.php" class="group w-80 flex-none">
                        <div class="product-card h-full flex flex-col bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300">
                            <div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Imunita.jpg" alt="Imunita" class="product-image w-full h-auto transition-transform duration-300 group-hover:scale-105"></div>
                            <h4 class="font-bold text-xl text-brand-primary">Imunita</h4>
                            <p class="text-gray-500 text-sm my-3 flex-grow">Podpora obranyschopnosti s vitamíny C, D a zinkem.</p>
                            <span class="btn-primary mt-4 inline-block bg-brand-primary group-hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full transition-colors duration-300">Zjistit více</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="home-o-nas" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12 md:gap-16">
                <div class="md:w-1/2 flex justify-center"><img src="obrazky/tym.png" class="w-full md:w-3/4 rounded-lg shadow-lg" style="mask-image: radial-gradient(circle, black 60%, transparent 100%); -webkit-mask-image: radial-gradient(circle, black 60%, transparent 100%);"> </div>
                <div class="md:w-7/12">
                    <h2 class="text-3xl md:text-4xl font-serif text-brand-primary mb-4">Naše filozofie</h2>
                    <p class="text-lg text-gray-600 mb-4">Ve Laboratoires spojujeme přesnost vědy s moudrostí přírody. Naším cílem je vyvíjet vysoce kvalitní a funkční doplňky stravy, které jsou dostupné pro každého – bez kompromisů.Každý produkt je výsledkem pečlivého výzkumu a vývoje, za kterým stojí náš tým zkušených farmaceutů a biochemiků.</p>
                    <a href="o-nas.php" class="btn-primary mt-4 inline-block bg-transparent border border-brand-primary text-brand-primary hover:bg-brand-primary hover:text-white font-bold py-2 px-8 rounded-full">Více o nás</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
