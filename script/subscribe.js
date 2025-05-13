document.getElementById('subscribeForm').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const email = document.getElementById('emailInput').value;

    fetch('subscribe.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `email=${encodeURIComponent(email)}`
    })
    .then(response => response.text())
    .then(result => {
        if (result === 'success') {
            document.getElementById('popupOverlayNewsletter').style.display = 'flex';
        } else {
            alert('Gagal berlangganan. Masukkan email yang valid.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

document.getElementById('closePopup').onclick = function () {
    document.getElementById('popupOverlayNewsletter').style.display = 'none';
}
