<script setup>
import { onMounted } from 'vue';
import { useRatesStore } from '@/stores/ratesStore';

const ratesStore = useRatesStore();

onMounted(() => {
  ratesStore.fetchRates();
});
</script>

<template>
  <div class="rate">
    <p>{{ ratesStore.rates?.name }}: <span>{{ ratesStore.rates?.rate?.toFixed(2) }}%</span></p>
    <div>
      <input v-model="ratesStore.newRate" type="number" placeholder="Введите новое значение PSK..." />
      <button @click="ratesStore.updateRate">Обновить</button>
    </div>
  </div>
</template>

<style scoped>

  .rate{
    display: flex;
    gap: 20px;
    justify-content: space-between;
    align-items: center;
  }

  button {
    background-color: #FFFFFF;
    border: 1px solid #222222;
    border-bottom-right-radius: 8px;
    border-top-right-radius: 8px;
    box-sizing: border-box;
    color: #222222;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    font-weight: 300;
    line-height: 20px;
    margin: 0;
    outline: none;
    padding: 13px 23px;
    position: relative;
    text-align: center;
    text-decoration: none;
    touch-action: manipulation;
    transition: box-shadow .2s,-ms-transform .1s,-webkit-transform .1s,transform .1s;
    user-select: none;
    -webkit-user-select: none;
    width: auto;
    transition: 150ms;
  }

  button:hover{
    background: black;
    color: white;
  }

  input{
    box-sizing: border-box;
    padding: 13px 23px;
    border: 1px solid #222222;
    border-right: none;
    border-bottom-left-radius: 8px;
    border-top-left-radius: 8px;
    font-size: 16px;
    line-height: 20px;
    min-width: 350px;

  }

  p{
    font-weight: 300;
  }

  span{
    font-weight: 300;
    font-size: 25px;
  }

  input:focus-visible {
    outline: none;
    box-shadow: none;
  }
</style>