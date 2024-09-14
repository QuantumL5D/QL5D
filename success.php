<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="background-gradient">
    <div class="flex flex-col justify-between  min-h-screen">

    <div id="mobile-nav" class="block sm:hidden" x-data="{ open: false }">
        <div class="w-screen h-screen fixed top-0 left-0 z-30 bg-dark-gray opacity-60"
        x-bind:style="{ transform: open ? 'translateY(0)' : 'translateY(-100%)' }"
        style="transition: transform 0.5s;"></div>
        <header 
            class="mx-auto w-3/4 pb-10 h-3/5 fixed top-0 bg-dark-gray z-30 mobile-position mobile-radius flex gap-10 flex-col"
            x-bind:style="{ top: open ? '0%' : '-100%' }"
            style="transition: top 0.5s;">
            <div class="text-5xl middle-light-color handjet-500 text-center mt-10" >quantum{L5D}</div>
            <nav >
                <ul class="flex space-x-4 text-2xl handjet-500 flex-col flex gap-10 items-center">
                    <li class="!mx-0"><a href="#" class="mx-0 middle-light-color curser-pointer hover:opacity-80 light-button-border p-3">My Experience</a></li>
                    <li class="!mx-0"><a href="#" class="mx-0 middle-light-color curser-pointer hover:opacity-80 light-button-border p-3">Let's Talk</a></li>
                    <li class="!mx-0"><a href="#" class="mx-0 middle-light-color curser-pointer hover:opacity-80 light-button-border p-3">Explore</a></li>
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
        <div>
        <header class="flex justify-between items-center max-w-screen-2xl mx-auto p-7">
            <div class="text-3xl font-bold dark-gray handjet-700">quantum{L5D}</div>
            <nav>
                <ul class="flex space-x-4 2xl:text-2xl lg:text-xl sm:text-lg text-base handjet-700">
                    <li><a href="#" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">My Experience</a></li>
                    <li><a href="talk.php" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Let's Talk</a></li>
                    <li><a href="#" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Explore</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="relative flex flex-col justify-center items-center">
    <div class="w-screen absolute top-0 left-0">
            <img src="img/sunStar1.svg" alt="Sun Background" class="rotate-180 mx-auto opacity-20 object-cover w-2/3 h-full">
        </div>
        <div>
        <h1 class="2xl:text-9xl lg:text-8xl sm:text-7xl leading-tight text-6xl font-semibold text-dark text-centerd mb-4 playfair-display-500">Thank you!</h1>
        <p class="2xl:2xl:text-xl sm:text-lg text-base sm:text-lg text-base leading-relaxed dark-gray opacity-80 mb-12 lora-400 ">Your message has been sent successfully. We will get back to you soon.</p>
        <a href="index.html" class="button-border handjet-700 text-3xl hover:opacity-80 p-3 dark-gray">Go Back to Home</a>
        </div>
        </div>
    </div>
<div id="footer" class="h-full relative pb-2">
    <div class="absolute top-0 left-0 ">
        <img src="img/sunStar1.svg" alt="Sun Background" class="h-52 top-20 opacity-20">
</div>
    <div class="flex justify-between h-full gap-2 flex-col max-w-screen-2xl mx-auto p-7">
        <div class="text-3xl font-bold dark-gray handjet-700">quantum{L5D}</div>
            <p class="lora-400 opacity-80">I am also a developer. This website was created from scratch by me. I hope you enjoyed the experience it offered. <span class="lora-700">-Lyndsey</span></p>
            <p class="lora-400 opacity-80">If you would like to look at the repository in GitHub...<a target="_blank" class="hover-link underline" href="https://github.com/QuantumL5D/QuantumL5D">QuantumL5D REPO</a></p>
               
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
</body>
</html>
