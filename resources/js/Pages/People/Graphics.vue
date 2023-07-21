
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {ref} from 'vue';
import {Bar} from 'vue-chartjs';
import {Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, ArcElement} from 'chart.js';
ChartJS.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend);

const props= defineProps({
    data:{type:Object}
})


const total = ref([]);
const age = ref([]);
const chartData = ref([]);
const chartOptions = ref([]);
const colors = ref([]);

const random = ()=>{
    return Math.floor(Math.random()*255);
}

props.data.map( (row) =>(
    age.value.push(row.age),
    total.value.push(row.Total),
    colors.value.push("rgb("+random()+","+random()+","+random()+")")
))
chartOptions.value ={responsive:true}
chartData.value ={
    labels:age.value,
    datasets:[
        {label:'Total',data:total.value, backgroundColor:colors}
    ]
}




</script>

<template>
    <Head title="Graphics" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gráficos</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xm mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <Bar :data="chartData" :options="chartOptions" />
                    
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>




