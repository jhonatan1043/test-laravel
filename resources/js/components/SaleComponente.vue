<template>
  <div>
    <div class="shadow-none p-2 mb-2 bg-light">
      <h5 style="color: #dcdad6">VENTAS:</h5>
    </div>
    <form>
      <template v-if="view == 1">
        <div class="row">
          <div class="form-group col-12">
            <label for="name">Direcciòn</label>
            <select class="form-control" v-model="idLocation">
              <option selected :value="0">Seleccione Direcciòn</option>
              <option
                v-for="item in arrayAddres"
                :key="item.id_location"
                :value="item.id_location"
                v-text="item.address"
              ></option>
            </select>
          </div>
          <div class="form-group col-xl-10 col-xs-12">
            <label for="purchase_price">Producto</label>
            <select class="form-control" v-model="idProduct">
              <option selected :value="0">Seleccione Producto</option>
              <option
                v-for="item in arrayProduct"
                :key="item.id_product"
                :value="item.id_product"
                v-text="item.name"
              ></option>
            </select>
          </div>
          <div class="form-group col-xl-2 col-xs-12">
            <label for="spending">Cantidad</label>
            <input
              type="number"
              class="form-control"
              id="quantity"
              v-model="quantity"
            />
          </div>
        </div>
        <button
          type="button"
          class="btn btn-primary"
          @click="saveSale()"
          v-if="edit != 1"
        >
          Guardar
        </button>
        <button
          type="button"
          class="btn btn-primary"
          @click="updateSale()"
          v-else
        >
          Actualizar
        </button>
        <button type="button" class="btn btn-warning" @click="cancelSale()">
          Cancelar
        </button>
      </template>
      <template v-else>
        <button type="button" class="btn btn-secondary" @click="newSale()">
          Vender
        </button>
        <hr />
        <div class="table table-resposive">
          <table class="table table-bordered table-sm table-hove">
            <thead>
              <th width="200" class="text-center">Opciones</th>
              <th width="500" class="text-center">Direcciòn</th>
              <th width="500" class="text-center">Producto</th>
              <th width="200" class="text-center">cantidad</th>
            </thead>
            <tbody>
              <tr v-for="(item, index) in array" :key="index">
                <td>
                  <button
                    type="button"
                    class="btn btn-warning"
                    @click="editSale(item)"
                  >
                    Editar
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger"
                    @click="deleteSale(item.id_product)"
                  >
                    Eliminar
                  </button>
                </td>
                <td v-text="item.address"></td>
                <td v-text="item.name"></td>
                <td v-text="item.quantity"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </template>
    </form>
  </div>
</template>

<script defer src="../script/sale.js"></script>