import { defineStore } from 'pinia';
import axios from 'axios';

export const useRatesStore = defineStore('rates', {
    state: () => ({
        rates: {},
        newRate: null,
    }),
    actions: {
        async fetchRates() {
            const response = await axios.get('http://127.0.0.1:8000/api/rates/PSK');
            if (response.status === 200) {
                this.rates = response.data;
            } else {
                alert(response.data);
            }
        },
        async updateRate() {
            if (this.newRate && this.newRate > 0 && this.newRate < 100) {
                this.rates.rate = this.newRate;
                const response = await axios.patch(`http://127.0.0.1:8000/api/rates/PSK`, this.rates);
                if (response.status === 200) {
                    this.rates = response.data;
                    this.newRate = null;
                } else {
                    alert(response.data);
                }
            }
        },
    },
});
