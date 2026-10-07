import './bootstrap';

const pageShell = document.querySelector('.page-shell');
const progressBar = document.querySelector('.scroll-progress');
const navigationLinks = [...document.querySelectorAll('.main-nav a')];
const sections = [...document.querySelectorAll('main section[id]')];
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const updateScrollState = () => {
	const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
	const progress = scrollableHeight > 0 ? (window.scrollY / scrollableHeight) * 100 : 0;

	progressBar?.style.setProperty('--scroll-progress', `${progress}%`);

	const currentSection = sections.reduce((activeSection, section) => {
		return window.scrollY + 180 >= section.offsetTop ? section : activeSection;
	}, sections[0]);
	const currentId = window.scrollY + 180 < (sections[0]?.offsetTop ?? 0)
		? 'home'
		: currentSection?.id;

	navigationLinks.forEach((link) => {
		link.classList.toggle('is-active', link.getAttribute('href') === `#${currentId}`);
	});
};

window.addEventListener('scroll', updateScrollState, { passive: true });
updateScrollState();

const platformFilters = [...document.querySelectorAll('.platform-filter')];
const setupCards = [...document.querySelectorAll('.device-card[data-platform]')];

platformFilters.forEach((button) => {
	button.addEventListener('click', () => {
		const selectedPlatform = button.dataset.platformFilter;

		platformFilters.forEach((filter) => {
			const isSelected = filter === button;
			filter.classList.toggle('is-selected', isSelected);
			filter.setAttribute('aria-pressed', String(isSelected));
		});

		setupCards.forEach((card) => {
			card.hidden = selectedPlatform !== 'all' && card.dataset.platform !== selectedPlatform;
		});
	});
});

if (pageShell && !reduceMotion) {
	window.addEventListener('pointermove', (event) => {
		pageShell.style.setProperty('--pointer-x', `${event.clientX}px`);
		pageShell.style.setProperty('--pointer-y', `${event.clientY}px`);
	}, { passive: true });
}

const animatedElements = document.querySelectorAll(
	'.section, .device-card, .feature-card, .team-card, .community-box, .cta-panel',
);

if (!reduceMotion) {
	animatedElements.forEach((element, index) => {
		element.classList.add('motion-ready');
		element.style.setProperty('--motion-delay', `${(index % 6) * 70}ms`);
	});

	const observer = new IntersectionObserver((entries, animationObserver) => {
		entries.forEach((entry) => {
			if (!entry.isIntersecting) {
				return;
			}

			entry.target.classList.add('is-visible');
			animationObserver.unobserve(entry.target);
		});
	}, { threshold: 0.12 });

	animatedElements.forEach((element) => observer.observe(element));
}
