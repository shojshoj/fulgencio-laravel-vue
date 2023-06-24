<template>
    <v-layout>
        <NavigationBar/>
        <v-main>
            <router-view>
                
            </router-view>
            <FooterBar/>
        </v-main>
    </v-layout>
</template>

<script setup>
import NavigationBar from '../../shared/navigation/NavigationBar.vue';
import FooterBar from '../../shared/footer/FooterBar.vue';
</script>