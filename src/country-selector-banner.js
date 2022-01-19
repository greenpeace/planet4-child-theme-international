// Set up behaviour for the country selector banner needed for the A/B test
const countrySelectorBanner = document.getElementById('country-selector-banner');

if (countrySelectorBanner) {
  const link = countrySelectorBanner.querySelector('a[href="#country-selector"]');
  const closeBannerButton = countrySelectorBanner.querySelector('.close-banner');
  const countrySelectorToggle = document.querySelector('.country-selector-toggle');

  link.onclick = () => {
    closeBannerButton.click();

    // We need to open the country selector if it's closed
    if (countrySelectorToggle.getAttribute('aria-expanded') === 'false') {
      countrySelectorToggle.setAttribute('aria-expanded', 'true');
      countrySelectorToggle.classList.add('open');
      countrySelectorToggle.dataset.gaAction = 'Close Country Selector';
    }
  };
}
