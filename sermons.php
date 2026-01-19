<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sermons - Euclid Church of Christ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script>
    window.nucleusLauncherSettings = {
      launcherId: '44c0ab401da5476a1636',
    };
    (function (l, a, u, n, c, h) {
      u = a.createElement('script');
      u.type = 'text/javascript';
      u.async = true;
      u.src = 'https://launcher.nucleus.church/boot.latest.js';
      n = a.getElementsByTagName('script')[0];
      n.parentNode.insertBefore(u, n);
    })(window, document);
  </script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      color: #333;
      font-size: 16px;
      background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.6)), url(images/ecoc-banner2.png);
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      min-height: 100vh;
    }

    h1 {
      font-size: clamp(1.5rem, 3.5vw, 2.25rem);
      font-weight: 700;
      line-height: 1.1;
      margin-bottom: 1rem;
      color: #f1f1f1;
    }

    h2 {
      font-size: clamp(1.5rem, 3vw, 2rem);
      font-weight: 600;
      margin-bottom: 0.875rem;
      color: #f1f1f1;
    }

    h3 {
      font-size: clamp(1.25rem, 2.5vw, 1.5rem);
      font-weight: 600;
      margin-bottom: 0.75rem;
      color: #f1f1f1;
    }

    p {
      font-size: clamp(1rem, 1.5vw, 1.125rem);
      margin-bottom: 1rem;
      line-height: 1.7;
      color: #f1f1f1;
    }

    a {
      color: #aa2f21;
      text-decoration: none;
      transition: color 0.3s;
    }

    a:hover {
      color: #8a2519;
    }

    .nav {
      background: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 1rem;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .nav a {
      font-weight: 500;
      font-size: clamp(0.875rem, 1.5vw, 1rem);
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #aa2f21;
    }

    .contact-buttons {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      padding: 1.5rem 1rem;
      background: #f9fafb;
      border-bottom: 2px solid #e5e7eb;
    }

    .contact-btn {
      display: inline-block;
      padding: 0.875rem 1.5rem;
      border-radius: 8px;
      font-weight: 600;
      font-size: clamp(0.875rem, 1.5vw, 1rem);
      transition: all 0.3s;
      text-decoration: none;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .phone-btn {
      background: #aa2f21;
      color: white;
    }

    .phone-btn:hover {
      background: #8a2519;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    .email-btn {
      background: #059669;
      color: white;
    }

    .email-btn:hover {
      background: #047857;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    .facebook-btn {
      background: #1877f2;
      color: white;
    }

    .facebook-btn:hover {
      background: #0c63d4;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    .page-header {
      text-align: center;
      padding: 3rem 1.5rem 2rem;
      background: rgba(0, 0, 0, 0.7);
    }

    .page-header h1 {
      color: #f1f1f1;
      margin-bottom: 0.5rem;
    }

    .page-header p {
      color: #f1f1f1;
      max-width: 700px;
      margin: 0 auto;
    }

    section {
      padding: 3rem 1.5rem;
    }

    .sermon-section {
      background: rgba(0, 0, 0, 0.7);
      text-align: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .video-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin: 2rem auto;
      max-width: 1200px;
    }

    .video-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }

    .video-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    }

    .video-wrapper {
      position: relative;
      width: 100%;
      padding-top: 56.25%;
      overflow: hidden;
      background: #000;
    }

    .video-wrapper iframe {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      border: none;
    }

    .video-info {
      padding: 1.5rem;
      text-align: left;
    }

    .video-info h3 {
      color: #aa2f21;
      font-size: clamp(1.125rem, 2vw, 1.25rem);
      margin-bottom: 0.5rem;
    }

    .video-info p {
      color: #333;
      font-size: clamp(0.875rem, 1.5vw, 1rem);
      margin-bottom: 1rem;
    }

    .watch-btn {
      display: inline-block;
      background: #aa2f21;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      font-weight: 600;
      font-size: clamp(0.875rem, 1.5vw, 1rem);
      transition: all 0.3s;
    }

    .watch-btn:hover {
      background: #8a2519;
      color: white;
      transform: translateY(-2px);
    }

    .channel-link {
      display: inline-block;
      background: #aa2f21;
      color: white;
      padding: 1rem 2rem;
      border-radius: 8px;
      font-weight: 600;
      margin-top: 2rem;
      font-size: clamp(1rem, 1.5vw, 1.125rem);
      transition: all 0.3s;
    }

    .channel-link:hover {
      background: #8a2519;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    footer {
      background: #0f172a;
      color: white;
      text-align: center;
      padding: 3rem 1.5rem;
    }

    footer p {
      margin: 0.75rem 0;
      font-size: clamp(0.875rem, 1.5vw, 1rem);
      color: white;
    }

    @media (max-width: 768px) {
      section {
        padding: 2rem 1rem;
      }

      .nav ul {
        gap: 1rem;
      }

      .video-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }
    }
  </style>
