# Sermon Archive Customization Guide

## Files Created/Modified

### Main Template
- `archive-sermon.php` - Main sermon archive template
- `style.css` - Added custom sermon archive styling
- `functions.php` - Enhanced sermon archive functionality

## Features Implemented

### 🎨 **Visual Design**
- Parallax background matching your theme
- Card-based layout with hover effects
- Responsive grid (1/2/3 columns based on screen size)
- Semi-transparent cards with backdrop blur
- Smooth animations and transitions

### 🔍 **Search & Filter**
- Real-time search by title, speaker, or scripture
- Filter by speaker dropdown
- Filter by sermon series dropdown
- Clear filters button
- "No results" message with reset option

### 📱 **Responsive Design**
- Mobile-optimized layout
- Touch-friendly filter controls
- Stacked layout on smaller screens

### 🔗 **Media Integration**
- Direct links to audio files (green buttons)
- Direct links to video files (red buttons) 
- Direct links to text/PDF files (blue buttons)
- "Read More" links to full sermon pages

### ⚡ **Performance Features**
- Debounced search (300ms delay)
- Smooth animations with jQuery
- Efficient filtering with data attributes
- Pagination support

## Customization Options

### 📊 **Change Number of Sermons Per Page**
Edit in `functions.php`:
```php
$query->set('posts_per_page', 12); // Change to your preferred number
```

### 🎨 **Customize Colors**
Edit in `style.css` - look for these CSS custom properties:
- Primary color: `#075674`
- Secondary color: `#0996ce`
- Audio button: `#22c55e` (green)
- Video button: `#ef4444` (red)
- Text button: `#3b82f6` (blue)

### 📐 **Change Grid Layout**
Edit the grid classes in `archive-sermon.php`:
```html
<!-- Current: 1/2/3 columns -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

<!-- For 1/2/4 columns: -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

<!-- For list layout: -->
<div class="space-y-6">
```

## File Locations

```
wp-content/themes/village-church-theme/
├── archive-sermon.php          (Main template)
├── style.css                   (Styling - see bottom)
├── functions.php               (Functionality - see bottom)
└── SERMON-ARCHIVE-README.md    (This file)
```

## Browser Support
- Modern browsers (Chrome 90+, Firefox 88+, Safari 14+)
- Mobile browsers
- Internet Explorer not supported (uses modern CSS features)
