
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import {ref} from 'vue';


DataTable.use(DataTablesCore);
const props= defineProps({
    people:{type:Object},
    Tpeople:{type:Object},
    
})

const dataT = [
  [1, 2],
  [3, 4],
];


</script>

<template>
    <Head title="Personas" />

    <AuthenticatedLayout>
        
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <DataTable :data="dataT" class="display">
                        <tr>
                            <th>A</th>
                            <th>B</th>
                        </tr>
                    </DataTable>

                   

                    <table class ="table-auto w-full">
                        <thead class="px-10 bg-black text-white" >
                            <th>Id</th><th>Nombre</th><th>Edad</th>
                        </thead>
                        <tbody>
                            <tr v-for="d in people" :key="d.id" class ="border">
                                <td class="px-4 py-2 border">{{ d.id }}</td>
                                <td class="px-4 py-2 border">{{ d.name }}</td>
                                <td class="px-4 py-2 border">{{ d.age }}</td>

                            </tr>
                        </tbody>
                    </table>
                    
                </div>

                
            </div>
        </div>
    </AuthenticatedLayout>
</template>


