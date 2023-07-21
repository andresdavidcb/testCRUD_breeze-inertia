
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
 
DataTable.use(DataTablesCore);
 
const data = [
[1,'Ana Arteaga',14,'ana@mail.com'],
[2,'Linda Arteaga',12,'linda@mail.com'],
[3,'Marcos Arteaga',20,'Marcos@mail.com'],
[4,'Juan Arteaga',15,'Juan@mail.com'],
[5,'Diego Arteaga',3,'Diego@mail.com'],
[6,'pedro Arteaga',8,'pedro@mail.com'],
[7,'Ana Suarez',14,'ana@mail.com'],
[8,'Linda Suarez',12,'linda@mail.com'],
[9,'Marcos Suarez',20,'Marcos@mail.com'],
[10,'Juan Suarez',15,'Juan@mail.com'],
[11,'Diego Suarez',3,'Diego@mail.com'],
[12,'pedro Suarez',8,'pedro@mail.com'],
[13,'Ana Montes',14,'ana@mail.com'],
[14,'Linda Montes',12,'linda@mail.com'],
[15,'Marcos Montes',20,'Marcos@mail.com'],
[16,'Juan Montes',15,'Juan@mail.com'],
[17,'Diego Montes',3,'Diego@mail.com'],
[18,'pedro Montes',8,'pedro@mail.com'],
  
];
</script>
 
<template>
    <authenticated-layout>

        <div class="py-6">
            <div class="max-w-7xm mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <DataTable :data="data" class="display" :autowidth = false>
                        <thead class="bg-black text-white">
                            <tr>
                                <th>Id</th><th>Nombre</th><th>Edad</th><th>Correo</th>
                            </tr>
                        </thead>
                    </DataTable>
                    
                </div>
            </div>
        </div>
    
</authenticated-layout>
</template>