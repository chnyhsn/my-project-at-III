const keywordform = document.getElementById('keywordform');
const keywordinput = document.getElementById('keywordinput');
const searchbuttonid = document.getElementById('searchbuttonid');
const selectareaid = document.getElementById('selectareaid');

searchbuttonid.addEventListener('click', () => {
  if (
    keywordinput.value != ''
  ) {
    window.location.href = '../../W/search-result.php';
  }
  if (
    selectareaid.value != ''
  ) {
    window.location.href = '../../E/product-detail.php';
  }
});
