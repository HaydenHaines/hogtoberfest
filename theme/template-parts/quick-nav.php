<?php $reg_url = hogtoberfest_registration_url(); ?>

<nav class="quick-nav" aria-label="Quick navigation">
    <div class="container">
        <div class="quick-nav__grid">

            <!-- Register -->
            <a href="<?php echo esc_url( $reg_url ); ?>"
               class="quick-nav__btn"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Register your team (opens in a new tab)">
                <span class="quick-nav__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <!-- Crosshair / target sight -->
                        <circle cx="12" cy="12" r="3"/>
                        <circle cx="12" cy="12" r="8"/>
                        <line x1="12" y1="2" x2="12" y2="5"/>
                        <line x1="12" y1="19" x2="12" y2="22"/>
                        <line x1="2" y1="12" x2="5" y2="12"/>
                        <line x1="19" y1="12" x2="22" y2="12"/>
                    </svg>
                </span>
                Register
            </a>

            <!-- Schedule -->
            <a href="<?php echo esc_url( home_url( '/schedule' ) ); ?>"
               class="quick-nav__btn"
               aria-label="View event schedule">
                <span class="quick-nav__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <!-- Calendar -->
                        <rect x="3" y="4" width="18" height="18" rx="2"/>
                        <line x1="3" y1="9" x2="21" y2="9"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <rect x="7" y="13" width="3" height="3" rx="0.5" stroke-width="1.5"/>
                        <rect x="14" y="13" width="3" height="3" rx="0.5" stroke-width="1.5"/>
                    </svg>
                </span>
                Schedule
            </a>

            <!-- Hunt Rules -->
            <a href="<?php echo esc_url( home_url( '/hunt' ) ); ?>"
               class="quick-nav__btn"
               aria-label="Read the hunt rules">
                <span class="quick-nav__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <!-- Stylized hog/boar head silhouette as simple paths -->
                        <!-- Head circle -->
                        <ellipse cx="12" cy="12" rx="7" ry="6"/>
                        <!-- Snout -->
                        <ellipse cx="12" cy="15" rx="3" ry="2"/>
                        <!-- Left ear -->
                        <path d="M6 8 L4 4 L8 7"/>
                        <!-- Right ear -->
                        <path d="M18 8 L20 4 L16 7"/>
                        <!-- Left tusk -->
                        <path d="M9 16 L7 19"/>
                        <!-- Right tusk -->
                        <path d="M15 16 L17 19"/>
                        <!-- Left eye -->
                        <circle cx="9.5" cy="11" r="1" stroke-width="1.5"/>
                        <!-- Right eye -->
                        <circle cx="14.5" cy="11" r="1" stroke-width="1.5"/>
                    </svg>
                </span>
                Hunt Rules
            </a>

            <!-- Attend -->
            <a href="<?php echo esc_url( home_url( '/attend' ) ); ?>"
               class="quick-nav__btn"
               aria-label="Learn how to attend the fall festival">
                <span class="quick-nav__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <!-- Festival tent / big top -->
                        <path d="M2 20 L12 4 L22 20 Z"/>
                        <path d="M7 20 L12 10 L17 20"/>
                        <!-- Tent flap -->
                        <line x1="12" y1="4" x2="12" y2="2"/>
                        <!-- Base line -->
                        <line x1="2" y1="20" x2="22" y2="20"/>
                        <!-- Door arch -->
                        <path d="M10 20 Q10 16 12 16 Q14 16 14 20"/>
                    </svg>
                </span>
                Attend
            </a>

            <!-- Vendors -->
            <a href="<?php echo esc_url( home_url( '/vendors' ) ); ?>"
               class="quick-nav__btn"
               aria-label="Information for vendors">
                <span class="quick-nav__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <!-- Vendor stall / storefront -->
                        <rect x="3" y="10" width="18" height="11" rx="1"/>
                        <path d="M3 10 L5 3 H19 L21 10"/>
                        <!-- Awning scallop -->
                        <path d="M3 10 Q5 13 7 10 Q9 13 11 10 Q13 13 15 10 Q17 13 19 10 Q21 13 21 10"/>
                        <!-- Door -->
                        <rect x="10" y="15" width="4" height="6" rx="1"/>
                    </svg>
                </span>
                Vendors
            </a>

            <!-- Contact -->
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
               class="quick-nav__btn"
               aria-label="Contact us">
                <span class="quick-nav__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <!-- Phone handset -->
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.95-.88a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </span>
                Contact
            </a>

        </div>
    </div>
</nav>
