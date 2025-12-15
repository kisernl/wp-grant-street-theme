<?php 
/**
 * Template Name: Links Page (Linktree Style)
 * Description: A linktree-style page for social links and resources
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grant Street Baptist Church - Links</title>
  
  <style>
    /* Reset & Base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
      background: linear-gradient(135deg, #2a3f3f 0%, #467750 100%);
      min-height: 100vh;
      color: white;
      line-height: 1.6;
    }
    
    /* Container */
    .linktree-container {
      max-width: 680px;
      margin: 0 auto;
      padding: 3rem 1.5rem;
    }
    
    /* Profile Section */
    .profile-header {
      text-align: center;
      margin-bottom: 3rem;
    }
    
    .profile-logo {
      width: 96px;
      height: 96px;
      margin: 0 auto 1.5rem;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.2);
      padding: 1rem;
      display: block;
    }
    
    .profile-title {
      font-size: 2rem;
      font-weight: 700;
      color: white;
      margin-bottom: 0.5rem;
      font-family: 'Crimson Text', serif;
    }
    
    .profile-handle {
      font-size: 1.125rem;
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 2rem;
    }
    
    /* Social Icons */
    .social-icons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2.5rem;
    }
    
    .social-icon {
      width: 48px;
      height: 48px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 50%;
      border: 1px solid rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.2s ease;
      text-decoration: none;
    }
    
    .social-icon:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }
    
    .social-icon svg {
      width: 20px;
      height: 20px;
      fill: white;
    }
    
    /* Links Container */
    .links-container {
      margin-bottom: 3rem;
    }
    
    /* Footer */
    .linktree-footer {
      text-align: center;
      padding-top: 2rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .linktree-footer p {
      color: rgba(255, 255, 255, 0.6);
      font-size: 0.875rem;
      margin-bottom: 0.5rem;
    }
    
    .linktree-footer a {
      color: rgba(255, 255, 255, 0.8);
      text-decoration: none;
      transition: color 0.2s ease;
    }
    
    .linktree-footer a:hover {
      color: white;
    }
    
    /* Mobile Responsive */
    @media (max-width: 640px) {
      .linktree-container {
        padding: 2rem 1rem;
      }
      
      .profile-title {
        font-size: 1.75rem;
      }
      
      .profile-handle {
        font-size: 1rem;
      }
    }
  </style>
  
  <?php wp_head(); ?>
</head>
<body <?php body_class('page-template-page-links'); ?>>

<div class="linktree-container">
  
  <!-- Profile Header -->
  <div class="profile-header">
    <!-- Logo/Avatar -->
    <a href="/" class="">
    <img 
      src="<?php echo get_template_directory_uri(); ?>/assets/images/gsbc-logo-w.png" 
      alt="Grant Street Baptist Church" 
      class="profile-logo"
    />
    </a>    
    <!-- Church Name & Handle -->
    <h1 class="profile-title mb-4">Grant Street Baptist Church</h1>
    <!-- <p class="profile-handle">@grantstreetbc</p> -->
    
    <!-- Social Icons (managed in Linktree Clone plugin) -->
    <?php echo do_shortcode('[simple_linktree_social]'); ?>
  </div>
  
  <!-- Links Container -->
  <div class="links-container">
    <?php echo do_shortcode('[simple_linktree]'); ?>
  </div>
  
  <!-- Footer -->
  <div class="linktree-footer">
    <p>724 Grant St, Bessemer, AL 35020</p>
    <p><a href="tel:2054262323">(205) 426-2323</a></p>
    <p style="margin-top: 1rem;">
      <a href="/">Visit Our Full Website →</a>
    </p>
  </div>
  
</div>

<?php wp_footer(); ?>
</body>
</html>
