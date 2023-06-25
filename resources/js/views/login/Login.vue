<template>
    <v-row no-gutters>
        <v-col cols="12" md="5">
            <v-row class="mb-5">
                <v-col class="pa-10">
                    <p>
                        <v-icon icon="mdi-chevron-left" size="x-small"></v-icon> 
                        <u><router-link to="/" style="text-decoration: none;" class="text-header my-font">FULARAVUE</router-link></u>
                    </p>
                </v-col>
            </v-row>
            <v-row class="pa-10">
                <v-col
                    class="text-center d-flex align-center justify center"
                >
                    <v-sheet
                        class="mx-auto rounded-xl py-10 px-15"
                        color="background"
                    >
                        <v-row>
                            <v-col>
                                <div class="text-h4 text-header my-font">Welcome back!</div>
                                <div class="text-h6 text-subheader my-font">Sign in to your Account</div>
                            </v-col>
                        </v-row>
                        <v-form @submit.prevent="handleLogin">
                            <v-row>
                                <v-col>
                                    <v-text-field
                                        label="Email"
                                        type="input"
                                        variant="solo"
                                        color="primary"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row class="mt-n5">
                                <v-col>
                                    <v-text-field
                                        label="Password"
                                        type="input"
                                        variant="solo"
                                        color="primary"
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row class="mt-n5">
                                <v-col>
                                    <v-btn
                                        block
                                        elevation="2"
                                        color="primary"
                                        type="submit"
                                    >
                                        Login
                                    </v-btn>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-btn
                                        block
                                        elevation="2"
                                        prepend-icon="mdi-google"
                                    >
                                        Sign In with Google
                                    </v-btn>
                                </v-col>
                            </v-row>
                            <v-row class="mt-12">
                                <v-col>
                                    <v-col class="align-center text-center">
                                        <p class="my-font">Don't have an account yet? <router-link class="text-secondary" to="/register" style="text-decoration: none;">Register Here</router-link></p> 
                                    </v-col>
                                </v-col>
                            </v-row>
                        </v-form>
                    </v-sheet>
                </v-col>
            </v-row>
        </v-col>
        <v-col class="d-none d-md-flex pa-0">
            <LoginBanner 
                header="FULARAVUE" 
                sub-header="FULARAVUE" 
                body="This is a portfolio Project by: Joshua B. Fulgencio"
            />
        </v-col>
    </v-row>
</template>

<script setup>
    import { defineAsyncComponent } from "vue";
    const LoginBanner = defineAsyncComponent(() => import("./login-components/LoginBanner.vue"))
</script>

<style scoped>
    .my-font{
        font-family: 'Source Serif Pro', sans-serif !important;
    }
</style>