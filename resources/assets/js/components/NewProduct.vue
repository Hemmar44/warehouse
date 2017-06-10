<template>
    <form>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" v-model='quantity'>
                </div>
                <div class="form-group">
                    <label for="price_net">Price Net</label>
                    <input type="text" class="form-control" id="price_net" name="price_net" placeholder="Price Net" v-model='net'>
                </div>
                <div class="form-group">
                    <label for="tax">Tax</label>
                    <input type="text" class="form-control" id="tax" name="tax" value="23%" readonly="">
                </div>
                <div class="form-group">
                    <label for="price_gross">Price Gross</label>
                    <input type="text" class="form-control" id="price_gross" name="price_gross" placeholder="Price Gross" v-model='gross' readonly="">
                </div>
                
                <div class="form-group">
                    <label for="value_net">Value Net</label>
                    <input type="text" class="form-control" id="value_net" name="value_net" placeholder="Value Net" v-model='valueNet' readonly="">
                </div>
                <div class="form-group">
                    <label for="value_gross">Value Gross</label>
                    <input type="text" class="form-control" id="value_gross" name="value_gross" placeholder="Value Gross" v-model='valueGross' readonly="">
                </div>
            </form>
</template>

<script>
    export default {

        data() {
            return {
            
                net: '',
                tax: 1.23,
                quantity: ''
    
            }
        },

        computed: {

        gross() {

            if(this.net) {
            
            return (this.net * this.tax).toFixed(2);

            }

            return '';
        },

        valueNet() {

            if(this.quantity && this.net) {

                return (this.quantity * this.net).toFixed(2);
            }

            return '';
        },

        valueGross() {

            if(this.quantity && this.gross) {

                return (this.quantity * this.gross).toFixed(2);
            }

            return '';
        }
    }
        
    }
</script>
