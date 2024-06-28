<section class="py-6 md:py-8 lg:py-10">
    <div class="px-4 md:px-14 lg:px-20 lg:flex lg:items-center lg:justify-center">
        <div class="w-full">
            <h2 class="text-xl md:text-2xl text-gray-800 text-center font-bold mb-6">FAQ ?</h2>

            <div class="lg:text-lg">
                <div class="faq-item">
                    <button class="faq-question w-full text-left p-4 bg-gray-200 hover:bg-gray-300 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(this)">
                        Trouver un artisan
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="faq-answer p-4 bg-white hidden">
                        Utilser notre bar de recherche pour trouver un artisan.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question w-full text-left p-4 bg-gray-200 hover:bg-gray-300 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(this)">
                        Questions fréquements posées
                        <i class="fas fa-chevron-down text-sm lg:"></i>
                    </button>
                    <div class="faq-answer p-4 bg-white hidden">
                        <span>Comment trouver un artisan.</span> <br />
                        <span>Comment premdre rendez vous?</span>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question w-full text-left p-4 bg-gray-200 hover:bg-gray-300 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(this)">
                        Comment proposer un service ?
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="faq-answer p-4 bg-white hidden">
                        Créer un compte et poster vos service...
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question w-full text-left p-4 bg-gray-200 hover:bg-gray-300 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(this)">
                        Comment trouver un prestataire de services facilement ?
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="faq-answer p-4 bg-white hidden">
                        Utilser notre bar de recherche pour trouver un artisan.
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question w-full text-left p-4 bg-gray-200 hover:bg-gray-300 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(this)">
                        Qui peux proposer des services ?
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="faq-answer p-4 bg-white hidden">
                        Toute personne ayant  18 ans ou plus
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleAccordion(element) {
        const answer = element.nextElementSibling;
        const isHidden = answer.classList.contains('hidden');

        document.querySelectorAll('.faq-answer').forEach(item => {
            item.classList.add('hidden');
            item.previousElementSibling.querySelector('i').classList.remove('fa-chevron-up');
            item.previousElementSibling.querySelector('i').classList.add('fa-chevron-down');
        });

        if (isHidden) {
            answer.classList.remove('hidden');
            element.querySelector('i').classList.remove('fa-chevron-down');
            element.querySelector('i').classList.add('fa-chevron-up');
        } else {
            answer.classList.add('hidden');
            element.querySelector('i').classList.remove('fa-chevron-up');
            element.querySelector('i').classList.add('fa-chevron-down');
        }
    }
</script>