<script setup>
import Projects from './Projects.vue';


defineProps({
    skills: Object,
    projects: Object
});
</script>
<template>
    <section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
        <div class="container mx-auto"
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
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis earum, numquam accusantium fugiat atque iusto consectetur aspernatur et culpa alias magni! Consequatur eum omnis earum ducimus ullam ipsam asperiores obcaecati?
                </p>
            </div>   
        </div>
        <Projects :skills="skills" :projects="projects" />
    </section>
</template>