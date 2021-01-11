<template>
  <div>
    <div class="shadow-none p-2 mb-2 bg-light">
      <h5 style="color: #dcdad6">Productos Categoria:</h5>
    </div>
    <label>Producto:</label>
    <select class="form-control">
      <option selected :value="0">Seleccione Producto</option>
      <option
        v-for="item in arrayProduct"
        :key="item.id_product"
        :value="item.id_product"
        v-text="item.name"
      ></option>
    </select>
    <hr />
    <div class="card">
      <div v-for="(item, index) in arrayCategories" :key="index">
        <div class="form-check">
          <input
            type="checkbox"
            class="form-check-input"
            :value="item.id_category"
          />
          <label class="form-check-label">{{ item.name }}</label>
        </div>
      </div>
    </div>
    <hr />
    <button type="button" class="btn btn-success">Registrar</button>
  </div>
</template>
<script defer src="../script/ProductCategory.js">
</script>
