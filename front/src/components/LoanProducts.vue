<script setup>
  import ProductsTable from "@/components/ProductsTable.vue";
  import RateForm from "@/components/RateForm.vue";
</script>

<template>
  <div class="container">
    <p class="header">Залоговое имущество</p>
    <RateForm />
    <ProductsTable />
  </div>
</template>

<style scoped>
  .container{
    max-width: 1200px;
    margin: auto;
  }
  @media (max-width: 1200px) {
    .container{
      padding: 0 16px;
    }
  }
  .header{
    font-family: "Inter", sans-serif;
    font-size: 40px;
    font-weight: 200;
    margin-top: 100px;
    margin-bottom: 50px;
    text-align: center;
  }
</style>