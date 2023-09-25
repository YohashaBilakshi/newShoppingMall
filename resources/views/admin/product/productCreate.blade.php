
  <body>
    
    @include('admin/layouts/headDashboard')

    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add New Product Details</h4>
            {{-- <p class="card-description"> Product Infromation </p> --}}
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Product code</label>
                <input type="text" class="form-control" id="code" placeholder="0921">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Portable Mini Heat Sealing Machine">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <div class="input-group-prepend">
                    <span class="input-group-text">0.00</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Dummey Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <div class="input-group-prepend">
                    <span class="input-group-text">0.00</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Discount % </label>
                <input type="text" class="form-control" name="discount" placeholder="20">
              </div>

                <div class="form-group">
                <label for="exampleInputCity1">Quantity</label>
                <input type="number" class="form-control" name="qty" placeholder="2">
              </div>

              <div class="form-group">
                <label for="exampleSelectGender">Category</label>
                <select class="form-control" name="category">
                  <option>Food</option>
                  <option>Clothes</option>
                </select>
              </div>
              
              
              <div class="form-group">
                <label>Product Image</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Product Description</label>
                <textarea class="form-control" name="description" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark">Cancel</button>
            </form>
          </div>
        </div>
      </div>

    </div>

  </body>