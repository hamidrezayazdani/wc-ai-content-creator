/**
 * AI Content Creator Settings JavaScript
 */
document.addEventListener('DOMContentLoaded', function () {
  const replacementKbds = document.querySelectorAll('.wcai-replacements-grid kbd');

  if (!replacementKbds.length) return;

  /**
   * Copy text to clipboard
   * @param {string} text
   * @param {HTMLElement} element
   */
  async function copyToClipboard(text, element) {
    try {
      await navigator.clipboard.writeText(text);
      element.classList.add('copied');
      element.classList.add('wcai-pop');

      setTimeout(() => {
        element.classList.remove('copied');
        element.classList.remove('wcai-pop');
      }, 3000);
    } catch (err) {
      console.error('Failed to copy text:', err);
    }
  }

  /**
   * Handle replacement kbd clicks
   */
  replacementKbds.forEach(kbd => {
    kbd.addEventListener('click', async function () {
      const replacement = this.dataset.replacement;
      await copyToClipboard(replacement, this);
    });
  });
});