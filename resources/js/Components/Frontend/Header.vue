<script setup>
import { ref, onMounted } from 'vue';
const isDarkMode = ref(false);

const toggleDarkMode = () => {
    isDarkMode.value = !isDarkMode.value;
};

const showMobileMenu = ref("false");
const scrollBg = ref(false);

const navigations = [
  { name: "Home", href: "#home"},
  { name: "About", href: "#about"},
  { name: "Portfolio", href: "#portfolio"},
  { name: "Services", href: "#services"},
  { name: "Contact", href: "#contact"},
];

const setScrollBg = (value) => {
  scrollBg.value = value;
}

onMounted(() => {
  window.addEventListener("scroll", () => {
    return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
  })
});
</script>
<template>
    

    <nav class="w-full fixed z-20"
     :class="{ 
         'bg-dark-primary': isDarkMode, 
         'bg-light-primary': !isDarkMode,
         'bg-white': !scrollBg && !isDarkMode, // Assuming this is for the default background
         'bg-slate-800': !scrollBg && isDarkMode // Assuming this is for the default dark background
      }">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/images/logo.png" class="h-8" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ferrer</span>
    </a>
    <button @click="showMobileMenu = !showMobileMenu"
    data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <button @click="toggleDarkMode()">Toggle Dark Mode</button>
    <div class="w-full md:block md:w-auto"
    :class="{hidden: showMobileMenu}"
    id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 rounded-lg border border-light-tail-500 dark:border-dark-navy-100 md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0">
        <li v-for="(navigation, index) in navigations" :key="index">
          <a :href="navigation.href" class="block py-2 px-3 text-light-tail-500 rounded dark:text-dark-navy-100 hover:text-light-tail-100 dark:hover:text-white " aria-current="page">{{ navigation.name }}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</template>