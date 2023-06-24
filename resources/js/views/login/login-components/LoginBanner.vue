<template>
    <v-img
        cover 
        :height="`${windowHeight}px`" 
        :src="imageLightMode"
    >
        <v-row class="pa-10">
            <v-col class="text-end">
                <p class="text-h2 font-weight-medium text-header my-header">{{ header }}</p>
            </v-col>
        </v-row>
        <v-row class="ms-16 mb-16 bottom-text text-header">
            <v-col cols="12" class="text-h5 mb-n3">
                <div>{{ subHeader }}</div>
            </v-col>
            <v-col cols="12" class="text-overline text-subheader font-weight-light">
                <p>{{ body }}</p>
            </v-col>
        </v-row>
    </v-img>
</template>

<script setup>
    import { ref, onMounted } from "vue";

    const windowHeight = ref(0);

    const props = defineProps({
        header: {
            type: String,
            required: true
        },
        subHeader: {
            type: String,
            required: true
        },
        body: {
            type: String,
            required: true
        }
    })

    //Will be moved to state management via store
    const imageLightMode = "/assets/images/login/t_bellis_yellow_dress_alt.jpg"
    const imageDarkMode = "/assets/images/login/b_shah_night_fit_alt.jpg"

    onMounted(() => {
        // Update the windowHeight value when the component is mounted
        windowHeight.value = window.innerHeight;
    });

    // Update the windowHeight value when the window is resized
    window.addEventListener("resize", () => {
        windowHeight.value = window.innerHeight;
    });
</script>

<style scoped>
    .my-header {
        /* Prefix required. Even Firefox only supports the -webkit- prefix */
        /* -webkit-text-stroke-width: 2px;
        -webkit-text-stroke-color: rgb(var(--v-theme-background)); */
        letter-spacing: 3px !important;
    }
    .bottom-text {
        position: absolute;
        bottom: 0;
        left: 0;
    }
</style>