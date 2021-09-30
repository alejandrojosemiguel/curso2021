<template>
    <div class="container"> 
        <mi-componente></mi-componente>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Lista de productos</router-link>
                    <router-link to="/create" class="nav-item nav-link">Agregar producto</router-link>
                </div>
            </div>
        </nav>
 
        <router-view> </router-view>
    </div>
</template>
 
<script>
    import MiComponente from './components/MiComponente.vue';
    export default {
        components:{
            MiComponente
        }
    }
</script>