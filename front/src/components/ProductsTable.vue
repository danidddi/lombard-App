<script setup>
  import ProductsTableRow from './ProductsTableRow.vue';
  import axios from "axios";
  import {onMounted, ref} from "vue";
  import { useRatesStore } from '@/stores/ratesStore';

  const ratesStore = useRatesStore();
  const loanProducts = ref({});

  onMounted(() => {
    fetchProducts();
  });

  const fetchProducts = async () => {
    const response = await axios.get('http://127.0.0.1:8000/api/products');
    response.status == 200
        ? loanProducts.value = response.data
        : alert(response.data);
  };


  onMounted(() => {
    fetchProducts();
  });

</script>

<template>
  <div>
    <table
        v-if="loanProducts
              && Array.isArray(loanProducts)
              && loanProducts.length > 0
              && ratesStore.rates.rate">
      <thead>
        <tr>
          <th>Залоговое имущество</th>
          <th>Дата начала залога</th>
          <th>Дата окончания залога</th>
          <th>Сумма залогового имущества</th>
          <th>Планируемая сумма реализации залогового имущества</th>
          <th>Сумма задолженности</th>
        </tr>
      </thead>
      <tbody>
        <ProductsTableRow v-for="product in loanProducts" :key="product.id" :product="product" :rate="ratesStore.rates.rate" />
      </tbody>
    </table>
    <div v-else>
      <p>Загрузка данных...</p>
    </div>
  </div>
</template>

<style scoped>
table{
  table-layout: fixed;
  border-spacing: 0 15px;
}
thead{
  background-color: #D3D3D3;
}

th{
  padding: 20px;
  font-weight: 300;
}
tbody{
  background-color: lightgray;
}

</style>
