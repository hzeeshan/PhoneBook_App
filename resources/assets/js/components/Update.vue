<template>
	
<div class="modal fade" id="myModal_3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update {{ list.name }} 's the Details</h4>
        </div>
        <div class="modal-body">
          <form action="">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" :class="{'alert-danger':errors.name}" placeholder="Name" v-model="list.name">
                  <p class="text-danger" v-if="errors.name">{{ errors.name[0] }}</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="name">Email</label>
                  <input type="text" class="form-control" :class="{'alert-danger':errors.email}" placeholder="Email" v-model="list.email">
                  <p class="text-danger" v-if="errors.email">{{ errors.email[0] }}</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="name">Phone</label>
                  <input type="text" class="form-control" :class="{'alert-danger':errors.phone}" placeholder="Phone" v-model="list.phone">
                  <p class="text-danger" v-if="errors.phone">{{ errors.phone[0] }}</p>
                  </div>
                </div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" @click="update()" data-dismiss="modal">Update</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</template>

<script type="text/javascript">

  export default {

    data() {

      return {

        list: { },

        errors: {}
      }
    },

    methods: {

      update() {
         axios.patch(`/phonebook/${this.list.id}`, this.$data.list)
        .then((response) => console.log(response))
        .catch((error) => this.errors = error.response.data.errors)
      }
    }

  }
</script>