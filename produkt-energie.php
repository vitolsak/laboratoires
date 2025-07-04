<?php 
// Nastavení titulku specifického pro tuto stránku
$pageTitle = "Energie & Paměť - Laboratoires.cz";
// Vložení společné hlavičky
include 'header.php'; 
?>

<!-- Hlavní obsah stránky -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">
            <div class="md:w-5/12">
                <img src="obrazky/Energie.jpg" alt="Produkt Energie & Paměť" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="md:w-7/12">
                <h2 class="text-4xl md:text-5xl font-serif text-brand-primary mb-2">Energie & Paměť</h2>
                <p class="text-brand-accent text-lg mb-6 font-medium">Pro vaši bystrou mysl</p>
                <div class="space-y-4 text-gray-600">
                    <p>Ať už se učíte na zkoušku, připravujete důležitou prezentaci, nebo se jen potřebujete plně soustředit na práci, náš produkt je váš ideální partner pro podporu kognitivních funkcí.</p>
                    <div>
                        <h4 class="font-bold text-brand-primary text-xl mb-2">Klíčové výhody:</h4>
                        <ul class="list-disc list-inside space-y-1">
                            <li>Podporuje paměť a schopnost učení.</li>
                            <li>Zlepšuje koncentraci a mentální výkonnost.</li>
                            <li>Přispívá k lepšímu prokrvení mozku.</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-primary text-xl mb-2">Složení:</h4>
                        <p>Účinná kombinace extraktu z Ginkgo biloby a optimální dávky kofeinu pro maximální synergický efekt.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-primary text-xl mb-2">Dávkování:</h4>
                        <p>Užívejte 1 kapsli denně, ideálně ráno nebo v situacích vyžadujících zvýšené soustředění.</p>
                    </div>
                    <a href="produkty.php" class="inline-block text-brand-accent pt-4 hover:underline">← Zpět na přehled produktů</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
// Vložení společné patičky
include 'footer.php'; 
?>
