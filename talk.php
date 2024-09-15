<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="styles.css" />
    <style>
        .error {
  border: 2px solid rgba(0, 102, 255, 0.767);
}
</style>
</head>
<body>
<body class="background-gradient min-h-screen">
<div class="w-screen absolute top-0 left-0">
            <img src="img/sunStar9.svg" alt="Sun Background" class="rotate-180 mx-auto opacity-20 object-cover w-2/3 h-full">
        </div>
    <div class="min-h-screen flex flex-col justify-between">
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
                    <li class="!mx-0"><a href="index.html" class="mx-0 middle-light-color curser-pointer hover:opacity-80 light-button-border p-3">Home</a></li>
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
        <header class="flex justify-between items-center max-w-screen-2xl mx-auto p-7">
            <div class="text-3xl font-bold dark-gray handjet-700">quantum{L5D}</div>
            <nav>
                <ul class="flex space-x-4 2xl:text-2xl lg:text-xl sm:text-lg text-base handjet-700">
                    <li><a href="index.html" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Home</a></li>
                    <li><a href="talk.php" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Let's Talk</a></li>
                    <li><a href="#" class="dark-gray curser-pointer hover:opacity-80 button-border p-3">Explore</a></li>
                </ul>
            </nav>
        </header>
    </div>
   <div id ="contactForm" class="h-full relative z-20 mt-14 sm:mt-0 mb-10 lg:mb-30">
 
           
        <div class="max-w-screen-xl mx-auto xl:py-10 lg:px-6 lg:py-7 px-3 py-3 relative">
        <h1 class="2xl:text-9xl leading-none sm:leading-none lg:leading-normal  lg:text-8xl sm:text-7xl text-6xl text-center font-semibold text-dark playfair-display-500 more-neg-letterinline-block">Leave Me a Message</h1>
        <h2 class="2xl:text-6xl lg:text-5xl text-4xl font-bold text-dark-gray-60 mb-4 playfair-display-500 w-10/12 mx-auto text-center neg-letter">ask me anything or tell me anything</h2>

    <form action="send_email.php" method="POST" class="mt-10 mx-auto md:w-3/4 2xl:w-2/3 w-full flex flex-col space-y-4">
        <div class="flex lg:gap-4 w-full">
        <label class="flex w-1/2 flex-col 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg text-base leading-relaxed mr-1 dark-gray opacity-80 lora-400">First Name
        <input type="text" required name="fname" class="p-2 feature-border">
        </label>
        <label class="w-1/2 flex flex-col flex flex-col 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg text-base leading-relaxed dark-gray opacity-80 lora-400">Last Name
            <input type="text" required name="lname" class="feature-border p-2">
        </label>
        </div>
        <label class="flex flex-col flex flex-col 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg text-base leading-relaxed dark-gray opacity-80 mb-8 lora-400">Your Email Address
        <input type="email" required name="email" class="p-2 feature-border">
        </label>
        <label class="flex flex-col flex flex-col 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg text-base leading-relaxed dark-gray opacity-80 mb-8 lora-400">Your Message
        <textarea spellcheck="true" name="message" required class="p-2 feature-border h-80"></textarea>
        </label>
        <div class="flex justify-end">
        <button type="submit" class="dark-gray button-border handjet-700 2xl:text-3xl lg:text-xl hover:opacity-80 sm:text-lg text-base p-3">Send</button>
        </div>
    </form>
        </div>

</div>
<div id="footer" class="relative pb-2">
    <div class="absolute bottom-0 left-0 ">
        <img src="img/sunStar1.svg" alt="Sun Background" class="opacity-20">
</div>
    <div class="flex justify-between h-full gap-2 flex-col max-w-screen-2xl mx-auto p-7">
        
        <div class="text-3xl font-bold dark-gray handjet-700">quantum{L5D}</div>
            <p class="lora-400 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg text-base opacity-80">I am also a developer. This website was created from scratch by me. I hope you enjoyed the experience it offered. <span class="lora-700">-Lyndsey</span></p>
            <p class="lora-400 2xl:2xl:text-xl sm:text-lg text-base sm:text-lg text-base opacity-80">If you would like to look at the repository in GitHub...<a target="_blank" class="hover-link underline" href="https://github.com/QuantumL5D/QuantumL5D">QuantumL5D REPO</a></p>
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

</body>
</html>