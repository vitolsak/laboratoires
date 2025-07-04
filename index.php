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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col"><div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Energie.jpg" class="product-image w-full h-auto transition-transform duration-300"></div><h4 class="font-bold text-xl text-brand-primary">Energie & Paměť</h4><p class="text-gray-500 text-sm my-3 flex-grow">Pro maximální soustředění a podporu kognitivních funkcí.</p><a href="produkty.php" class="btn-primary mt-4 inline-block bg-brand-primary hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full">Zjistit více</a></div>
                <div class="product-card bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col"><div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Magnesium.jpg" class="product-image w-full h-auto transition-transform duration-300"></div><h4 class="font-bold text-xl text-brand-primary">Magnesium Komplex</h4><p class="text-gray-500 text-sm my-3 flex-grow">Proti únavě a pro normální činnost svalů a nervů.</p><a href="produkty.php" class="btn-primary mt-4 inline-block bg-brand-primary hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full">Zjistit více</a></div>
                <div class="product-card bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-xl transition-shadow duration-300 flex flex-col"><div class="overflow-hidden rounded-md mb-5"><img src="obrazky/Probiotika.jpg" class="product-image w-full h-auto transition-transform duration-300"></div><h4 class="font-bold text-xl text-brand-primary">Probiotika</h4><p class="text-gray-500 text-sm my-3 flex-grow">Pro zdravou střevní mikroflóru a správné zažívání.</p><a href="produkty.php" class="btn-primary mt-4 inline-block bg-brand-primary hover:bg-brand-text text-white font-bold py-2 px-8 rounded-full">Zjistit více</a></div>
            </div>
        </div>
    </section>
    <section id="home-o-nas" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12 md:gap-16">
                <div class="md:w-1/2 flex justify-center"><img src="obrazky/tym.png" class="w-full md:w-3/4 rounded-lg shadow-lg"></div>
                <div class="md:w-7/12">
                    <h2 class="text-3xl md:text-4xl font-serif text-brand-primary mb-4">Naše filozofie</h2>
                    <p class="text-lg text-gray-600 mb-4">Ve Laboratoires spojujeme přesnost vědy s moudrostí přírody. Naším cílem je vyvíjet vysoce kvalitní a funkční doplňky stravy, které jsou dostupné pro každého – bez kompromisů.</p>
                    <a href="o-nas.php" class="btn-primary mt-4 inline-block bg-transparent border border-brand-primary text-brand-primary hover:bg-brand-primary hover:text-white font-bold py-2 px-8 rounded-full">Více o nás</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
