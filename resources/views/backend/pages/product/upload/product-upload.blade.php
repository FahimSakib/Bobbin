@extends('backend.layouts.app')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
    <h2>Product Upload</h2>
    <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <form>
                    <div class="card-header">
                      {{-- <h4>Server-side Validation</h4> --}}
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control " value="" required="">
                        <div class="invalid-feedback">
                          Oh no! Title is invalid.
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control " required="" value="">
                        <div class="invalid-feedback">
                          Oh no! Price is invalid.
                        </div>
                      </div>
                          <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control " required="" value="">
                        <div class="invalid-feedback">
                          Oh no! Quantity is invalid.
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Short Description</label>
                        <input type="email" class="form-control">
                      </div>
                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea class="form-control " required=""></textarea>
                        <div class="invalid-feedback">
                          Oh no! You entered an inappropriate Description.
                        </div>
                      </div>
                      
                         <div class="form-group">
                      <label>Image 1</label>
                      <input type="file" class="form-control">
                    </div>
                        <div class="form-group">
                      <label>Image 2</label>
                      <input type="file" class="form-control">
                    </div>
                        <div class="form-group">
                      <label>Image 3</label>
                      <input type="file" class="form-control">
                    </div>
                        <div class="form-group">
                      <label>Image 4</label>
                      <input type="file" class="form-control">
                    </div>
                     <div class="form-group">
                      <label>Category</label>
                      <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>

                    {{-- <div class="section-title">Select Group Button</div> --}}
                 <div class="form-group">
                      <label class="form-label">Available Sizes</label>
                      <div class="selectgroup selectgroup-pills">
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="S" class="selectgroup-input" >
                          <span class="selectgroup-button">S</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="M" class="selectgroup-input">
                          <span class="selectgroup-button">M</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="L" class="selectgroup-input">
                          <span class="selectgroup-button">L</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="XL" class="selectgroup-input">
                          <span class="selectgroup-button">XL</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="XXL" class="selectgroup-input">
                          <span class="selectgroup-button">XXL</span>
                        </label>
                        
                      </div>
                    </div>
                       <div class="form-group">
                      <label class="form-label">Available Colors</label>
                      <div class="selectgroup selectgroup-pills">
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="Red" class="selectgroup-input" >
                          <span class="selectgroup-button">Red</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="Black" class="selectgroup-input">
                          <span class="selectgroup-button">Black</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="Blue" class="selectgroup-input">
                          <span class="selectgroup-button">Blue</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="White" class="selectgroup-input">
                          <span class="selectgroup-button">White</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="checkbox" name="value" value="Green" class="selectgroup-input">
                          <span class="selectgroup-button">Green</span>
                        </label>
                        
                      </div>
                    </div>
               
                   
            
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>

                    </div>
             
                   
                      </div>
                    </div>
                  </form>
              
              </div>
    </section>
    @include('backend.include.setting-sidebar')
</div>
@endsection