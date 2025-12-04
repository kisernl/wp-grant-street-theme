<?php
/**
 * The Essentials of Our Faith Component
 * 
 * Displays the church's essential beliefs with accordion functionality
 * for the numbered statements of faith.
 */
?>

<section class="py-20 bg-secondary">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif font-bold text-primary mb-6">The Essentials of Our Faith</h2>
                <div class="w-16 h-1 bg-primary mx-auto"></div>
            </div>

            <!-- Introduction Text -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-12">
                <p class="text-lg text-muted leading-relaxed text-center italic">
                    Being Truth requires our unreserved submission in all areas of life. The infallible Word of God—the 66 books of the Old and New Testaments—is a complete and unified witness to God's redemptive acts culminating in the incarnation of the Living Word, the Lord Jesus Christ. The Bible, uniquely and fully inspired by the Holy Spirit, is the supreme and final authority on all matters on which it speaks. On this sure foundation, we affirm these additional essentials of our faith.
                </p>
            </div>

            <!-- Accordion Container -->
            <div class="space-y-4" x-data="{ activeAccordion: null }">
                
                <!-- Essential 1: God -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors duration-200 flex justify-between items-center"
                        @click="activeAccordion = activeAccordion === 1 ? null : 1"
                    >
                        <span class="text-lg font-semibold text-primary">1. The Triune God</span>
                        <svg 
                            class="w-5 h-5 text-primary transition-transform duration-200"
                            :class="{ 'rotate-180': activeAccordion === 1 }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === 1" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="px-6 pb-6 border-t border-gray-100"
                    >
                        <p class="text-muted leading-relaxed">
                            We believe in one God, the sovereign Creator and Sustainer of all things, infinitely perfect and eternally existing in three Persons: Father, Son, and Holy Spirit. To Him be all honor, glory, and praise forever!
                        </p>
                    </div>
                </div>

                <!-- Essential 2: Jesus Christ -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors duration-200 flex justify-between items-center"
                        @click="activeAccordion = activeAccordion === 2 ? null : 2"
                    >
                        <span class="text-lg font-semibold text-primary">2. Jesus Christ, the Living Word</span>
                        <svg 
                            class="w-5 h-5 text-primary transition-transform duration-200"
                            :class="{ 'rotate-180': activeAccordion === 2 }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === 2" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="px-6 pb-6 border-t border-gray-100"
                    >
                        <p class="text-muted leading-relaxed">
                            Jesus Christ, the living Word, became flesh through His miraculous conception by the Holy Spirit and His virgin birth. He who is true God became true man united in one Person forever. He died on the cross a sacrifice for our sins according to the Scriptures. On the third day He arose bodily from the dead, ascended into heaven where, at the right hand of the Majesty on High, He now is our High Priest and Mediator.
                        </p>
                    </div>
                </div>

                <!-- Essential 3: Holy Spirit -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors duration-200 flex justify-between items-center"
                        @click="activeAccordion = activeAccordion === 3 ? null : 3"
                    >
                        <span class="text-lg font-semibold text-primary">3. The Holy Spirit</span>
                        <svg 
                            class="w-5 h-5 text-primary transition-transform duration-200"
                            :class="{ 'rotate-180': activeAccordion === 3 }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === 3" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="px-6 pb-6 border-t border-gray-100"
                    >
                        <p class="text-muted leading-relaxed">
                            The Holy Spirit has come to glorify Christ and to apply the saving work of Christ to our hearts. He convicts us of sin and draws us to the Savior, indwelling our hearts. He gives new life to us, empowers and imparts gifts to us for service. He instructs and guides us into all truth, and seals us for the day of redemption.
                        </p>
                    </div>
                </div>

                <!-- Essential 4: Salvation -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors duration-200 flex justify-between items-center"
                        @click="activeAccordion = activeAccordion === 4 ? null : 4"
                    >
                        <span class="text-lg font-semibold text-primary">4. Salvation by Grace</span>
                        <svg 
                            class="w-5 h-5 text-primary transition-transform duration-200"
                            :class="{ 'rotate-180': activeAccordion === 4 }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === 4" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="px-6 pb-6 border-t border-gray-100"
                    >
                        <p class="text-muted leading-relaxed">
                            Being estranged from God and condemned by our sinfulness, our salvation is wholly dependent upon the work of God's free grace. God credits His righteousness to those who put their faith in Christ alone for their salvation, and thereby justifies them in His sight. Only such as are born of the Holy Spirit and receive Jesus Christ become children of God and heirs of eternal life.
                        </p>
                    </div>
                </div>

                <!-- Essential 5: The Church -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors duration-200 flex justify-between items-center"
                        @click="activeAccordion = activeAccordion === 5 ? null : 5"
                    >
                        <span class="text-lg font-semibold text-primary">5. The True Church</span>
                        <svg 
                            class="w-5 h-5 text-primary transition-transform duration-200"
                            :class="{ 'rotate-180': activeAccordion === 5 }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === 5" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="px-6 pb-6 border-t border-gray-100"
                    >
                        <p class="text-muted leading-relaxed">
                            The true Church is composed of all persons who through saving faith in Jesus Christ and the sanctifying work of the Holy Spirit are united together in the body of Christ. The Church finds her visible yet imperfect expression in local congregations where the Word of God is preached in its purity and the sacraments are administered in their integrity, where scriptural discipline is practiced, and where loving fellowship is maintained. For her perfecting she awaits the return of her Lord.
                        </p>
                    </div>
                </div>

                <!-- Essential 6: Second Coming -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors duration-200 flex justify-between items-center"
                        @click="activeAccordion = activeAccordion === 6 ? null : 6"
                    >
                        <span class="text-lg font-semibold text-primary">6. Christ's Return</span>
                        <svg 
                            class="w-5 h-5 text-primary transition-transform duration-200"
                            :class="{ 'rotate-180': activeAccordion === 6 }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === 6" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="px-6 pb-6 border-t border-gray-100"
                    >
                        <p class="text-muted leading-relaxed">
                            Jesus Christ will come again to the earth personally, visibly, and bodily—to judge the living and the dead, and to consummate history and the eternal plan of God. "Even so, come, Lord Jesus" (Revelation 22:20).
                        </p>
                    </div>
                </div>

                <!-- Essential 7: Great Commission -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <button 
                        class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors duration-200 flex justify-between items-center"
                        @click="activeAccordion = activeAccordion === 7 ? null : 7"
                    >
                        <span class="text-lg font-semibold text-primary">7. The Great Commission</span>
                        <svg 
                            class="w-5 h-5 text-primary transition-transform duration-200"
                            :class="{ 'rotate-180': activeAccordion === 7 }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div 
                        x-show="activeAccordion === 7" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="px-6 pb-6 border-t border-gray-100"
                    >
                        <p class="text-muted leading-relaxed">
                            The Lord Jesus Christ commands all believers to proclaim the gospel throughout the world and to make disciples of all nations. Obedience to the Great Commission requires total commitment to "Him who loved us and gave Himself for us." He calls us to a life of self-denying love and service. "For we are His workmanship, created in Christ Jesus for good works, which God prepared beforehand that we should walk in them" (Ephesians 2:10).
                        </p>
                    </div>
                </div>

            </div>

            <!-- Footer Section -->
            <div class="mt-12 text-center">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <p class="text-muted leading-relaxed mb-4">
                        The Essentials are set forth in greater detail in the <a href="https://epc.org/wp-content/uploads/2025/01/WCF-Online-Version.pdf" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-primary/80 transition-colors">Westminster Confession of Faith</a>.
                    </p>
                    <div class="text-lg font-serif text-primary italic mb-4">
                        In Essentials … Unity<br>
                        In Non-Essentials … Liberty<br>
                        In All Things … Charity
                    </div>
                    <p class="text-muted leading-relaxed mb-4 text-sm">
                        Silver Lake Christian Community Church is a member of the <a href="https://www.epc.org/" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-primary/80 transition-colors">Evangelical Presbyterian Church (EPC)</a>.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>