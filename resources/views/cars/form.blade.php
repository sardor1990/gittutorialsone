            <div class="container-fluid forms">
            <div class=" mb-3">
                    <label for="name" class="form-label">Cars Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $car->name}}">
               </div>
            <div class="mb-3">
                <label for="description" class="form-label">Info Cars</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') ?? $car->description}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">LornMore</label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"  name="text" value="{{ old('text') ?? $car->text}}"></textarea>
            </div>
            <div class="form-group">
                   {{ Form::file('cover_image')}}
               </div>
            </div>
                           