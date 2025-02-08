<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pro create it solution</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <script src="https://cdn.tailwindcss.com"></script>



</head>

<body class="font-sans antialiased ">

    <section class="relative py-24">
        <div class="w-full px-4 mx-auto max-w-7xl md:px-5 lg:px-5">
            <div class="inline-flex flex-col items-center justify-center w-full gap-10 lg:gap-14">
                <a href="">
                    <img src="/assets/img/logo_p.png" />

                </a>
                <div class="flex flex-col items-center justify-center w-full gap-5">
                    <div class="flex flex-col items-center justify-center w-full gap-6">
                       <div class="w-full flex-col justify-start items-center gap-2.5 flex">
                        <h2 class="text-3xl font-bold leading-normal text-center text-gray-800 font-manrope">
                            Veuillez patienter ! Nous sommes actuellement en maintenance.
                        </h2>
                        <p class="text-base font-normal leading-relaxed text-center text-gray-500">
                            Cela ne prendra pas beaucoup de temps. Nous serons bientôt de retour en ligne.
                        </p>
                    </div>
                        <div class="flex items-start justify-center w-full gap-1 count-down-main">
                           <div class="timer">
                            <div>
                                <h3 id="countdown"
                                    class="text-3xl font-normal leading-normal text-center text-black countdown-element days font-manrope">
                                </h3>
                            </div>
                        </div>
                            <h3 class="text-3xl font-normal leading-normal text-center text-black font-manrope">:</h3>
                            <div class="timer">
                                <div class="">
                                    <h3
                                        class="text-3xl font-normal leading-normal text-center text-black countdown-element hours font-manrope">
                                    </h3>
                                </div>
                            </div>
                            <h3 class="text-3xl font-normal leading-normal text-center text-black font-manrope">:</h3>
                            <div class="timer">
                                <div class="">
                                    <h3
                                        class="text-3xl font-normal leading-normal text-center text-black countdown-element minutes font-manrope">
                                    </h3>
                                </div>
                            </div>
                            <h3 class="text-3xl font-normal leading-normal text-center text-black font-manrope">:</h3>
                            <div class="timer">
                                <div class="">
                                    <h3
                                        class="text-3xl font-normal leading-normal text-center text-black countdown-element seconds font-manrope">
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full justify-center items-center gap-2.5 flex sm:flex-row flex-col">
                            <input type="text"
                                class="sm:w-80 w-full h-10 focus:outline-none text-gray-900 placeholder-gray-400 text-sm font-normal leading-relaxed px-3.5 py-2 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] border border-gray-300"
                                placeholder="Your mail">
                            <button
                                class="sm:w-fit w-full px-3.5 py-2 bg-indigo-700 hover:bg-indigo-800 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                <span class="px-1.5 text-white text-sm font-medium leading-6 whitespace-nowrap">Notify
                                    Me</span>
                            </button>
                        </div>
                    </div>
                    <img src="https://pagedone.io/asset/uploads/1718004199.png" alt="under maintenance image"
                        class="object-cover">
                </div>
            </div>
        </div>
    </section>
    <!--Custom Script-->

<script>
    function startCountdown(durationInSeconds, displayElement) {
        let endTime = new Date().getTime() + durationInSeconds * 1000;

        function updateTimer() {
            let now = new Date().getTime();
            let timeLeft = endTime - now;

            if (timeLeft > 0) {
                let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                displayElement.innerHTML = `${days}j ${hours}h ${minutes}m ${seconds}s`;
            } else {
                displayElement.innerHTML = "Maintenance terminée !";
                clearInterval(timerInterval);
            }
        }

        updateTimer();
        let timerInterval = setInterval(updateTimer, 1000);
    }

    document.addEventListener("DOMContentLoaded", function () {
        let countdownElement = document.getElementById("countdown");
        let threeDaysInSeconds = 3 * 24 * 60 * 60;
        startCountdown(threeDaysInSeconds, countdownElement);
    });
</script>


</body>

</html>
