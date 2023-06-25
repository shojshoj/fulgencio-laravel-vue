<template>
    <v-app-bar color="transparent" flat class="text-center">
        <template v-slot:prepend>
            <v-app-bar-nav-icon></v-app-bar-nav-icon>
        </template>
        <v-app-bar-title>
            <router-link to="/" style="text-decoration: none;" class="text-header me-5">Home</router-link>
            <router-link to="login" style="text-decoration: none;" class="text-header me-5">Login</router-link>
            <router-link to="register" style="text-decoration: none;" class="text-header">Register</router-link>
        </v-app-bar-title>
        <template v-slot:append>
            <v-btn icon="mdi-account"></v-btn>
        </template>
    </v-app-bar>
</template>