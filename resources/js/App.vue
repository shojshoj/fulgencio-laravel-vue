<template>
    <v-layout>
        <v-main>
            <router-view v-slot="{ Component }">
                    <keep-alive>
                        <component :is="Component" :key="$route.fullPath"></component>
                    </keep-alive>
            </router-view>
        </v-main>
    </v-layout>
</template>

<script setup>
</script>