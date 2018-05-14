<?php include("cabecalho.php")?>
  <!-- component template -->
  <script type="text/x-template" id="grid-template">
  <table>
    <thead>
      <tr>
        <th v-for="key in columns"
          @click="sortBy(key)"
          :class="{ active: sortKey == key }">
          {{ key | capitalize }}
          <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
          </span>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="entry in filteredData">
        <td v-for="key in columns">
          {{entry[key]}}
        </td>
      </tr>
    </tbody>
  </table>
</script>

  <!-- demo root element -->
  <div id="demo">
    <form id="search">
      Filtro:
      <input name="query" v-model="searchQuery">
    </form>
    <br>
    <demo-grid :data="gridData" :columns="gridColumns" :filter-key="searchQuery">
    </demo-grid>
  </div>
</body>
<script src="tabela.php"></script>

<?php include("rodape.php") ?>
