<script setup>


</script>
<template>
    <section id="home" class="lg:h-[98vh]"
             :class="{ 'bg-dark-primary': isDarkMode, 'bg-light-primary': !isDarkMode }">
        <div 
        class="container mx-auto h-full"
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :visible="{
            opacity: 1,
            y: 0,
        }"
        >
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md-[22px]">Hey I'm Kent! 👋</p>
                    <h1 class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                        I am a Backend Developer.
                    </h1>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-ledt">
                        As a Junior Backend Developer, I aim to apply my education and internship experience, contribute to projects, learn from experienced peers, and grow within the field of backend development.
                    </p>
                    <button class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all">
                        Work with me
                    </button>
                    <div class="pt-12">
                        <h5 class="text-lg flex justify-center lg:justify-start items-center text-black dark:text-white mb-2">
                            Follow me on
                        </h5>
                    <div class="flex items-center mb-6">
                        <a class="
                            w-12
                            h-12
                            rounded-full
                            flex
                            items-center
                            justify-center
                            border border-white
                            text-black
                            dark:text-white
                            hover:bg-light-secondary hover:border-light-secondary
                            dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                            mr-3
                            sm:mr-4
                            "
                            href="https://www.facebook.com/KentAndrew.D.Ferrer " target="_blank"
                        >
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13.1 6H15V3h-1.9A4.1 4.1 0 0 0 9 7.1V9H7v3h2v10h3V12h2l.6-3H12V6.6a.6.6 0 0 1 .6-.6h.5Z" clip-rule="evenodd"/>
                        </svg>
                        
                        </a>
                        <a class="
                            w-12
                            h-12
                            rounded-full
                            flex
                            items-center
                            justify-center
                            border border-white
                            text-black
                            dark:text-white
                            hover:bg-light-secondary hover:border-light-secondary
                            dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                            mr-3
                            sm:mr-4
                            "
                            href="https://www.youtube.com/channel/UCekcErmyahl9FNZjdlsAdSw" target="_blank"
                        >
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M21.7 8c0-.7-.4-1.3-.8-2-.5-.5-1.2-.8-2-.8C16.2 5 12 5 12 5s-4.2 0-7 .2c-.7 0-1.4.3-2 .9-.3.6-.6 1.2-.7 2l-.2 3.1v1.5c0 1.1 0 2.2.2 3.3 0 .7.4 1.3.8 2 .6.5 1.4.8 2.2.8l6.7.2s4.2 0 7-.2c.7 0 1.4-.3 2-.9.3-.5.6-1.2.7-2l.2-3.1v-1.6c0-1 0-2.1-.2-3.2ZM10 14.6V9l5.4 2.8-5.4 2.8Z" clip-rule="evenodd"/>
                        </svg>

                        </a>
                        <a class="
                            w-12
                            h-12
                            rounded-full
                            flex
                            items-center
                            justify-center
                            border border-white
                            text-black
                            dark:text-white
                            hover:bg-light-secondary hover:border-light-secondary
                            dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                            mr-3
                            sm:mr-4
                            "
                            href="https://www.linkedin.com/in/kent-andrew-ferrer-4a416615a/" target="_blank"
                        >
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.5 8.8v1.7a3.7 3.7 0 0 1 3.3-1.7c3.5 0 4.2 2.2 4.2 5v5.7h-3.2v-5c0-1.3-.2-2.8-2.1-2.8-1.9 0-2.2 1.3-2.2 2.6v5.2H9.3V8.8h3.2ZM7.2 6.1a1.6 1.6 0 0 1-2 1.6 1.6 1.6 0 0 1-1-2.2A1.6 1.6 0 0 1 6.6 5c.3.3.5.7.5 1.1Z" clip-rule="evenodd"/>
                                <path d="M7.2 8.8H4v10.7h3.2V8.8Z"/>
                            </svg>                      
                        </a>
                        <a class="
                            w-12
                            h-12
                            rounded-full
                            flex
                            items-center
                            justify-center
                            border border-white
                            text-black
                            dark:text-white
                            hover:bg-light-secondary hover:border-light-secondary
                            dark:hover:bg-dark-secondary dark:hover:border-dark-secondary
                            mr-3
                            sm:mr-4
                            "
                            href="https://github.com/xcaliber1" target="_blank"
                        >
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2c-2.4 0-4.7.9-6.5 2.4a10.5 10.5 0 0 0-2 13.1A10 10 0 0 0 8.7 22c.5 0 .7-.2.7-.5v-2c-2.8.7-3.4-1.1-3.4-1.1-.1-.6-.5-1.2-1-1.5-1-.7 0-.7 0-.7a2 2 0 0 1 1.5 1.1 2.2 2.2 0 0 0 1.3 1 2 2 0 0 0 1.6-.1c0-.6.3-1 .7-1.4-2.2-.3-4.6-1.2-4.6-5 0-1.1.4-2 1-2.8a4 4 0 0 1 .2-2.7s.8-.3 2.7 1c1.6-.5 3.4-.5 5 0 2-1.3 2.8-1 2.8-1 .3.8.4 1.8 0 2.7a4 4 0 0 1 1 2.7c0 4-2.3 4.8-4.5 5a2.5 2.5 0 0 1 .7 2v2.8c0 .3.2.6.7.5a10 10 0 0 0 5.4-4.4 10.5 10.5 0 0 0-2.1-13.2A9.8 9.8 0 0 0 12 2Z" clip-rule="evenodd"/>
                        </svg>
  
                        
                        </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-1 justify-en items-center h-full mt-8 md:mt-0">
                    <img class="rounded-full" src="/images/me.jpg" alt="Me" />
                </div>
            </div>
        </div>
    </section> 
</template>