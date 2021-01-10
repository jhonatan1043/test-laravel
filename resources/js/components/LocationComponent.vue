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
        <button
          type="button"
          class="btn btn-primary"
          @click="saveLocation()"
          v-if="edit != 1"
        >
          Guardar
        </button>
        <button
          type="button"
          class="btn btn-primary"
          @click="updateLocation()"
          v-else
        >
          Actualizar
        </button>
        <button type="button" class="btn btn-warning" @click="cancelLocation()">
          Cancelar
        </button>
      </template>
      <template v-else>
        <button type="button" class="btn btn-secondary" @click="newLocation()">
          Nuevo
        </button>
        <hr />
        <div class="table table-resposive">
          <table class="table table-bordered table-sm table-hove">
            <thead>
              <th width="200" class="text-center">Opciones</th>
              <th width="500" class="text-center">Direcciòn</th>
              <th width="500" class="text-center">Responsable</th>
            </thead>
            <tbody>
              <tr v-for="(item, index) in array" :key="index">
                <td>
                  <button
                    type="button"
                    class="btn btn-warning"
                    @click="editLocation(item)"
                  >
                    Editar
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger"
                    @click="deleteLocation(item.id_location)"
                  >
                    Eliminar
                  </button>
                </td>
                 <td v-text="item.address"></td>
                <td v-text="item.name_responsible"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </template>
    </form>
  </div>
</template>

<script defer src="../script/Location.js"></script>