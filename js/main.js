// Chat Widget
function toggleChat() {
  const chatContainer = document.getElementById('chatContainer');
  chatContainer.style.display = chatContainer.style.display === 'none' ? 'block' : 'none';
}

function sendMessage() {
  const chatInput = document.getElementById('chatInput');
  const message = chatInput.value.trim();
  
  if (message) {
    // Mostrar el mensaje en el chat
    addMessageToChat(message, 'sent');
    chatInput.value = '';

    // Enviar el mensaje por email
    const emailBody = `Nuevo mensaje del chat web:\n${message}`;
    
    // Crear link mailto
    const mailtoLink = `mailto:technographicca@gmail.com?subject=Mensaje del Chat Web&body=${encodeURIComponent(emailBody)}`;
    
    // Abrir cliente de correo
    window.open(mailtoLink);

    // Mensaje automático de respuesta
    setTimeout(() => {
      addMessageToChat('Gracias por tu mensaje. Te responderemos pronto.', 'received');
    }, 1000);
  }
}

function addMessageToChat(message, type) {
  const chatMessages = document.getElementById('chatMessages');
  const messageDiv = document.createElement('div');
  messageDiv.className = `message ${type}`;
  
  messageDiv.innerHTML = `
    <div class="message-content">
      ${message}
    </div>
    <div class="message-time">
      ${new Date().toLocaleTimeString()}
    </div>
  `;
  
  chatMessages.appendChild(messageDiv);
  chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Back to Top Button
window.addEventListener('scroll', function() {
  const backToTop = document.getElementById('backToTop');
  if (window.pageYOffset > 300) {
    backToTop.classList.add('visible');
  } else {
    backToTop.classList.remove('visible');
  }
});

document.getElementById('backToTop').addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// Navbar Scroll
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.pageYOffset > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// Form Submission
document.getElementById('contactForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  // Validar el formulario
  if (!this.checkValidity()) {
    e.stopPropagation();
    this.classList.add('was-validated');
    return;
  }

  // Verificar honeypot
  if (this.querySelector('[name="honeypot"]').value) {
    return;
  }

  // Mostrar spinner
  const submitBtn = this.querySelector('#submitBtn');
  const spinner = submitBtn.querySelector('.spinner-border');
  submitBtn.disabled = true;
  spinner.classList.remove('d-none');

  try {
    const formData = new FormData(this);
    
    const response = await fetch('send_email.php', {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.status === 'success') {
      // Éxito
      this.reset();
      this.classList.remove('was-validated');
      alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
    } else {
      throw new Error('Error al enviar el formulario');
    }
  } catch (error) {
    alert('Lo sentimos, hubo un error al enviar el mensaje. Por favor intenta nuevamente.');
  } finally {
    // Ocultar spinner
    submitBtn.disabled = false;
    spinner.classList.add('d-none');
  }
});

// Initialize AOS
AOS.init({
  duration: 800,
  easing: 'ease-in-out',
  once: true
});

// Service Worker Registration
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('./sw.js')
      .then(registration => {
        console.log('SW registered: ', registration);
      })
      .catch(registrationError => {
        console.log('SW registration failed: ', registrationError);
      });
  });
}