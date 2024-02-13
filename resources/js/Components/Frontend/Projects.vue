<script setup>
import Project from "./Project.vue";
import { ref } from "vue";
import { defineProps } from 'vue';

const props = defineProps({
    skills: Object,
    projects: Object,
});

const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all");

const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value = props.projects.data;
        selectedSkil.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter(project => {
            return project.skill.id === id;
        });
        selectedSkill.value = id;
    }
};
</script>

<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button @click="filterProjects('all')" class="text-white bg-light-tail-500 border focus:outline-none hover:bg-yellow-700 focus:bg-yellow-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-light-tail-500 dark:text-white dark:hover:bg-yellow-700 dark:focus:bg-yellow-700" :class="[selectedSkill == 'all' ? '' : '',]">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize m-4" v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button @click="filterProjects(projectSkill.id)" class="text-white bg-light-tail-500 border focus:outline-none hover:bg-yellow-700 focus:bg-yellow-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-light-tail-500 dark:text-white dark:hover:bg-yellow-700 dark:focus:bg-yellow-700" :class="[selectedSkill == projectSkill.id ? ' ' : '',]">
                        {{ projectSkill.name }}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project" />
        </section>
    </div>
</template>
