<template>
    <v-text-field
        :label=label
        :type="type"
        :append-inner-icon="icon"
        :hint="hint"
        hidden=true
        variant="solo"
        elevation="1"
        color="primary"
        bg-color="background"
    ></v-text-field>
</template>

<script setup>
    const props = defineProps({
        label: {
            type: String,
            required: true
        },
        type: {
            type: String,
            required: true
        },
        hint: {
            type: String
        },
        icon: {
            type: String
        }
    })
</script>