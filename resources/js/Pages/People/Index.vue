
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';



DataTable.use(DataTablesCore);

</script>

<template>
    <Head title="Personas" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Personas</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <DataTable :data="people" class="display" :columns="columns" :options="{select: true}"   ajax="/data.json"  width="90%">
                        
                            
                    </DataTable>

                    {{ people }}
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
export default {
    props:['people']
}
</script>
