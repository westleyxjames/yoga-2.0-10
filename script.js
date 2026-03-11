// Mobile Menu Toggle
function toggleMobileMenu() {
  const navMenu = document.querySelector('.nav-menu');
  navMenu.classList.toggle('active');
}

// Cookie Consent
function initCookieConsent() {
  const consent = localStorage.getItem('cookieConsent');
  const cookieBanner = document.querySelector('.cookie-consent');
  
  if (!consent && cookieBanner) {
    cookieBanner.classList.add('show');
  }
}

function acceptCookies() {
  localStorage.setItem('cookieConsent', 'accepted');
  const banner = document.querySelector('.cookie-consent');
  if (banner) {
    banner.classList.remove('show');
  }
}

function manageCookies() {
  localStorage.setItem('cookieConsent', 'managed');
  const banner = document.querySelector('.cookie-consent');
  if (banner) {
    banner.classList.remove('show');
  }
  // In a real app, you would open a preferences modal here
}

// Booking Modal
function openBookingModal() {
  const modal = document.getElementById('bookingModal');
  if (modal) {
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
  }
}

function closeBookingModal() {
  const modal = document.getElementById('bookingModal');
  if (modal) {
    modal.classList.remove('show');
    document.body.style.overflow = 'auto';
  }
}

function handleBookingSubmit(event) {
  event.preventDefault();
  
  const consent = document.getElementById('bookingConsent').checked;
  
  if (!consent) {
    alert('Please agree to the Privacy Policy and Terms.');
    return;
  }
  
  // Get form data
  const formData = {
    name: document.getElementById('bookingName').value,
    email: document.getElementById('bookingEmail').value,
    phone: document.getElementById('bookingPhone').value,
    service: document.getElementById('bookingService').value
  };
  
  console.log('Booking submitted:', formData);
  alert('Thank you! Your booking request has been submitted. We will contact you soon.');
  
  // Reset form and close modal
  document.getElementById('bookingForm').reset();
  closeBookingModal();
}

// Contact Form
function handleContactSubmit(event) {
  event.preventDefault();
  
  const consent = document.getElementById('contactConsent').checked;
  
  if (!consent) {
    alert('Please agree to the Privacy Policy and Terms & Conditions.');
    return;
  }
  
  // Get form data
  const formData = {
    fullName: document.getElementById('contactName').value,
    email: document.getElementById('contactEmail').value,
    phone: document.getElementById('contactPhone').value,
    service: document.getElementById('contactService').value,
    message: document.getElementById('contactMessage').value
  };
  
  console.log('Contact form submitted:', formData);
  alert('Thank you for contacting us! We will get back to you soon.');
  
  // Reset form
  document.getElementById('contactForm').reset();
}

// Set active navigation link
function setActiveNav() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav-link');
  
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
}

// Close modal when clicking outside
window.onclick = function(event) {
  const modal = document.getElementById('bookingModal');
  if (event.target === modal) {
    closeBookingModal();
  }
}

// Smooth scroll for anchor links
document.addEventListener('DOMContentLoaded', function() {
  // Initialize cookie consent
  initCookieConsent();
  
  // Set active navigation
  setActiveNav();
  
  // Smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
});