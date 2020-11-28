<template>
    <div>
        <button :class="classes" class="w-full text-left" v-if="as == 'button'">
            <slot></slot>
        </button>

        <inertia-link :href="href" :class="classes" v-else>
            <slot></slot>
        </inertia-link>    
    </div>
</template>

<script>
    export default {
        props: ['active', 'href', 'as'],

        computed: {
            classes() {
                return this.active
                            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-base lg:text-xl font-medium leading-5 text-white focus:outline-none focus:border-white transition duration-150 ease-in-out'
                            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base lg:text-xl font-medium leading-5 text-gray-300 hover:text-white hover:border-gray-300 focus:outline-none focus:text-yellow-200 focus:border-yellow-200 transition duration-150 ease-in-out'
            }
        }
    }
</script>
