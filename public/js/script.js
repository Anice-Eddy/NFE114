axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.component('entreprises', {
    data: function () {
        return {
            input_entreprise: '',
            entreprises: []
        }
    },
    template : `<div>
                    <input type="text"   v-model="input_entreprise">
                    <input type="button" value="Ajouter" @click="addEntreprise(input_entreprise)">
                    <ul v-if="entreprises.length > 0">
                        <li v-for="entreprise in entreprises">
                            {{ entreprise['name'] }} <input type="button" value="Supprimer" @click="deleteEntreprise(entreprise['id'])">
                        </li>
                    </ul>
                    <p v-else> Liste est vide. </p>
                </div>`,
    methods: {
        addEntreprise: function (p_entreprise) {
            axios.post('/entreprises', {'name': p_entreprise}).then(
                response => {
                    this.entreprises.push(response.data)
                }
            )
        },
        deleteEntreprise: function (p_id) {
            axios.delete('/entreprises/' + p_id).then(
                response => {
                    index = this.entreprises.findIndex(entreprise => entreprise['id'] == p_id); //recherche de l'index correspondant à p_id
                    this.entreprises.splice(index, 1)
                }
            )
        }
    },
    mounted: function () {
        axios.get('/entreprises').then(
            response => {
                this.entreprises = response.data
            }
        )
    }
  });

let app = new Vue({
                    el: '#app'
                });