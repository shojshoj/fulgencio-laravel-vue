<template>
    <v-layout>
        <NavigationBar/>
        <v-main>
            <v-container fluid>
                <router-view v-slot="{ Component }">
                    <keep-alive>
                        <component :is="Component" :key="$route.fullPath"></component>
                    </keep-alive>
                </router-view>
            </v-container>
            <FooterBar/>
        </v-main>
    </v-layout>
</template>

<script setup>
import FooterBar from './shared/footer/FooterBar.vue';
import NavigationBar from './shared/navigation/NavigationBar.vue';
</script>