const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./assets/js/**/*.js",
    "./wp-content/plugins/event-cards-simple/**/*.{html,js,php}",
  ],
  safelist: [
    // Original plugin classes
    'ecc-card-container',
    'event-card-item',
    'ecc-image-wrapper',
    'ecc-card-image',
    'ecc-content-area',
    'ecc-title',
    'ecc-subtitle',
    'ecc-description',
    'ecc-date-time',
    'ecc-date-icon',
    'ecc-button',
    'ecc-contact-info',
    'ecc-contact-name',
    'ecc-contact-detail',
    'ecc-read-more',
    // Branded event card classes
    'event-card-branded',
    'event-card-image-branded',
    'event-card-content',
    'event-title-branded',
    'event-subtitle-branded',
    'event-description-branded',
    'event-button-branded',
    'event-date-branded',
  ],
  theme: {
    fontFamily: {
      title: ['Lora', ...defaultTheme.fontFamily.sans],
      body: ['Figtree', ...defaultTheme.fontFamily.sans],
      'event-heading': ['Lora', ...defaultTheme.fontFamily.sans],
      'event-body': ['Figtree', ...defaultTheme.fontFamily.sans],
    },
    extend: {
      colors: {
        // Custom Grant Street Church colors
        'gs-dark-green': '#2a3f3f',
        'gs-green': '#467750',
        'gs-light-green': '#89c07e',
        'gs-off-white': '#e0e8e2',
        'gs-cream': '#fffde8',
        'gs-yellow': '#f0cd6e',
        primary: {
          DEFAULT: '#2a3f3f',
          foreground: '#89c07e',
        },
        button: {
          DEFAULT: '#89c07e',
          foreground: '#FFFFFF',
        },
        background: '#FFFFFF',
        foreground: '#e0e8e2',
        secondary: {
          DEFAULT: '#f0cd6e',
          foreground: '#FFFFFF',
        },
        muted: {
          DEFAULT: '#467750',
          foreground: '#FFFFFF',
        },
      // apply theme colors to event card creator
        'event-primary': '#2a3f3f',
        'event-accent': '#89c07e',
        'event-surface': '#e0e8e2',
      },
      backgroundColor: {
      },
      textColor: {
        secondary: '#9bcbe1',
        title: '#0E3461',
        body: '#201d28',
      },
      animation: {
        'event-float': 'float 3s ease-in-out infinite',
      },
    },
  },
  plugins: [],
};
