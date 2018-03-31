// register the grid component
Vue.component('demo-grid', {
    template: '#grid-template',
    props: {
      data: Array,
      columns: Array,
      filterKey: String
    },
    data: function () {
      var sortOrders = {}
      this.columns.forEach(function (key) {
        sortOrders[key] = 1
      })
      return {
        sortKey: '',
        sortOrders: sortOrders
      }
    },
    computed: {
      filteredData: function () {
        var sortKey = this.sortKey
        var filterKey = this.filterKey && this.filterKey.toLowerCase()
        var order = this.sortOrders[sortKey] || 1
        var data = this.data
        if (filterKey) {
          data = data.filter(function (row) {
            return Object.keys(row).some(function (key) {
              return String(row[key]).toLowerCase().indexOf(filterKey) > -1
            })
          })
        }
        if (sortKey) {
          data = data.slice().sort(function (a, b) {
            a = a[sortKey]
            b = b[sortKey]
            return (a === b ? 0 : a > b ? 1 : -1) * order
          })
        }
        return data
      }
    },
    filters: {
      capitalize: function (str) {
        return str.charAt(0).toUpperCase() + str.slice(1)
      }
    },
    methods: {
      sortBy: function (key) {
        this.sortKey = key
        this.sortOrders[key] = this.sortOrders[key] * -1
      }
    }
  })
  
  // bootstrap the demo
  var demo = new Vue({
    el: '#demo',
    data: {
      searchQuery: '',
      gridColumns: ['Data', 'Horário', 'Curso', 'Sala', 'Aluno', 'Titulo', 'Orientador', 'Convidado 1', 'Convidado 2'],
      gridData: [
        { Data: '11/12/2017', Horário: '08:00', Curso: 'ADS', Sala: 'B4', Aluno: 'Rafael Henrique', Titulo: 'Estufa Hidropônica microcontrolada', Orientador: 'Rossano', "Convidado 1": 'Alberto Martins', "Convidado 2": 'Anderson Luis'},
        { Data: '11/12/2017', Horário: '08:00', Curso: 'ADS', Sala: 'B4', Aluno: 'Rafaela Miranda', Titulo: 'Estufa Hidropônica microcontrolada', Orientador: 'Rossano', "Convidado 1": 'Alberto Martins', "Convidado 2": 'Anderson Luis'},
        { Data: '11/12/2017', Horário: '08:00', Curso: 'Jogos', Sala: 'B4', Aluno: 'Victo Ferreira', Titulo: 'Estufa Hidropônica microcontrolada', Orientador: 'Rossano', "Convidado 1": 'Alberto Martins', "Convidado 2": 'Anderson Luis'},
        { Data: '11/12/2017', Horário: '08:00', Curso: 'ADS', Sala: 'B4', Aluno: 'Rogério Nascimento', Titulo: 'Estufa Hidropônica microcontrolada', Orientador: 'Rossano', "Convidado 1": 'Alberto Martins', "Convidado 2": 'Anderson Luis'},
        { Data: '11/12/2017', Horário: '08:00', Curso: 'ADS', Sala: 'B4', Aluno: 'José Claudio', Titulo: 'Estufa Hidropônica microcontrolada', Orientador: 'Rossano', "Convidado 1": 'Alberto Martins', "Convidado 2": 'Anderson Luis'},
      ]
    }
  })