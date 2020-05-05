<template>
  <div class="card-body">
    <router-link to="/admin/product/create">
      <el-button type="success" style="width:130px">Create</el-button>
    </router-link>

    <el-dropdown trigger="click" @command="showPerPage">
      <el-button type="primary">
        Show per page
        <i class="el-icon-arrow-down el-icon--right"></i>
      </el-button>
      <el-dropdown-menu slot="dropdown">
        <el-dropdown-item command="2">2</el-dropdown-item>
        <el-dropdown-item command="3">3</el-dropdown-item>
        <el-dropdown-item command="4">4</el-dropdown-item>
      </el-dropdown-menu>
    </el-dropdown>

    <el-input class="search-input" v-model="search" size="mini" placeholder="Type to search" />

    <el-table
      v-loading="loading"
      :data="product"
      :default-sort="{prop: 'date', order: 'descending'}"
      style="width: 100%"
    >
      <el-table-column prop="name" label="Name" sortable></el-table-column>
      <el-table-column prop="price" label="Price" sortable></el-table-column>
      <el-table-column prop="on_stock" label="On stock" sortable></el-table-column>
      <el-table-column label="Operations">
        <template slot-scope="scope">
          <el-button size="mini" @click="handleEdit(scope.$index, scope.row)">Edit</el-button>
          <el-button size="mini" type="danger" @click="deleteProduct(scope.row)">Delete</el-button>
        </template>
      </el-table-column>
    </el-table>

    <div class="block">
      <el-pagination
        background
        layout="prev, pager, next"
        :total="total"
        :current-page="currentPage"
        :page-size="pageSize"
        @current-change="changePage"
      ></el-pagination>
    </div>
  </div>
</template>

 <style lang="scss">
.card-body {
  .search-input {
    float: right;
    width: 24%;
  }
}
</style> scoped>

<script>
export default {
  data() {
    return {
      product: [],
      loading: false,
      total: 0,
      currentPage: 1,
      pageSize: 2,
      search: ""
    };
  },
  created() {
    this.getData();
  },
  methods: {
    changePage(page) {
      this.currentPage = page;
      this.getData();
    },
    getData() {
      this.loading = true;
      axios
        .get(`/api/product?limit=${this.pageSize}&page=${this.currentPage}`)
        .then(response => {
          this.product = response.data.data;
          this.loading = false;
          this.total = response.data.total;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    deleteProduct(product) {
      this.$confirm("Bạn có muốn xóa ???", "Warning", {
        confirmButtonText: "OK",
        cancelButtonText: "Cancel",
        type: "warning"
      })
        .then(() => {
          axios
            .delete(`/api/product/${product.id}`)
            .then(response => {
              if (response.status == 200) this.getData();
            })
            .catch(function(error) {
              console.log(error);
            });
        })
        .catch(() => {});
    },
    showPerPage(command) {
      this.pageSize = parseInt(command);
      this.currentPage = 1;
      this.getData();
    }
  }
};
</script>
