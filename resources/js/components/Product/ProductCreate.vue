<template>
  <el-form ref="form" label-width="120px">
    <el-form-item label="Category :">
      <el-select v-model="default_category" placeholder="Please select category">
        <el-option
          v-for="category in categories"
          :key="category.id"
          :label="category.name"
          :value="category.id"
        ></el-option>
      </el-select>
    </el-form-item>

    <el-form-item label="Product Name :" :class="{error: validation.hasError('name')}">
      <el-input v-model="name"></el-input>
      <div class="message">{{ validation.firstError('name') }}</div>
    </el-form-item>

    <el-form-item label="Description :" :class="{error: validation.hasError('description')}">
      <el-input type="textarea" :rows="2" placeholder="Please input" v-model="description"></el-input>
      <div class="message">{{ validation.firstError('description') }}</div>
    </el-form-item>

    <el-form-item label="Price :" :class="{error: validation.hasError('price')}">
      <el-input v-model="price"></el-input>
      <div class="message">{{ validation.firstError('price') }}</div>
    </el-form-item>

    <el-form-item label="On stock :" :class="{error: validation.hasError('onstock')}">
      <el-input v-model="onstock"></el-input>
      <div class="message">{{ validation.firstError('onstock') }}</div>
    </el-form-item>

    <el-form-item label="Image List :" :class="{error: validation.hasError('name')}">
      <el-upload
        action
        :auto-upload="false"
        list-type="picture-card"
        :on-preview="handlePictureCardPreview"
        :before-upload="beforeImageUpload"
        :on-change="onChange"
        :on-remove="deleteImage"
        :file-list="fileList"
      >
        >
        <i class="el-icon-plus"></i>
      </el-upload>
      <el-dialog :visible.sync="dialogVisible">
        <img width="100%" :src="dialogImageUrl" alt />
      </el-dialog>

      <el-button type="primary" @click="test">Upload</el-button>
      <div class="message">{{ validation.firstError('name') }}</div>
    </el-form-item>

    <el-form-item>
      <el-button type="primary" @click="createProduct">Create</el-button>
      <el-button>Cancel</el-button>
    </el-form-item>
  </el-form>
</template>

<style lang="scss" scoped>
.el-form {
  padding-top: 10px;
  .el-input {
    width: 75%;
  }
  .el-textarea {
    width: 75%;
  }
}
</style>

<script>
import Vue from "vue";
import SimpleVueValidation from "simple-vue-validator";
const Validator = SimpleVueValidation.Validator;
Vue.use(SimpleVueValidation);

export default {
  data() {
    return {
      categories: "",
      name: "",
      description: "",
      price: "",
      onstock: "",
      default_category: "",
      dialogImageUrl: "",
      dialogVisible: false,
      fileList: []
    };
  },
  validators: {
    name: function(value) {
      return Validator.value(value).required();
    },
    description: function(value) {
      return Validator.value(value)
        .required()
        .maxLength(255);
    },
    price: function(value) {
      return Validator.value(value)
        .required()
        .greaterThan(0);
    },
    onstock: function(value) {
      return Validator.value(value)
        .required()
        .greaterThanOrEqualTo(0);
    }
  },
  async created() {
    await this.getCategories();
  },
  methods: {
    getCategories() {
      axios
        .get(`/api/categories`)
        .then(response => {
          this.categories = response.data;
          this.default_category = response.data[0].id;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    createProduct() {
      let vm = this;
      vm.$validate().then(function(success) {
        if (success) {
          var params = {
            category_id: vm.default_category,
            name: vm.name,
            description: vm.description,
            price: vm.price,
            on_stock: vm.onstock,
            image: vm.fileList
          };
          axios
            .post(`/api/product`, params)
            .then(response => {
              vm.$router.push("/admin/product/index");
            })
            .catch(function(error) {
              console.log(error);
            });

          //get file
          let formData = new FormData();
          vm.fileList.forEach(function getListFile(item,index){
            var file_name = 'file' +index
            formData.append(file_name, item.raw);
          });

          axios
            .post("http://webbanhang.com/api/categories", formData, {
              headers: {
                "Content-Type": "multipart/form-data"
              }
            })
            .then(function(data) {
              
            })
            .catch(function() {
              console.log("FAILURE!!");
            });
        }
      });
    },
    handlePictureCardPreview(file) {
      this.dialogImageUrl = file.url;
      this.dialogVisible = true;
    },
    beforeImageUpload(file) {
      const isJPG = file.type === "image/jpeg";
      const isLt2M = file.size / 1024 / 1024 < 2;

      if (!isJPG) {
        this.$message.error("Avatar picture must be JPG format!");
      }
      if (!isLt2M) {
        this.$message.error("Avatar picture size can not exceed 2MB!");
      }

      return isJPG && isLt2M;
    },
    onChange(file, fileList) {
      this.fileList.push(file);
    },
    deleteImage(file, fileList) {
      var index = this.fileList.indexOf(file["uid"]);
      this.fileList.splice(index, 1);
    },
    test() {
      console.log(this.fileList);
    }
  }
};
</script>