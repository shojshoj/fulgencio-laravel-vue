<template>
    <v-row no-gutters>
        <v-col cols="12" md="5">
            <v-row class="mb-5">
                <v-col class="pa-10">
                    <p>
                        <v-icon icon="mdi-chevron-left" size="x-small"></v-icon> 
                        <u>FULARAVUE</u>
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
                        <v-row>
                            <v-col>Username</v-col>
                        </v-row>
                        <v-row>
                            <v-col>Password</v-col>
                        </v-row>
                        <v-row>
                            <v-col>Remember Me and Forgot</v-col>
                        </v-row>
                        <v-row>
                            <v-col>Button</v-col>
                        </v-row>
                        <v-row>
                            <v-col>Button</v-col>
                        </v-row>
                        <v-row class="mt-16">
                            <v-col>Sign Up Link</v-col>
                        </v-row>
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

<style scoped>w
    .my-font{
        font-family: 'Source Serif Pro', sans-serif !important;
    }
</style>