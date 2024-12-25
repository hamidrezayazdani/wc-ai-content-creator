/**
 * AI Content Creator Admin JavaScript
 */
document.addEventListener('DOMContentLoaded', function () {
  const promptSelect = document.getElementById('wcai_prompt_type');
  const promptContent = document.getElementById('wcai_prompt_content');
  const copyButton = document.querySelector('.wcai-copy-button');
  const replacementKbds = document.querySelectorAll('.wcai-replacements kbd');
  const productData = JSON.parse(document.getElementById('wcai_product_data').innerHTML);

  if (!promptSelect || !promptContent || !copyButton) return;

  /**
   * Replace placeholders in prompt text
   * @param {string} text
   * @returns {string}
   */
  function replacePlaceholders(text) {
    const replacements = {
      '{product_title}': productData.product_title,
      '{current_title}': productData.current_title,
      '{current_content}': productData.current_content,
      '{current_excerpt}': productData.current_excerpt,
      '{SKU}': productData.sku,
      '{GTIN}': productData.gtin,
      '{UPC}': productData.upc,
      '{EAN}': productData.ean,
      '{ISBN}': productData.isbn
    };

    return text.replace(/\{[^}]+\}/g, match => replacements[match] || match);
  }

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
   * Handle prompt type selection
   */
  promptSelect.addEventListener('change', function () {
    const selectedPrompt = this.value;
    const promptText = wcaiData.prompts[selectedPrompt] || '';
    promptContent.value = replacePlaceholders(promptText);
    promptContent.classList.add('wcai-fade-in');
  });

  /**
   * Handle copy button click
   */
  copyButton.addEventListener('click', async function () {
    const originalText = this.textContent;
    await copyToClipboard(promptContent.value, this);
    this.textContent = wcaiData.i18n.copied;

    setTimeout(() => {
      this.textContent = originalText;
    }, 3000);
  });

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