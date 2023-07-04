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
                    class="text-center d-flex align-center justify-center"
                >
                    <v-sheet
                        class="mx-auto rounded-xl py-10 px-15"
                        color="transparent"
                    >
                        <v-row>
                            <v-col class="text-start">
                                <div class="text-caption text-header my-font">JOIN US NOW</div>
                                <div class="text-h4 text-header my-font">Create your new Account.</div>
                            </v-col>
                        </v-row>
                        <v-form @submit.prevent="handleRegister">
                            <v-row>
                                <v-col>
                                    <RegisterTextField 
                                        v-model="formData.email"
                                        label="Email"
                                        type="text"
                                        hint="Enter a valid Email"
                                        :error-messages=" 
                                            v$.email.$errors.map(
                                                (e) => e.$message
                                            )
                                        "
                                    />
                                </v-col>
                            </v-row>
                            <v-row class="mt-n5">
                                <v-col>
                                    <RegisterTextField 
                                        v-model="formData.password"
                                        label="Password"
                                        :type="showPassword? 'text' : 'password'"
                                        :icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                                        hint="Enter at least 8 characters"
                                        @click:append-inner="showPassword = !showPassword"
                                        :error-messages=" 
                                            v$.password.$errors.map(
                                                (e) => e.$message
                                            )
                                        "
                                    />
                                </v-col>
                            </v-row>
                            <v-row class="mt-n5">
                                <v-col>
                                    <RegisterTextField 
                                        v-model="formData.verifyPassword"
                                        label="Verify your Password"
                                        :type="showPassword? 'text' : 'password'"
                                        hint="Must be the same as your Password"
                                        :error-messages=" 
                                            v$.verifyPassword.$errors.map(
                                                (e) => e.$message
                                            )
                                        "
                                    />
                                </v-col>
                            </v-row>
                            <v-row class="mt-n5">
                                <v-col>
                                    <v-btn
                                        block
                                        elevation="2"
                                        color="primary"
                                        type="submit"
                                        class="my-btn"
                                    >
                                        Create Account
                                    </v-btn>
                                </v-col>
                            </v-row>
                            <v-row class="mt-12">
                                <v-col>
                                    <v-col class="align-center text-center">
                                        <p class="my-font">Already have an account? <router-link class="text-secondary" to="/login" style="text-decoration: none;">Login Here</router-link></p> 
                                    </v-col>
                                </v-col>
                            </v-row>
                        </v-form>
                    </v-sheet>
                </v-col>
            </v-row>
        </v-col>
    </v-row>
</template>

<script setup>
    import { ref, reactive, computed } from 'vue';
    import { useVuelidate } from '@vuelidate/core'
    import { required, email, helpers, sameAs } from '@vuelidate/validators'

    import RegisterTextField from './register-components/RegisterTextField.vue';

    const formData = reactive({
        email: "",
        password: "",
        verifyPassword: ""
    })

    const showPassword = ref(false)

    function minPassword(value){
        // console.log(value.length)
        return value.length >= 8
    }

    const passwordRule = helpers.regex(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)

    const rules = computed(() => {
        return {
            email :{
                email: helpers.withMessage(
                    "Enter a Valid Email",
                    email
                ),
                required: helpers.withMessage(
                    "Enter your Email",
                    required
                )
            },
            password: {
                required: helpers.withMessage(
                    "Enter your Password",
                    required
                ),
                minPassword: helpers.withMessage(
                    "Password must be at least 8 Characters",
                    minPassword
                ),
                passwordRule: helpers.withMessage(
                    "Password must contain at least 1 Number",
                    passwordRule
                )
            },
            verifyPassword: {
                sameAs: helpers.withMessage(
                    "Must be the same as your Password",
                    sameAs(formData.password)
                )
            }
        }
    })

    const v$ = useVuelidate(rules, formData)

    async function handleRegister(){
        v$.value.$touch()
        let result = await v$.value.$validate();
    }
</script>

<style scoped>
    .my-font{
        font-family: 'Source Serif Pro', sans-serif !important;
    }
    .my-text-field{
        background-color: rgb(var(--v-theme-background));
    }
    .my-btn{
        color: white !important;
    }
</style>