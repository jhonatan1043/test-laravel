<template>
  <div>
    <div class="shadow-none p-2 mb-2 bg-light">
      <h5 style="color: #dcdad6">CATEGORIAS:</h5>
    </div>
    <form>
      <template v-if="view == 1">
        <div class="form-group">
          <label for="nameCategory">Nombre de la categoria</label>
          <input
            type="text"
            class="form-control"
            id="nameCategory"
            v-model="name"
          />
        </div>
        <button type="button" class="btn btn-primary" @click="saveCategory()" v-if="edit != 1">
          Guardar
        </button>
        <button type="button" class="btn btn-primary" @click="updateCategory()" v-else>
          Actualizar
        </button>
        <button type="button" class="btn btn-warning" @click="cancelCategory(this)">
          Cancelar
        </button>
      </template>
      <template v-else>
        <button type="button" class="btn btn-secondary" @click="newCetegory()">Nuevo</button>
        <hr />
        <div class="table table-resposive">
          <table class="table table-bordered table-sm table-hove">
            <thead>
              <th width="200">Opciones</th>
              <th class="text-center">Categoria</th>
            </thead>
            <tbody>
              <tr v-for="(item, index) in array" :key="index">
                <td>
                  <button type="button" class="btn btn-warning" @click="editCategory(item)">Editar</button>
                  <button type="button"
                    class="btn btn-danger"
                    @click="deleteCategory(item.id_category)"
                  >
                    Eliminar
                  </button>
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

<script defer src="../script/Category.js"></script>
