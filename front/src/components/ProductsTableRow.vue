<script setup>
import {computed, defineProps} from 'vue';

  const props = defineProps({
    product: {
      type: Object,
      required: true,
    },
    rate: {
      type: Number,
      required: true,
    },
  });

  const days = computed(() => {
    const startDate = new Date(props.product?.date_start_loan);
    const endDate = new Date(props.product?.date_end_loan);
    return (endDate - startDate) / (1000 * 60 * 60 * 24);
  });

  const totalLoanValue = computed(() => {
    return (props.product?.sum_loan) + (days.value * props.rate);
  });

  const rowClass = computed(() => {
    return totalLoanValue.value < (props.product?.sum_realize_loan || 0) ? 'red' : 'green';
  });

  const formatDate = (date) => {
    return new Date(date).toLocaleDateString();
  };
</script>

<template>
  <tr :class="rowClass">
    <td>{{ props.product?.name }}</td>
    <td>{{ formatDate(props.product?.date_start_loan) }}</td>
    <td>{{ formatDate(props.product?.date_end_loan) }}</td>
    <td>{{ props.product?.sum_loan }} ₽</td>
    <td>{{ props.product?.sum_realize_loan }} ₽</td>
    <td>{{ totalLoanValue.toFixed(2) }} ₽</td>
  </tr>
</template>

<style scoped>
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

  .green{
    background-color: #c9ffc9;
  }
  .red{
    background-color: #ffa2a2;
  }
</style>
