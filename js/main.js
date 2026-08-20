document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Navbar on Scroll
    const navbar = document.querySelector('.navbar-custom');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // 2. Animated Stats Counter (using IntersectionObserver)
    const stats = document.querySelectorAll('.stat-number');
    if (stats.length > 0) {
        const countUp = (element) => {
            const target = +element.getAttribute('data-target');
            const duration = 2000; // 2 seconds
            const step = 20;
            const increment = target / (duration / step);
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target.toLocaleString('en-IN') + (element.getAttribute('data-suffix') || '');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current).toLocaleString('en-IN') + (element.getAttribute('data-suffix') || '');
                }
            }, step);
        };

        const statsObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        stats.forEach(stat => statsObserver.observe(stat));
    }

    // 3. Interactive Donation Calculator (Donate Page)
    const amountChips = document.querySelectorAll('.amount-chip');
    const customAmountInput = document.getElementById('custom-amount');
    const impactText = document.getElementById('impact-preview-text');
    const donationForm = document.getElementById('donation-form');

    const impacts = {
        '500': 'Provides study materials and textbooks for 1 child for a month.',
        '1000': 'Supplies nutritious meals and clean drinking water for 2 children for a month.',
        '2500': 'Supports digital literacy classes and computer training for 1 young student.',
        '5000': 'Empowers a woman with vocational training and starter tailoring/craft kit.'
    };

    if (amountChips.length > 0) {
        amountChips.forEach(chip => {
            chip.addEventListener('click', () => {
                // Remove active class from other chips
                amountChips.forEach(c => c.classList.remove('active'));
                chip.classList.add('active');

                const amount = chip.getAttribute('data-amount');
                if (amount === 'custom') {
                    if (customAmountInput) {
                        customAmountInput.style.display = 'block';
                        customAmountInput.focus();
                        customAmountInput.value = '';
                    }
                    if (impactText) {
                        impactText.textContent = 'Every rupee helps fund educational, healthcare, and livelihood projects.';
                    }
                } else {
                    if (customAmountInput) {
                        customAmountInput.style.display = 'none';
                        customAmountInput.value = amount;
                    }
                    if (impactText) {
                        impactText.textContent = impacts[amount] || 'Your contribution drives significant local impact.';
                    }
                }
            });
        });
    }

    if (customAmountInput) {
        customAmountInput.addEventListener('input', (e) => {
            const val = e.target.value;
            if (impactText) {
                if (val && val > 0) {
                    impactText.textContent = `Your donation of ₹${parseInt(val).toLocaleString('en-IN')} will directly support critical field interventions and project implementation.`;
                } else {
                    impactText.textContent = 'Every rupee helps fund educational, healthcare, and livelihood projects.';
                }
            }
        });
    }

    // 4. Secure Payment Mock Interaction
    if (donationForm) {
        donationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = donationForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing Transaction...';

            setTimeout(() => {
                alert('Thank you! This is a secure payment mockup. In production, this connects to Razorpay / Stripe.');
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                donationForm.reset();
                if (customAmountInput) customAmountInput.style.display = 'none';
                amountChips.forEach(c => c.classList.remove('active'));
                if (amountChips[1]) amountChips[1].click(); // default back to 1000
            }, 2000);
        });
    }
});
