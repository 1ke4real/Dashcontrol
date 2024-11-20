<template>
    <div class="my-2">
        <div v-if="!error">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{label}}</label>
            <input :value="value" :type="type" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :placeholder="placeHolder" :required="required">
        </div>
        <div v-else>
            <label for="error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">{{label}}</label>
            <input :value="value" :type="type" id="error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Erreur">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Attention</span> {{errorMessage}}</p>
        </div>
    </div>

</template>
<script>
export default {
    name: 'InputField',
    components: { },
    props: {
        label: {
            type: String,
            required: true
        },
        placeHolder: {
            type: String,
            required: false,
            default: ''
        },
        required: {
            type: Boolean,
            required: false,
            default: false
        },
        type: {
            type: String,
            required: false,
            default: 'text'
        },
        error: {
            type: Boolean,
            required: false,
            default: false
        },
        errorMessage: {
            type: String,
            required: false,
            default: ''
        },
        value: {
            type: String,
            required: false,
            default: ''
        },
    },
}
</script>
<style scoped>

</style>