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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2TEBVJ3RTF"></script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2TEBVJ3RTF');
</script>
</head>
<body class="relative"> 
<div class="relative min-h-screen">
<div class="fixed bottom-1 right-1 z-40" x-data="{ theme: false }">
        <button id="theme-toggle" @click="theme = !theme" class="toggle-padding">
            <span :style="'transform: translateX(' + (theme ? '17.2px' : '0px') + ');'"
              class="toggle-circle"></span>
        </button>
    </div>
    <div class="flex flex-col min-h-screen justify-between">
    <div id="desktop-nav" class="sticky top-0 z-30 hidden sm:block">
        <header class="flex justify-between items-center max-w-screen-2xl mx-auto p-7">
            <div class="logo-text outlined-text-dark text-3xl font-bold handjet-700 hover:opacity-80"><a href="index.html">quantum{L5D}</a></div>
            <nav>
                <ul class="flex space-x-4 2xl:text-2xl lg:text-xl sm:text-lg text-base handjet-700">
                    <li><a href="index.html" class="dark-gray curser-pointer hover:opacity-80 button-border p-3 bg-theme-color">Home</a></li>
                    <!-- <li><a href="#" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Learn</a></li> -->
                    <li><a href="contribute.html" class="dark-gray curser-pointer hover:opacity-80 button-border p-3 bg-theme-color">Make a Contribution</a></li>
                    <li><a href="lyndsey.php" class="dark-gray curser-pointer hover:opacity-80 button-border p-3 bg-theme-color">Lyndsey Smith</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div id="mobile-nav" class="block sm:hidden" x-data="{ open: false }">
        <div class="w-screen h-screen fixed top-0 left-0 z-30 bg-dark-gray opacity-60"
        :class="{ 'hidden': !open }"
        x-bind:style="{ transform: open ? 'translateY(0)' : 'translateY(-100%)' }"
        style="transition: transform 0.5s; transform: translateY(-100%);"></div>
        <header 
            class="mx-auto w-3/4 pb-10 h-3/5 fixed top-0 bg-dark-gray z-30 mobile-position mobile-radius flex gap-10 flex-col"
            :class="{ 'hidden': !open }"
        x-bind:style="{ transform: open ? 'translateY(0)' : 'translateY(-100%)' }"
        style="transition: transform 0.5s; transform: translateY(-100%);">
            <div class="text-5xl handjet-500 text-center font-bold mt-10 dark-gray" ><a href="index.html">quantum{L5D}</a></div>
            <nav >
                <ul class="flex space-x-4 text-2xl handjet-500 flex-col flex gap-10 items-center">
                    <li class="!mx-0"><a href="index.html" class="dark-gray mx-0 font-bold curser-pointer hover:opacity-80 light-button-border p-3">Home</a></li>
                    <!-- <li class="!mx-0"><a href="#" class="mx-0 curser-pointer hover:opacity-80 light-button-border p-3">Learn</a></li> -->
                    <li class="!mx-0"><a href="contribute.html" class="dark-gray mx-0 curser-pointer font-bold hover:opacity-80 light-button-border p-3">Make a Contribution</a></li>
                    <li class="!mx-0"><a href="lyndsey.php" class="dark-gray mx-0 curser-pointer font-bold hover:opacity-80 light-button-border p-3">Lyndsey Smith</a></li>
                </ul>
            </nav>
        </header>
        <div class="fixed top-3 left-3 text-3xl font-bold handjet-500 dark-gray font-bold" ><a href="index.html">quantum{L5D}</a></div>
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
   
    <div class="relative flex flex-col mt-10 md:mt-40 justify-center items-center">
     
   
      <div>
        <h1 class="2xl:text-9xl lg:text-8xl sm:text-7xl leading-tight text-6xl font-semibold text-dark text-centerd mb-4 text-center dark-gray playfair-display-500 contrast-variable outlined-text">Thank you!</h1>
        <p class="2xl:2xl:text-xl px-3 sm:text-lg text-base sm:text-lg w-2/3 mx-auto leading-relaxed dark-gray  text-center mb-6 lora-400 contrast-variable outlined-text font-bold">Your message has been sent successfully. I will get back to you soon.</p>
        </div>
        <a href="index.html" class="button-border handjet-700 2xl:text-3xl lg:text-2xl sm:text-xl text-base hover: p-3 dark-gray contrast-variable outlined-text bg-theme-color">Go Back to Home</a>
      
      
        </div>
   
        <div id="footer" class="relative">
    <div class="flex justify-between h-full gap-2 flex-col max-w-screen-2xl mx-auto p-7">
        
        <div class="text-3xl !font-bold dark-gray handjet-700">quantum{L5D}</div>
            <p class="lora-400 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg dark-gray text-base">I am a developer. This website was created from scratch by me. I hope you enjoyed the experience it offered. <span class="lora-700">-Lyndsey</span></p>
            <div x-data class="w-full mt-4 flex-wrap flex gap-6 sm:gap-12 items-center justify-end mb-4">
               <a id="fb" href="https://www.facebook.com/groups/980791636977750"  target="blank"><svg  class="w-6 md:w-8 md:h-8" viewBox="0 0 384 384" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M168.881 1.40614C145.243 4.33414 128.059 9.55915 106.381 20.4111C68.0319 39.6091 39.7919 67.8171 20.3069 106.386C-9.9171 166.21 -6.2081 237.416 30.1309 294.991C58.7759 340.378 104.329 370.701 159.39 381.037C175.096 383.985 207.04 384.256 221.881 381.567C272.962 372.312 314.327 347.616 344.082 308.609C411.446 220.298 390.558 94.0381 298.381 32.3681C260.4 6.95714 213.875 -4.16586 168.881 1.40614ZM203.881 88.0011C210.191 90.7791 217.223 98.0651 220.557 105.279C223.295 111.202 223.381 111.894 223.381 127.889C223.381 143.666 223.264 144.638 220.721 150.064C208.664 175.784 177.332 177.251 164.772 152.684C161.215 145.726 159.905 139.053 159.905 127.889C159.905 116.758 161.215 110.051 164.735 103.167C172.672 87.6421 188.837 81.3801 203.881 88.0011ZM116.263 130.948C123.758 136.084 127.681 146.774 126.457 158.724C125.439 168.663 121.44 175.541 114.671 178.995C106.373 183.231 96.2489 180.33 90.4229 172.048C87.5519 167.967 87.3619 167.106 87.0389 156.691C86.7789 148.275 87.0829 144.649 88.3199 141.409C90.2769 136.284 96.1159 130.2 100.317 128.907C105.223 127.397 112.426 128.32 116.263 130.948ZM282.982 129.023C287.492 130.528 292.69 135.451 294.981 140.389C297.335 145.463 297.644 162.82 295.472 168.017C290.782 179.239 278.982 184.042 268.828 178.862C252.885 170.728 252.859 138.569 268.788 130.204C273.651 127.65 277.825 127.303 282.982 129.023ZM228.125 193.824C246.811 198.603 261.59 210.471 269.922 227.389C275.475 238.666 276.885 245.162 276.859 259.349C276.835 272.709 275.554 277.119 270.257 282.086C263.884 288.062 266.225 287.889 191.881 287.889C117.534 287.889 119.833 288.059 113.539 282.086C107.897 276.731 106.881 273.232 106.881 259.159C106.881 244.655 108.845 235.489 114.04 225.741C122.262 210.315 138.668 197.554 155.519 193.474C159.855 192.425 169.085 192.034 190.971 191.972C217.129 191.899 221.438 192.113 228.125 193.824ZM106.881 203.296C106.881 203.52 104.851 206.782 102.37 210.546C92.6679 225.263 88.4249 242.177 89.0519 263.639L89.4379 276.889H77.5609C63.6169 276.889 60.0979 275.689 56.0419 269.549C53.5669 265.802 53.3859 264.783 53.4549 254.955C53.5429 242.351 55.9059 234.074 62.0399 224.889C68.6499 214.99 80.5019 206.579 91.4659 204.008C95.4339 203.078 106.881 202.549 106.881 203.296ZM291.881 203.974C303.317 206.608 314.968 214.774 321.722 224.889C327.856 234.074 330.219 242.351 330.307 254.955C330.376 264.783 330.195 265.802 327.72 269.549C323.664 275.689 320.145 276.889 306.201 276.889H294.324L294.71 263.639C295.337 242.173 290.941 224.915 281.057 210.034C278.76 206.577 276.881 203.554 276.881 203.318C276.881 202.488 287.432 202.95 291.881 203.974Z" style= 'fill: var(--dark-gray)'/>
                </svg></a>
              <a id="gmail" href="mailto:QuantumLyndsey5D.com"><svg class="w-6 md:w-8 md:h-8" viewBox="0 0 512 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M71.3114 0.4892L38.3114 1.0872L30.4404 4.8452C19.9844 9.8382 9.56538 20.0842 4.77338 30.0872L1.41938 37.0872L0.559378 61.0872C0.0863776 74.2872 -0.129622 148.762 0.0803775 226.587L0.461378 368.087L2.64038 374.006C5.62138 382.102 9.78638 388.307 16.5784 394.771C23.4474 401.308 29.2444 404.8 37.3114 407.258C43.0434 409.005 52.8174 409.087 256.311 409.087H469.311L475.698 406.78C487.641 402.467 496.789 395.147 503.966 384.161C511.753 372.243 511.146 385.216 511.549 222.087C511.747 141.787 511.52 67.3122 511.044 56.5872C510.19 37.3482 510.134 36.9932 506.84 30.0872C500.688 17.1862 486.076 4.9662 472.696 1.5322C467.828 0.2832 131.009 -0.5928 71.3114 0.4892ZM168.461 104.52L255.788 158.453L343.187 104.492L430.587 50.5322L445.449 50.8102L460.311 51.0872V204.587V358.087L435.094 358.354L409.877 358.621L409.594 247.187C409.438 185.898 408.997 135.439 408.614 135.056C408.23 134.673 403.055 137.405 397.114 141.128C391.172 144.851 359.761 164.624 327.311 185.069C294.861 205.514 265.515 223.948 262.098 226.034L255.884 229.826L245.598 223.514C239.94 220.043 207.411 199.606 173.311 178.098C98.7154 131.05 103.863 134.202 103.008 135.056C102.625 135.439 102.18 185.898 102.02 247.187L101.729 358.621L76.5204 358.354L51.3114 358.087L51.0584 205.148C50.8564 83.4572 51.0614 52.0462 52.0584 51.4132C52.7474 50.9762 59.5714 50.6112 67.2224 50.6022L81.1334 50.5872L168.461 104.52Z" style= 'fill: var(--dark-gray)'/>
                </svg>
                </a>
              <a id="tt" href="https://www.tiktok.com/@nocturnalrainbows823"  target="blank">
                <svg class="w-6 md:w-8 md:h-8" viewBox="0 0 449 511" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M236.701 34.25C236.279 186.93 234.777 364.373 233.86 369.848C232.485 378.056 224.933 393.178 217.986 401.631C211.759 409.208 203.285 415.714 192.704 421.041C181.495 426.684 175.209 428 159.453 428C147.755 428 144.831 427.658 138.098 425.505C116.548 418.615 99.2323 402.912 90.2203 382.091C85.7803 371.833 84.4243 363.174 85.0503 349.089C85.6153 336.393 86.7343 332.153 92.9593 319.143C97.6613 309.313 109.074 296.66 119.17 290.082C135.432 279.487 154.322 275.894 174.796 279.5C179.471 280.323 183.409 280.998 183.546 280.999C183.683 280.999 183.796 262.128 183.796 239.061V197.123L179.214 196.435C176.694 196.058 165.781 195.991 154.964 196.288C126.502 197.07 112.475 200.485 88.2963 212.52C57.4693 227.865 33.2023 251.482 17.8603 281.072C-6.63974 328.323 -5.90074 382.773 19.8743 429.5C27.1603 442.708 33.6683 451.004 47.7573 465.046C70.6263 487.838 94.8513 500.953 127.456 508.193C140.98 511.197 176.688 511.481 189.796 508.69C223.829 501.443 249.135 487.836 272.796 464.061C279.671 457.152 287.911 447.811 291.108 443.302C303.33 426.062 312.106 405.564 316.926 383C319.162 372.531 319.169 372.198 319.266 270.799C319.32 214.864 319.616 168.847 319.923 168.539C320.231 168.232 322.474 169.501 324.908 171.359C336.691 180.356 362.191 193.684 378.413 199.323C396.991 205.781 424.708 210.939 441.057 210.98L448.818 211L448.557 169.75L448.296 128.5L439.109 127.853C407.404 125.622 378.655 112.049 356.057 88.645C333.394 65.173 323.098 41.978 319.261 5.75L318.652 0H277.724H236.796L236.701 34.25Z" style= 'fill: var(--dark-gray)'/>
                </svg>
                </a>
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
</div>
</body>
</html>
