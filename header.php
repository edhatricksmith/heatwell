<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29242513-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<header>
  <div id="header_container">
    <div id="logo">
      <img class="heatwell_logo" src="/images/heatwell_logo.png" width="100%" height="100%" alt="Heatwell Ltd.">
      <div id="heatwell_title">
        <div class="title">HEATWELL LTD.</div>
        <div class="tagline">UNDER FLOOR HEATING SPECIALISTS</div>
      </div>
    </div>
    <div id="header_contact" >(09) 849 3919<br><span class="header_alt">10 Year Guarantee on Products & Services*</span></div>
    <div class="clear-both"></div>
    <nav id="nav" role="navigation">
      <a href="#nav" title="Show navigation">Show navigation</a>
      <a href="#" title="Hide navigation">Hide navigation</a>
      <ul>
        <li <?php if ($thisPage=="home") 
		echo " id=\"nav-current\""; ?> >
          <a href="http://www.heatwell.co.nz/">Home</a></li>
        <li <?php if ($thisPage=="heating-options") echo " id=\"nav-current\""; ?> >
          <a href="/heating-options/floor-heating-options.php">Floor Heating Options <img class="drop-arrow" src="/images/drop-arrow.png" width="6" height="6"></a>
          <ul>
            <li><a href="/heating-options/under-tile-heating.php">Under Tile Heating</a></li>
            <li><a href="/heating-options/under-carpet-heating.php">Under Carpet Heating</a></li>
            <li><a href="/heating-options/in-concrete-heating.php">In-concrete Heating</a></li>
          </ul>
        </li>
        <li <?php if ($thisPage=="thermostat-options") echo " id=\"nav-current\""; ?> >
          <a href="/thermostats/thermostat-options.php">Thermostat Options</a></li>
        <li <?php if ($thisPage=="install-prep") echo " id=\"nav-current\""; ?> >
          <a href="/services/services.php">Services</a></li>
        <li <?php if ($thisPage=="diy-info") echo " id=\"nav-current\""; ?> >
          <a href="/diy/do-it-yourself.php">Installation & DIY Info <img class="drop-arrow" src="/images/drop-arrow.png" width="6" height="6"></a>
            <ul>
            <li><a href="/diy/under-tile-preparations.php">Under Tile prep.</a></li>
            <li><a href="/diy/under-carpet-preparations.php">Under Carpet prep.</a></li>
            <li><a href="/diy/in-concrete-preparations.php">In-Concrete prep.</a></li>
          </ul>
        </li>
        <li <?php if ($thisPage=="videos") echo " id=\"nav-current\""; ?> >
          <a href="/videos/videos.php">Videos</a></li>
        <li <?php if ($thisPage=="contact-us") echo " id=\"nav-current\""; ?> >
          <a href="/contacts.php">Contact Us <img class="drop-arrow" src="/images/drop-arrow.png" width="6" height="6"></a>
          <ul>
            <li><a href="/testimonials.php">Testimonials</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>