<template>
    <div>
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen w-1/2">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                    Dashcontrol
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                            Se connecter
                        </h1>
                        <form>
                            <InputField label="Email" type="email" placeHolder="test@test.com"/>
                            <InputField label="Mot de passe" type="password" place-holder="**********"/>
                            <div class="flex justify-center">
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Connexion</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
import InputField from '../components/InputField.vue'

export default {
    name: 'Home',
    components: {InputField},
    data() {
        return {

        }
    },
    watch: {

    },
    async mounted() {

    },
    methods: {

    },
}
</script>