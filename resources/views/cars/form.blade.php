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
                <label for="text" class="form-label">Lorn More</label>
                <input type="text" class="form-control" id="text" name="text" value="{{ old('text') ?? $car->text}}">
            </div>
            <div class="form-group">
                   {{ Form::file('cover_image')}}
               </div>
            </div>
                           