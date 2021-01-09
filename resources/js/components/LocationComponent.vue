<template>
  <div>
    <div class="shadow-none p-2 mb-2 bg-light">
      <h5 style="color: #dcdad6">UBICACIONES:</h5>
    </div>
    <form>
      <template v-if="view == 1">
        <div class="form-group">
          <label for="address">Direcciòn</label>
          <input
            type="text"
            class="form-control"
            id="address"
            v-model="address"
          />
        </div>
        <div class="form-group">
          <label for="address">Responsable</label>
          <input
            type="text"
            class="form-control"
            id="responsible"
            v-model="responsible"
          />
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
              <th class="text-center">Ubicaciòn</th>
            </thead>
            <tbody>
              <tr v-for="(item, index) in array" :key="index">
                <td>
                  <button class="btn btn-danger">Editar</button>
                  <button class="btn btn-danger">Eliminar</button>
                </td>
                <td v-text="item.name"></td>
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
      address: "",
      responsible:"",
      array: [],
    };
  },
  methods: {},
};
</script>