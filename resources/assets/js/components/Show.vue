<template>
	
<div class="modal fade" id="myModal_2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">See {{ list.name }} 's the Details</h4>
        </div>
        <div class="modal-body">
          <form action="">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <li class="list-group-item">
                  <label for="name">Name: </label> {{ list.name }}
                  </li>
                 </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <li class="list-group-item">
                  <label for="name">Email: </label> {{ list.email }}
                  </li>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <li class="list-group-item">
                  <label for="name">Phone: </label> {{ list.phone }}
                  
                    </li>
                  </div>
                </div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          
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

        list:''
      }
    }

  }

</script>