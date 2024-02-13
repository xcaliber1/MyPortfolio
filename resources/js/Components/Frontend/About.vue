<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
        <div 
        class="container mx-auto"
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
            <div class="flex flex-col xl:flex-row gap-24">
                <img class="object-cover h-full w-[566pxl] md:mx-auto lg:mx-0 rounded-2xl"
                src="/images/about.jpg"
                alt="about" />
                <div class="
                flex flex-col
                items-center
                text-center
                lg:items-start lg:text-left
                "
                >
                <div class="flex flex-col">
                    <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                        About Me
                    </h2>
                    <P class="mb-4 text-accent">Backend Web developer</P>
                    <hr class="mb-8 opacity-90 dark:opacity-5" />
                    <p class="mb-8">
                        Seeking an entry-level backend developer position where I can apply my academic knowledge and practical skills in software development. Eager to contribute to the design, development, and optimization of backend systems, while continuously learning and growing in a collaborative team environment. Committed to delivering high-quality code and leveraging modern technologies to solve real-world problems effectively.
                    </p>
                </div>
                <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
                    Contact me
                </a>
            </div>
            </div>
        </div>
    </section>
</template>