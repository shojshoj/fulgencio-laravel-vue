<template>
    <v-text-field
        :label=label
        type="text"
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
        }
    })
</script>