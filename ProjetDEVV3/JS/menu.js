let searchIcon = document.getElementById('searchIcon');
let searchBox = document.getElementById('searchBox');
let closeBtn = document.getElementById('closeSearch');

if (!searchIcon || !searchBox || !closeBtn) {
  console.warn("Éléments de recherche non trouvés.");
} else {
  searchIcon.addEventListener('click', function () {
    searchBox.style.display = "block";
  });

  closeBtn.addEventListener('click', function () {
    searchBox.style.display = "none";
  });
}

