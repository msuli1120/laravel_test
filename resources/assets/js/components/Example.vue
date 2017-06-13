<template>
    <div class="container">
      <div class="col-md-6">
        <h2>This is Example vue component</h2>
        <button @click="all" class="btn btn-primary">Get</button>
        <div v-if="results.length" v-model="results" v-for="result in results">
          <div>
            <p>{{ result.id }}. {{ result.title }}: {{ result.description }}</p>
            <input type="checkbox" :value="result" v-model="checkNames">
          </div>
        </div>
        <button @click="checkout">Check</button>
        <button @click="posttest">Post</button>
        <li v-for="num in checkNames">{{ num }}</li>
      </div>


      <div class="col-md-6">
        {{ output }}
      </div>

    </div>
</template>

<script>
    export default {
      data(){
        return {
          results: [],
          title: 'Hello',
          description: 'hi',
          checkNames: [],
          output: [],
        }
      },
      methods: {
        all: function() {
          axios.request('/things').then((response) => {
            console.log(response.data);
            this.results = response.data;
          });
        },
        posttest: function() {
          axios.post('/thing', {
            title: this.title,
            description: this.description,
          }).then((response) => {
            console.log(response);
          });
        },

      }
    }
</script>