</head>

<body>
  <nav class="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="sermons.php">Sermons</a></li>
      <li><a href="about.php">About Church of Christ</a></li>
    </ul>
  </nav>

  <div class="contact-buttons">
    <a href="tel:+12162616505" class="contact-btn phone-btn">📞 Call: 216-261-6505</a>
    <a href="mailto:euclidcoc@gmail.com" class="contact-btn email-btn">✉️ Email Us</a>
    <a href="https://www.facebook.com/share/19QwjXDApQ/?mibextid=wwXIfr" target="_blank" class="contact-btn facebook-btn">👍 Visit Our Facebook</a>
  </div>

  <div class="page-header">
    <h1>Sermons & Messages</h1>
    <p>Watch our recent sermons and Bible study messages. Join us every Sunday at 11am for live worship service.</p>
  </div>

  <section class="sermon-section">
    <h2>Recent Sermons & Live Streams</h2>
    <p>Browse through our recent messages from God's Word.</p>

   <div class="video-grid">

  <!-- MAIN RECENT STREAMS PLAYLIST -->
  <div class="video-card">
    <div class="video-wrapper" style="background: linear-gradient(135deg, #aa2f21 0%, #8a2519 100%); display: flex; align-items: center; justify-content: center;">
      <p style="color: white; font-weight: 600; padding: 2rem; text-align: center;">Video Placeholder</p>
    </div>
    <div class="video-info">
      <h3>Recent Live Streams & Sermons</h3>
      <p>Watch our most recent services and messages. Join us for inspiring teachings about God's Word and spiritual growth through our community.</p>
    </div>
  </div>

  <!-- FILLER PLACEHOLDER 1 -->
  <div class="video-card">
    <div class="video-wrapper" style="background: linear-gradient(135deg, #059669 0%, #047857 100%); display: flex; align-items: center; justify-content: center;">
      <p style="color: white; font-weight: 600; padding: 2rem; text-align: center;">Video Placeholder</p>
    </div>
    <div class="video-info">
      <h3>Featured Sermon</h3>
      <p>A highlighted message from our ministry. Discover powerful teachings focused on practical application of biblical principles to strengthen your faith and relationship with God.</p>
    </div>
  </div>

  <!-- FILLER PLACEHOLDER 2 -->
  <div class="video-card">
    <div class="video-wrapper" style="background: linear-gradient(135deg, #1877f2 0%, #0c63d4 100%); display: flex; align-items: center; justify-content: center;">
      <p style="color: white; font-weight: 600; padding: 2rem; text-align: center;">Video Placeholder</p>
    </div>
    <div class="video-info">
      <h3>Bible Study Archive</h3>
      <p>Teachings and midweek studies designed to deepen your understanding of Scripture. Explore in-depth discussions on topics that strengthen your spiritual journey and biblical literacy.</p>
    </div>
  </div>

</div>

  </section>

  <footer>
    <p>If you have any questions or would like info on placing membership with us, please don't hesitate to reach out!</p>
    <p>Come visit us in person!</p>
    <p><strong>635 EAST 250th St, Euclid, OH, 44132</strong></p>
    <p>Email: euclidcoc@gmail.com | Office: 216-261-6501</p>
    <p>Bookmark www.euclidcoc.org</p>
    <p style="margin-top: 2rem;">Website Developed by Acefluento.</p>
  </footer>
</body>

</html>