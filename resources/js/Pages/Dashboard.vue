<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <text-input ref="hello"  />
                <button @click="focus">Hell</button>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import TextInput from "../components/TextInput";
    import Button from "../Jetstream/Button";

    export default {
        components: {
            Button,
            TextInput,
            AppLayout,
            Welcome,
        },
        data(){
            return {
                type:'password',
            }
        },
        methods:{
            focus(){
                this.$refs.hello.focus()
            },

        }
    }
</script>
