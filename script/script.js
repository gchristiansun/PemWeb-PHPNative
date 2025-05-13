function openPopup(event) {
    event.preventDefault();
    const iframe = document.getElementById('popupFrame');
    iframe.src = 'popup.php?popup=true';
    document.getElementById('popupOverlay').style.display = 'flex';
    const url = new URL(window.location.href);
    url.searchParams.set('popup', 'true');
    history.pushState({}, '', url);
    return false;
}

function closePopup() {
    document.getElementById('popupOverlay').style.display = 'none';
    const url = new URL(window.location.href);
    url.searchParams.delete('popup');
    history.pushState({}, '', url);
}

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('popup') === 'true') {
        document.getElementById('popupFrame').src = 'popup.php?popup=true';
        document.getElementById('popupOverlay').style.display = 'flex';
    }
}