<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quantumL5D Success</title>
    <script>document.documentElement.className += localStorage.getItem('theme') === 'light' ? ' light' : '';</script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="img/browserTabImg.svg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2TEBVJ3RTF');
</script>
<body class="background-gradient relative">
<div class="fixed bottom-1 right-1 z-40" x-data="{ theme: false }">
        <button id="theme-toggle" @click="theme = !theme" class="toggle-padding">
            <span :style="'transform: translateX(' + (theme ? '17.2px' : '0px') + ');'"
              class="toggle-circle"></span>
        </button>
    </div>
    <div class="flex flex-col justify-between min-h-screen">

    <div id="mobile-nav" class="block sm:hidden" x-data="{ open: false }">
        <div class="w-screen h-screen fixed top-0 left-0 z-30 bg-dark-gray opacity-60"
        x-bind:style="{ transform: open ? 'translateY(0)' : 'translateY(-100%)' }"
        style="transition: transform 0.5s;"></div>
        <header 
            class="mx-auto w-3/4 pb-10 h-3/5 fixed top-0 bg-dark-gray z-30 mobile-position mobile-radius flex gap-10 flex-col"
            x-bind:style="{ top: open ? '0%' : '-100%' }"
            style="transition: top 0.5s;">
            <div class="text-5xl middle-light-color handjet-500 text-center mt-10" ><a href="index.html">quantum{L5D}</a></div>
            <nav >
                <ul class="flex space-x-4 text-2xl handjet-500 flex-col flex gap-10 items-center">
                    <li class="!mx-0"><a href="index.html" class="mx-0 middle-light-color curser-pointer hover:opacity-80 light-button-border p-3">Home</a></li>
                    <!-- <li class="!mx-0"><a href="#" class="mx-0 middle-light-color curser-pointer hover:opacity-80 light-button-border p-3">Learn</a></li> -->
                    <li class="!mx-0"><a href="contribute.html" class="mx-0 middle-light-color curser-pointer hover:opacity-80 light-button-border p-3">Make a Contribution</a></li>
                </ul>
            </nav>
        </header>
        <div class="fixed z-30 right-3 top-3">
            <div class="icon z-30 nav-icon-1" @click="open = !open; console.log('open now is:', open)">
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
                <span x-bind:class="{ 'open': open }"></span>
              </div>
        </div>
    </div>
    <div id="desktop-nav" class="sticky top-0 z-30 hidden sm:block">
        <header class="flex justify-between items-center max-w-screen-2xl mx-auto p-7">
            <div class="text-3xl font-bold dark-gray handjet-700 hover:opacity-80"><a href="index.html">quantum{L5D}</a></div>
            <nav>
                <ul class="flex space-x-4 2xl:text-2xl lg:text-xl sm:text-lg text-base handjet-700">
                    <li><a href="index.html" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Home</a></li>
                    <!-- <li><a href="#" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Learn</a></li> -->
                    <li><a href="contribute.html" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Make a Contribution</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="relative flex flex-col justify-center items-center">
     
   
      <div>
        <h1 class="2xl:text-9xl lg:text-8xl sm:text-7xl leading-tight text-6xl font-semibold text-dark text-centerd mb-4 text-center dark-gray playfair-display-500">Thank you!</h1>
        <p class="2xl:2xl:text-xl px-3 sm:text-lg text-base sm:text-lg w-2/3 mx-auto leading-relaxed dark-gray  text-center mb-6 lora-400 ">Your message has been sent successfully. I will get back to you soon.</p>
        </div>
        <a href="index.html" class="button-border handjet-700 2xl:text-3xl lg:text-2xl sm:text-xl text-base hover: p-3 dark-gray">Go Back to Home</a>
      
      
        </div>
   
        <div id="footer" class="relative">
    <div class="flex justify-between h-full gap-2 flex-col max-w-screen-2xl mx-auto p-7">
        
        <div class="text-3xl font-bold dark-gray handjet-700">quantum{L5D}</div>
            <p class="lora-400 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg dark-gray text-base ">I am a developer. This website was created from scratch by me. I hope you enjoyed the experience it offered. <span class="lora-700">-Lyndsey</span></p>
            <div x-data class="w-full mt-4 flex-wrap flex gap-6 sm:gap-12 items-center justify-end mb-4">
               <a href="https://www.facebook.com/groups/980791636977750"  target="blank"> <img src="img/facebook.svg" class="w-6 md:w-8 md:h-8" alt="Facebook" /></a>
              <a href="mailto:QuantumLyndsey5D.com">  <img src="img/gmail.png" class="w-6 md:w-8 md:h-8" alt="Gmail"/></a>
              <a href="https://www.tiktok.com/@nocturnalrainbows823"  target="blank">  <img src="img/tiktok.png"  class="w-6 md:w-8 md:h-8" alt="TikTok"/></a>
              </div>
              
    </div>
    </div>
</div>
<script>
    const icons = document.querySelectorAll('.icon');
icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
    icon.classList.toggle("open");
  });
});

</script>
<script src="colorThemeToggle.js"></script>
</body>
</html>
