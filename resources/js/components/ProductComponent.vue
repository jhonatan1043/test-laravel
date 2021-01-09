<template>
  <div>
    <div class="shadow-none p-2 mb-2 bg-light">
      <h5 style="color: #dcdad6">PRODUCTOS:</h5>
    </div>
    <form>
      <template v-if="view == 1">
        <div class="row">
          <div class="form-group col-xl-6 col-xs-12">
            <label for="name">Nombre del Producto</label>
            <input
              type="text"
              class="form-control"
              id="name"
              v-model="name"
            />
          </div>
          <div class="form-group col-xl-6 col-xs-12">
            <label for="purchase_price">costo</label>
            <input
              type="number"
              class="form-control"
              id="purchase_price"
              v-model="purchase_price"
            />
          </div>
          <div class="form-group col-xl-6 col-xs-12">
            <label for="spending">Gastos</label>
            <input
              type="number"
              class="form-control"
              id="spending"
              v-model="spending"
            />
          </div>
          <div class="form-group col-xl-6 col-xs-12">
            <label for="price_finished">Precio Venta</label>
            <input
              type="number"
              class="form-control"
              id="price_finished"
              v-model="price_finished"
            />
          </div>
        </div>
        <button type="button" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-warning">Cancelar</button>
      </template>
      <template v-else>
        <button class="btn btn-secondary">Nuevo</button>
        <hr />
        <div class="table table-resposive">
          <table class="table table-bordered table-sm table-hove">
            <thead>
              <th class="text-center">Producto</th>
              <th class="text-center">Costo</th>
              <th class="text-center">Gasto</th>
              <th class="text-center">Precio Venta</th>
            </thead>
            <tbody>
              <tr v-for="(item, index) in array" :key="index">
                <td>
                  <button class="btn btn-danger">Editar</button>
                  <button class="btn btn-danger">Eliminar</button>
                </td>
                <td v-text="item.name"></td>
                <td v-text="item.purchase_price"></td>
                <td v-text="item.spending"></td>
                <td v-text="item.price_finished"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </template>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      view: 0,
      name: "",
      purchase_price: 0,
      spending:0,
      price_finished: 0,
      array: [],
    };
  },
  methods: {},
};
</script>