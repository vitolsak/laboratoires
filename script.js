document.addEventListener('DOMContentLoaded', function () {
    const pages = document.querySelectorAll('.page');
    const links = document.querySelectorAll('.route-link');
    const mobileMenu = document.getElementById('mobile-menu');

    function showPage(targetId) {
        const pageId = targetId.startsWith('#') ? targetId.substring(1) : 'home';
        
        pages.forEach(page => {
            if (page.id === pageId) {
                page.classList.add('active');
            } else {
                page.classList.remove('active');
            }
        });

        window.scrollTo(0, 0);
        mobileMenu.classList.add('hidden');
    }

    function handleRouteChange() {
        const hash = window.location.hash || '#home';
        showPage(hash);
        const activePage = document.querySelector('.page.active');
        if (activePage) {
            activePage.classList.remove('fade-in');
            void activePage.offsetWidth; // Trigger reflow
            activePage.classList.add('fade-in');
        }
    }

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                if (window.location.hash !== href) {
                    window.location.hash = href;
                } else {
                    handleRouteChange();
                }
            }
        });
    });

    window.addEventListener('hashchange', handleRouteChange);
    handleRouteChange();

    // Interaktivní karusel produktů
    const carousel = document.getElementById('product-carousel');
    const scrollLeftBtn = document.getElementById('scroll-left');
    const scrollRightBtn = document.getElementById('scroll-right');
    if (carousel) {
        const scrollAmount = 336;
        scrollLeftBtn.addEventListener('click', () => {
            carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
        scrollRightBtn.addEventListener('click', () => {
            carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }

    // Mobilní menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Aktuální rok v patičce
    const currentYearEl = document.getElementById('current-year');
    if (currentYearEl) {
        currentYearEl.textContent = new Date().getFullYear();
    }
    
    // Zpracování odeslání kontaktního formuláře
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Zabráníme klasickému odeslání formuláře

            const formData = new FormData(contactForm);
            const feedbackDiv = document.getElementById('form-feedback');
            feedbackDiv.textContent = 'Odesílám...';
            feedbackDiv.style.color = 'inherit';

            fetch('odeslat_formular.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    feedbackDiv.textContent = 'Děkujeme! Vaše zpráva byla úspěšně odeslána.';
                    feedbackDiv.style.color = 'green';
                    contactForm.reset();
                } else {
                    feedbackDiv.textContent = 'Chyba: ' + data.message;
                    feedbackDiv.style.color = 'red';
                }
            })
            .catch(error => {
                feedbackDiv.textContent = 'Došlo k chybě při odesílání. Zkuste to prosím později.';
                feedbackDiv.style.color = 'red';
                console.error('Error:', error);
            });
        });
    }
});