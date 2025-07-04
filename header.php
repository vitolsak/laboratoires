<?php
// Získáme název aktuálního souboru (např. "index.php")
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Dynamický titulek stránky, který nastavíme v každém souboru zvlášť -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Laboratoires.cz'; ?></title>
    <link rel="icon" href="obrazky/logo.jpg" type="image/jpeg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'], serif: ['Playfair Display', 'serif'], },
                    colors: { 'brand-primary': '#2d332a', 'brand-secondary': '#f8f7f5', 'brand-accent': '#b9a284', 'brand-text': '#1c1c1c', }
                }
            }
        }
    </script>
</head>
<body class="text-brand-text font-sans">
    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="h-10">
                <img src="obrazky/logo.jpg" alt="Logo Laboratoires" class="h-full w-auto">
            </a>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="produkty.php" class="nav-link hover:text-brand-accent <?php echo ($currentPage == 'produkty.php') ? 'text-brand-accent font-bold' : 'text-brand-text'; ?>">Produkty</a>
                <a href="o-nas.php" class="nav-link hover:text-brand-accent <?php echo ($currentPage == 'o-nas.php') ? 'text-brand-accent font-bold' : 'text-brand-text'; ?>">O nás</a>
                <a href="kontakt.php" class="nav-link hover:text-brand-accent <?php echo ($currentPage == 'kontakt.php') ? 'text-brand-accent font-bold' : 'text-brand-text'; ?>">Kontakt</a>
            </nav>
            <div class="flex items-center space-x-4">
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-full hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-text"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <a href="produkty.php" class="block text-center py-3 px-6 hover:bg-gray-100 transition-colors <?php echo ($currentPage == 'produkty.php') ? 'text-brand-accent font-bold' : 'text-brand-text'; ?>">Produkty</a>
            <a href="o-nas.php" class="block text-center py-3 px-6 hover:bg-gray-100 transition-colors <?php echo ($currentPage == 'o-nas.php') ? 'text-brand-accent font-bold' : 'text-brand-text'; ?>">O nás</a>
            <a href="kontakt.php" class="block text-center py-3 px-6 hover:bg-gray-100 transition-colors <?php echo ($currentPage == 'kontakt.php') ? 'text-brand-accent font-bold' : 'text-brand-text'; ?>">Kontakt</a>
        </div>
    </header>
    <main class="fade-in">
