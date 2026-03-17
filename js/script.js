document.getElementById('contact-form').addEventListener('submit', function(event) {
    var captcha = document.getElementById('captcha').value;
    if (parseInt(captcha) !== 5) {
        event.preventDefault();
        alert('Respuesta incorrecta a la pregunta de seguridad.');
    }

    var phone = document.getElementById('phone').value;
    var phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        event.preventDefault();
        alert('Por favor, ingresa un número de teléfono válido de 10 dígitos.');
    }
});
// Chat Widget functionality
function toggleChat() {
  const chatContainer = document.getElementById('chatContainer');
  const notification = document.querySelector('.notification-badge');
  chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
  if (notification) notification.style.display = 'none';
}

function sendMessage() {
  const input = document.getElementById('chatInput');
  const message = input.value.trim();
  
  if (message) {
    // Mostrar el mensaje en el chat
    const chatMessages = document.getElementById('chatMessages');
    const messageElement = document.createElement('div');
    messageElement.className = 'message sent';
    messageElement.innerHTML = `
      <div class="message-content">
        ${message}
      </div>
      <div class="message-time">Ahora</div>
    `;
    
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    input.value = '';

    // Número de WhatsApp (reemplaza con tu número)
    const phoneNumber = '593962988811'; // Sin + o espacios
    
    // Crear el enlace de WhatsApp con el mensaje
    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    
    // Mostrar mensaje de redirección
    const responseElement = document.createElement('div');
    responseElement.className = 'message received';
    responseElement.innerHTML = `
      <div class="message-content">
        Te estamos redirigiendo a WhatsApp para continuar la conversación...
        <br><br>
        <a href="${whatsappURL}" target="_blank" class="whatsapp-link">
          <i class="fab fa-whatsapp"></i> Continuar en WhatsApp
        </a>
      </div>
      <div class="message-time">Ahora</div>
    `;
    
    chatMessages.appendChild(responseElement);
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Redirigir automáticamente después de 2 segundos
    setTimeout(() => {
      window.open(whatsappURL, '_blank');
    }, 2000);
  }
}

function handleKeyPress(event) {
  if (event.key === 'Enter') {
    sendMessage();
  }
}