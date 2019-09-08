              
              Category:
              <select name="category_id" class="form-control" id="cat_name">

                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

                </select>
              </br>
                Name:
                <input type="text" name="name" id="name" class="form-control" placeholder="" />
                <br/>
                Price:
                <input type="number" min="0.01" step="0.01" max="5000" name="price" id="price" class="form-control">
                <br/>
                Durations:
                <input type="number" name="durations" class="form-control" id="durations"> 
                <br/>
                
                 <div class="input-group">
                        <div class="form-group" class="d-flex" class="flex-colmun">
                          <label for="image">Add Image</label>
                           <input type="file" name="image">
                          </div>
                 </div>

