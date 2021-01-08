<template>
  <div>
    <div class="shadow-none p-2 mb-2 bg-light">
      <h5 style="color: #dcdad6">CATEGORIES:</h5>
    </div>
    <form>
      <template v-if="view == 1">
        <div class="form-group">
          <label for="nameCategory">Name Category</label>
          <input
            type="text"
            class="form-control"
            id="nameCategory"
            v-model="name"
          />
        </div>
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-warning">Cancelar</button>
      </template>
      <template v-else>
        <div class="table table-resposive">
          <table>
            <thead>
              <th class="text-center">Category</th>
            </thead>
            <tbody>
              <tr v-for="(item, index) in array" :key="index">
                <td>
                  <button>Edit</button>
                  <button>Delete</button>
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
      name: "",
      array: [],
    };
  },
  methods: {},
};
</script>
