<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ZenNest Yoga - Find balance, strength, and inner peace through yoga. Beginner-friendly classes, experienced instructors, and a welcoming community.">
  <title>ZenNest Yoga - Find Balance, Strength & Inner Peace</title>
  <link rel="stylesheet" href="styles-enhanced.css">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <nav class="nav-container">
      <a href="index.html" class="logo">
        <span class="logo-text">ZenNest</span>
        <span class="logo-text-light">Yoga</span>
      </a>
      
      <ul class="nav-menu" id="navMenu">
        <li><a href="index.html" class="nav-link active">Home</a></li>
        <li><a href="about.html" class="nav-link">About</a></li>
        <li><a href="services.html" class="nav-link">Services</a></li>
        <li><a href="contact.html" class="nav-link">Contact</a></li>
      </ul>
      
      <button class="menu-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu">
        <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    <!-- Hero Section -->
    <section class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwY2xhc3MlMjBwZWFjZWZ1bCUyMHN0dWRpb3xlbnwxfHx8fDE3NzMxNTM3Mjh8MA&ixlib=rb-4.1.0&q=80&w=1080');">
      <div class="hero-content">
        <h1 class="hero-title" style="color: white;">Find Your Balance, Strength, and Inner Peace</h1>
        <p class="hero-subtitle" style="color: white;">
          Join a welcoming community of yoga practitioners and discover the transformative power of mindful movement. Perfect for beginners and experienced yogis alike.
        </p>
        <div class="hero-buttons">
          <button onclick="openBookingModal()" class="btn-large btn-primary">Start Your Journey Today</button>
          <a href="#services" class="btn-large btn-white">Explore Our Services</a>
        </div>
      </div>
    </section>

    <!-- Welcome Section -->
    <section class="section section-white">
      <div class="container">
        <div class="grid grid-2" style="align-items: center;">
          <div>
            <img src="https://images.unsplash.com/photo-1534126506432-a0173ba75bf6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx3b21hbiUyMG1lZGl0YXRpb24lMjBtaW5kZnVsbmVzc3xlbnwxfHx8fDE3NzMyMjcwMjV8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Woman practicing meditation" class="img-rounded" style="height: 400px;">
          </div>
          <div>
            <h2>Welcome to ZenNest Yoga</h2>
            <p class="text-gray mb-4">
              ZenNest Yoga is dedicated to helping individuals build healthier lifestyles through yoga, mindfulness, and movement.
            </p>
            <p class="text-gray mb-6">
              Our instructors bring years of experience in yoga practice, helping beginners and advanced practitioners improve flexibility, strength, and mental clarity.
            </p>
            <a href="about.html" class="btn-large btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Transform Your Life Section -->
    <section class="section section-light">
      <div class="container">
        <div class="text-center mb-12">
          <h2>Transform Your Life Through Yoga</h2>
          <p class="text-gray" style="max-width: 42rem; margin: 0 auto;">
            Whether you're looking to reduce stress, increase flexibility, or find inner peace, yoga can help you achieve your wellness goals.
          </p>
        </div>

        <div class="grid grid-3">
          <div class="card text-center">
            <img src="https://images.unsplash.com/photo-1758599879693-9e06f55a4ded?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwYmVnaW5uZXIlMjBmcmllbmRseSUyMHByYWN0aWNlfGVufDF8fHx8MTc3MzIyNzU3M3ww&ixlib=rb-4.1.0&q=80&w=1080" alt="Beginner-friendly yoga" class="img-rounded mb-6" style="height: 12rem;">
            <h3>Start at Your Own Pace</h3>
            <p class="text-gray" style="font-size: 0.875rem;">
              No experience needed! Our beginner-friendly classes guide you step-by-step, ensuring you feel comfortable and confident from day one.
            </p>
          </div>

          <div class="card text-center">
            <img src="https://images.unsplash.com/photo-1758274535230-3641d0632878?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwY29tbXVuaXR5JTIwZ3JvdXAlMjBjbGFzc3xlbnwxfHx8fDE3NzMyMjc1NzR8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Yoga community" class="img-rounded mb-6" style="height: 12rem;">
            <h3>Join a Supportive Community</h3>
            <p class="text-gray" style="font-size: 0.875rem;">
              Connect with like-minded individuals on the same wellness journey. Our community provides encouragement, motivation, and lasting friendships.
            </p>
          </div>

          <div class="card text-center">
            <img src="https://images.unsplash.com/photo-1767611125032-20b291ec1c5e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwZmxleGliaWxpdHklMjBzdHJldGNoaW5nJTIwaGVhbHRofGVufDF8fHx8MTc3MzIyNzU3NXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Yoga flexibility" class="img-rounded mb-6" style="height: 12rem;">
            <h3>See Real Results</h3>
            <p class="text-gray" style="font-size: 0.875rem;">
              Experience improved flexibility, strength, and mental clarity. Most students notice positive changes within just a few weeks of practice.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Services Section -->
    <section class="section section-white" id="services">
      <div class="container">
        <div class="text-center mb-12">
          <h2>Our Services</h2>
          <p class="text-gray" style="max-width: 42rem; margin: 0 auto;">
            Explore our comprehensive range of yoga services designed to meet you wherever you are on your wellness journey.
          </p>
        </div>

        <div class="grid grid-3">
          <div class="card">
            <div class="icon-wrapper">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
            </div>
            <h3>Beginner Classes</h3>
            <p class="text-gray">
              Perfect for those new to yoga. Learn foundational poses, breathing techniques, and proper alignment in a supportive environment.
            </p>
            <button onclick="openBookingModal()" class="btn-large btn-secondary" style="margin-top: auto;">Book Now</button>
          </div>

          <div class="card">
            <div class="icon-wrapper">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <h3>Intermediate & Advanced</h3>
            <p class="text-gray">
              Challenge yourself with more complex poses, advanced breathing techniques, and deeper meditation practices.
            </p>
            <button onclick="openBookingModal()" class="btn-large btn-secondary" style="margin-top: auto;">Book Now</button>
          </div>

          <div class="card">
            <div class="icon-wrapper">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
              </svg>
            </div>
            <h3>Meditation & Mindfulness</h3>
            <p class="text-gray">
              Cultivate inner peace and mental clarity through guided meditation, breathwork, and mindfulness practices.
            </p>
            <button onclick="openBookingModal()" class="btn-large btn-secondary" style="margin-top: auto;">Book Now</button>
          </div>

          <div class="card">
            <div class="icon-wrapper">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
            </div>
            <h3>Private Sessions</h3>
            <p class="text-gray">
              Personalized one-on-one sessions tailored to your specific needs, goals, and experience level.
            </p>
            <button onclick="openBookingModal()" class="btn-large btn-secondary" style="margin-top: auto;">Book Now</button>
          </div>

          <div class="card">
            <div class="icon-wrapper">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3>Group Classes</h3>
            <p class="text-gray">
              Join our vibrant group classes and experience the energy of practicing yoga with a supportive community.
            </p>
            <button onclick="openBookingModal()" class="btn-large btn-secondary" style="margin-top: auto;">Book Now</button>
          </div>

          <div class="card">
            <div class="icon-wrapper">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <h3>Corporate Wellness</h3>
            <p class="text-gray">
              Bring yoga to your workplace. Reduce stress, boost productivity, and improve employee well-being.
            </p>
            <button onclick="openBookingModal()" class="btn-large btn-secondary" style="margin-top: auto;">Book Now</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Plans Section -->
    <section class="section section-light">
      <div class="container">
        <div class="text-center mb-12">
          <h2>Our Plans</h2>
          <p class="text-gray" style="max-width: 42rem; margin: 0 auto;">
            Choose the plan that fits your lifestyle and wellness goals. All plans include access to our welcoming community.
          </p>
        </div>

        <div class="grid grid-3">
          <div class="card card-border text-center">
            <h3 class="text-primary">Drop-In</h3>
            <div style="margin: 2rem 0;">
              <div style="font-size: 3rem; font-weight: 700; color: var(--sage-green);">$20</div>
              <p class="text-gray" style="font-size: 0.875rem;">per class</p>
            </div>
            <ul class="list-check" style="text-align: left; margin-bottom: 2rem;">
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Single class access</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>All equipment provided</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>No commitment required</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Perfect for beginners</span>
              </li>
            </ul>
            <button onclick="openBookingModal()" class="btn-large btn-secondary">Get Started</button>
          </div>

          <div class="card card-border text-center" style="border: 3px solid var(--sage-green); position: relative;">
            <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--sage-green); color: white; padding: 0.25rem 1.5rem; border-radius: 1rem; font-size: 0.875rem; font-weight: 600;">MOST POPULAR</div>
            <h3 class="text-primary">Monthly Unlimited</h3>
            <div style="margin: 2rem 0;">
              <div style="font-size: 3rem; font-weight: 700; color: var(--sage-green);">$120</div>
              <p class="text-gray" style="font-size: 0.875rem;">per month</p>
            </div>
            <ul class="list-check" style="text-align: left; margin-bottom: 2rem;">
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Unlimited classes</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>All class types included</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Priority booking</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Community events access</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>10% off workshops</span>
              </li>
            </ul>
            <button onclick="openBookingModal()" class="btn-large btn-primary">Get Started</button>
          </div>

          <div class="card card-border text-center">
            <h3 class="text-primary">Class Pack (10)</h3>
            <div style="margin: 2rem 0;">
              <div style="font-size: 3rem; font-weight: 700; color: var(--sage-green);">$150</div>
              <p class="text-gray" style="font-size: 0.875rem;">10 classes</p>
            </div>
            <ul class="list-check" style="text-align: left; margin-bottom: 2rem;">
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>10 class credits</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Valid for 3 months</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Save $50 vs drop-in</span>
              </li>
              <li>
                <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Flexible scheduling</span>
              </li>
            </ul>
            <button onclick="openBookingModal()" class="btn-large btn-secondary">Get Started</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Real People Real Transformation Section -->
    <section class="section section-white">
      <div class="container">
        <div class="text-center mb-12">
          <h2>Real People, Real Transformation</h2>
          <p class="text-gray" style="max-width: 42rem; margin: 0 auto;">
            Hear from our community members about their yoga journey and how it has transformed their lives.
          </p>
        </div>

        <div class="grid grid-3">
          <div class="card">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
              <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx3b21hbiUyMHBvcnRyYWl0JTIwc21pbGluZ3xlbnwxfHx8fDE3NzMyMjc1NzZ8MA&ixlib=rb-4.1.0&q=80&w=400" alt="Sarah testimonial" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
              <div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Sarah Johnson</h3>
                <p class="text-gray" style="font-size: 0.875rem; margin: 0;">Practicing for 6 months</p>
              </div>
            </div>
            <p class="text-gray">
              "I came to ZenNest with chronic back pain and zero flexibility. After just 3 months, my pain reduced by 80% and I can finally touch my toes! The instructors are incredibly supportive and make every class enjoyable."
            </p>
            <div style="color: #FFA500; margin-top: 1rem;">★★★★★</div>
          </div>

          <div class="card">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtYW4lMjBwb3J0cmFpdCUyMHNtaWxpbmd8ZW58MXx8fHwxNzczMjI3NTc2fDA&ixlib=rb-4.1.0&q=80&w=400" alt="Michael testimonial" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
              <div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Michael Chen</h3>
                <p class="text-gray" style="font-size: 0.875rem; margin: 0;">Practicing for 1 year</p>
              </div>
            </div>
            <p class="text-gray">
              "As a stressed corporate executive, yoga has been life-changing. I sleep better, handle stress more effectively, and feel more energized throughout the day. ZenNest's meditation classes are pure magic!"
            </p>
            <div style="color: #FFA500; margin-top: 1rem;">★★★★★</div>
          </div>

          <div class="card">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwyfHx3b21hbiUyMHBvcnRyYWl0JTIwc21pbGluZ3xlbnwxfHx8fDE3NzMyMjc1NzZ8MA&ixlib=rb-4.1.0&q=80&w=400" alt="Emily testimonial" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
              <div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Emily Rodriguez</h3>
                <p class="text-gray" style="font-size: 0.875rem; margin: 0;">Practicing for 2 years</p>
              </div>
            </div>
            <p class="text-gray">
              "I was nervous about starting yoga at 55, but the beginner classes made me feel so welcome. I've lost 20 pounds, gained strength I never thought possible, and found a wonderful community of friends."
            </p>
            <div style="color: #FFA500; margin-top: 1rem;">★★★★★</div>
          </div>

          <div class="card">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwyfHxtYW4lMjBwb3J0cmFpdCUyMHNtaWxpbmd8ZW58MXx8fHwxNzczMjI3NTc2fDA&ixlib=rb-4.1.0&q=80&w=400" alt="David testimonial" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
              <div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">David Martinez</h3>
                <p class="text-gray" style="font-size: 0.875rem; margin: 0;">Practicing for 8 months</p>
              </div>
            </div>
            <p class="text-gray">
              "After a sports injury, my physical therapist recommended yoga. Best advice ever! Not only did I recover faster, but I'm now stronger and more flexible than before the injury. The private sessions were incredibly helpful."
            </p>
            <div style="color: #FFA500; margin-top: 1rem;">★★★★★</div>
          </div>

          <div class="card">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
              <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwzfHx3b21hbiUyMHBvcnRyYWl0JTIwc21pbGluZ3xlbnwxfHx8fDE3NzMyMjc1NzZ8MA&ixlib=rb-4.1.0&q=80&w=400" alt="Jessica testimonial" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
              <div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Jessica Thompson</h3>
                <p class="text-gray" style="font-size: 0.875rem; margin: 0;">Practicing for 4 months</p>
              </div>
            </div>
            <p class="text-gray">
              "I struggled with anxiety for years. Yoga and meditation at ZenNest have given me tools to manage my mental health naturally. I feel calmer, more focused, and genuinely happier. This place changed my life!"
            </p>
            <div style="color: #FFA500; margin-top: 1rem;">★★★★★</div>
          </div>

          <div class="card">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
              <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwzfHxtYW4lMjBwb3J0cmFpdCUyMHNtaWxpbmd8ZW58MXx8fHwxNzczMjI3NTc2fDA&ixlib=rb-4.1.0&q=80&w=400" alt="Robert testimonial" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
              <div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Robert Williams</h3>
                <p class="text-gray" style="font-size: 0.875rem; margin: 0;">Practicing for 3 years</p>
              </div>
            </div>
            <p class="text-gray">
              "Started with beginner classes and now I'm in advanced sessions. The progression has been amazing. Yoga improved my athletic performance, prevented injuries, and taught me mindfulness that benefits every aspect of my life."
            </p>
            <div style="color: #FFA500; margin-top: 1rem;">★★★★★</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-light">
      <div class="container">
        <div class="text-center mb-12">
          <h2>Common Questions</h2>
          <p class="text-gray" style="max-width: 42rem; margin: 0 auto;">
            Have questions? We've got answers! Here are the most common questions we hear from new students.
          </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
          <div class="card mb-6">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">Do I need to be flexible to start yoga?</h3>
            <p class="text-gray">
              Absolutely not! Flexibility is a result of yoga practice, not a requirement. Our beginner classes are designed for people of all flexibility levels. You'll gradually improve your range of motion with consistent practice. Everyone starts somewhere, and our instructors will help you modify poses to match your current ability.
            </p>
          </div>

          <div class="card mb-6">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">What should I bring to my first class?</h3>
            <p class="text-gray">
              We provide all the equipment you need (mats, blocks, straps, blankets). Just bring yourself, an open mind, and wear comfortable clothing that allows you to move freely. We recommend bringing a water bottle and arriving 10-15 minutes early to get settled and meet your instructor.
            </p>
          </div>

          <div class="card mb-6">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">How often should I practice yoga?</h3>
            <p class="text-gray">
              For beginners, we recommend 2-3 times per week to build a foundation and see steady progress. However, even once a week provides benefits. As you advance, you can increase frequency. Listen to your body and find a rhythm that works for your schedule and energy levels.
            </p>
          </div>

          <div class="card mb-6">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">Will yoga help me lose weight?</h3>
            <p class="text-gray">
              Yes! While yoga isn't just about weight loss, regular practice can support your weight management goals. It builds lean muscle, increases metabolism, reduces stress-related eating, and promotes mindful choices. Combined with a healthy diet, many students see significant body composition changes.
            </p>
          </div>

          <div class="card mb-6">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">Can I practice yoga if I have an injury or health condition?</h3>
            <p class="text-gray">
              In most cases, yes! Yoga can be very therapeutic, but we always recommend consulting your doctor first. Let your instructor know about any injuries or conditions before class so they can offer modifications. We also offer private sessions for more personalized attention if needed.
            </p>
          </div>

          <div class="card mb-6">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">What's the difference between your class types?</h3>
            <p class="text-gray">
              Beginner classes focus on foundational poses and proper alignment. Intermediate/Advanced classes include more complex sequences and challenging poses. Meditation classes emphasize breathwork and mental stillness. Private sessions are customized to your goals. Group classes offer community energy with mixed levels.
            </p>
          </div>

          <div class="card mb-6">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">How long are the classes?</h3>
            <p class="text-gray">
              Most classes are 60 minutes, which gives enough time to warm up, practice, and cool down properly. We also offer 30-minute express sessions during lunch hours and 90-minute deep practice sessions on weekends. Check our schedule for specific class durations.
            </p>
          </div>

          <div class="card">
            <h3 style="color: var(--sage-green); font-size: 1.25rem;">Can I cancel or reschedule my class?</h3>
            <p class="text-gray">
              Yes! We understand life happens. You can cancel or reschedule up to 4 hours before class time without penalty through our booking system. For unlimited members, there's no limit on cancellations. Class pack credits are valid for 3 months from purchase date.
            </p>
          </div>
        </div>

        <div class="text-center" style="margin-top: 3rem;">
          <p class="text-gray mb-6">Still have questions? We're here to help!</p>
          <a href="contact.html" class="btn-large btn-primary">Contact Us</a>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="section section-white">
      <div class="container">
        <div class="grid grid-2" style="align-items: center;">
          <div>
            <h2>The Benefits You'll Experience</h2>
            <div style="margin-top: 1.5rem;">
              <div class="contact-item">
                <div class="contact-icon-wrapper">
                  <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Reduced Stress & Anxiety</h3>
                  <p class="text-gray" style="font-size: 0.875rem;">
                    Learn breathing techniques and mindfulness practices that calm your mind and reduce daily stress levels.
                  </p>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon-wrapper">
                  <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                  </svg>
                </div>
                <div>
                  <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Increased Flexibility & Strength</h3>
                  <p class="text-gray" style="font-size: 0.875rem;">
                    Build lean muscle, improve your range of motion, and develop core strength through gentle yet effective poses.
                  </p>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon-wrapper">
                  <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Better Focus & Mental Clarity</h3>
                  <p class="text-gray" style="font-size: 0.875rem;">
                    Enhance concentration, boost productivity, and gain mental clarity through mindful movement and meditation.
                  </p>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon-wrapper">
                  <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Improved Overall Well-being</h3>
                  <p class="text-gray" style="font-size: 0.875rem;">
                    Better sleep quality, increased energy levels, and a greater sense of peace and balance in daily life.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <img src="https://images.unsplash.com/photo-1602520628350-fbf9db1f02ae?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx5b2dhJTIwbW9ybmluZyUyMHJvdXRpbmUlMjB3ZWxsbmVzc3xlbnwxfHx8fDE3NzMxNTQ2NzF8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Morning yoga routine" class="img-rounded" style="height: 500px;">
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section section-light">
      <div class="container text-center">
        <h2>Ready to Begin Your Journey?</h2>
        <p class="text-gray mb-8">Start your yoga journey today and experience the transformative power of mindful movement.</p>
        <button onclick="openBookingModal()" class="btn-large btn-primary">Schedule Your First Yoga Session</button>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-grid">
        <div class="footer-section">
          <div class="logo mb-4">
            <span class="logo-text">ZenNest</span>
            <span class="logo-text-light">Yoga</span>
          </div>
          <p style="color: #d1d5db; font-size: 0.875rem;">
            Reconnect with your body and mind through mindful movement and yoga practice.
          </p>
          <div class="social-icons">
            <a href="https://facebook.com" class="social-link" aria-label="Facebook" target="_blank">
              <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="https://instagram.com" class="social-link" aria-label="Instagram" target="_blank">
              <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
            <a href="https://twitter.com" class="social-link" aria-label="Twitter" target="_blank">
              <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.html" class="footer-link">Home</a></li>
            <li><a href="about.html" class="footer-link">About</a></li>
            <li><a href="services.html" class="footer-link">Services</a></li>
            <li><a href="contact.html" class="footer-link">Contact</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Legal</h3>
          <ul>
            <li><a href="privacy-policy.html" class="footer-link">Privacy Policy</a></li>
            <li><a href="terms-conditions.html" class="footer-link">Terms & Conditions</a></li>
            <li><a href="disclaimer.html" class="footer-link">Disclaimer</a></li>
            <li><a href="cookie-policy.html" class="footer-link">Cookie Policy</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Contact Info</h3>
          <div class="contact-info">
            <svg style="width: 20px; height: 20px; color: #6B8E7A; flex-shrink: 0; margin-top: 2px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>123 Wellness Street<br>San Francisco, CA 94102</span>
          </div>
          <div class="contact-info">
            <svg style="width: 20px; height: 20px; color: #6B8E7A; flex-shrink: 0; margin-top: 2px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <a href="mailto:info@zennestyoga.com">info@zennestyoga.com</a>
          </div>
          <div class="contact-info">
            <svg style="width: 20px; height: 20px; color: #6B8E7A; flex-shrink: 0; margin-top: 2px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <a href="tel:+14155551234">(415) 555-1234</a>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <p>&copy; 2026 ZenNest Yoga. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Booking Modal -->
  <div id="bookingModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Book Your Class</h3>
        <button class="modal-close" onclick="closeBookingModal()" aria-label="Close modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="bookingForm" onsubmit="handleBooking(event)">
          <div class="form-group">
            <label for="bookingName" class="form-label">Full Name *</label>
            <input type="text" id="bookingName" class="form-input" required>
          </div>

          <div class="form-group">
            <label for="bookingEmail" class="form-label">Email Address *</label>
            <input type="email" id="bookingEmail" class="form-input" required>
          </div>

          <div class="form-group">
            <label for="bookingPhone" class="form-label">Phone Number *</label>
            <input type="tel" id="bookingPhone" class="form-input" required>
          </div>

          <div class="form-group">
            <label for="bookingClass" class="form-label">Class Type *</label>
            <select id="bookingClass" class="form-select" required>
              <option value="">Select a class type</option>
              <option value="beginner">Beginner Yoga</option>
              <option value="intermediate">Intermediate Yoga</option>
              <option value="advanced">Advanced Yoga</option>
              <option value="meditation">Meditation & Mindfulness</option>
              <option value="private">Private Session</option>
              <option value="group">Group Class</option>
            </select>
          </div>

          <div class="form-group">
            <label for="bookingDate" class="form-label">Preferred Date *</label>
            <input type="date" id="bookingDate" class="form-input" required>
          </div>

          <div class="form-group">
            <label for="bookingTime" class="form-label">Preferred Time *</label>
            <select id="bookingTime" class="form-select" required>
              <option value="">Select a time</option>
              <option value="6:00 AM">6:00 AM</option>
              <option value="7:30 AM">7:30 AM</option>
              <option value="9:00 AM">9:00 AM</option>
              <option value="10:30 AM">10:30 AM</option>
              <option value="12:00 PM">12:00 PM</option>
              <option value="5:30 PM">5:30 PM</option>
              <option value="7:00 PM">7:00 PM</option>
            </select>
          </div>

          <div class="form-group">
            <label for="bookingMessage" class="form-label">Additional Notes (Optional)</label>
            <textarea id="bookingMessage" class="form-textarea" rows="3" placeholder="Any specific requests or health considerations?"></textarea>
          </div>

          <button type="submit" class="btn-large btn-primary" style="width: 100%;">Confirm Booking</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Cookie Consent Banner -->
  <div id="cookieConsent" class="cookie-consent">
    <div class="cookie-content">
      <div class="cookie-text">
        <p>
          We use cookies to enhance your browsing experience and analyze our traffic. By clicking "Accept All", you consent to our use of cookies. 
          <a href="cookie-policy.html" class="cookie-link">Learn more</a>
        </p>
      </div>
      <div class="cookie-buttons">
        <button onclick="acceptCookies()" class="cookie-btn cookie-accept">Accept All</button>
        <button onclick="manageCookies()" class="cookie-btn cookie-manage">Manage Preferences</button>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
